<?php

class Post extends Dbh
{

    protected function newPost($title, $content, $author_id)
    {

        $sql = "INSERT INTO blog_posts (title, content, author_id) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($title, $content, $author_id))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        } 
        $stmt = null;
    }

    protected function loadPost()
    {

        $sql = "SELECT * FROM blog_post";
        $stmt = $this->connect()->query($sql);


        while ($row = $stmt->fetch()) {
            echo $row;
        }
    }

    public function loadPostForAuthor($author_id)
    {

        $sql = "SELECT * FROM blog_posts WHERE author_id= ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array($author_id));

        while ($row = $stmt->fetchAll()) {
            $post = $row;
            return $post;
        }
    }

    protected  function deletePost($post_id)
    {
        $sql = "DELETE FROM blog_posts WHERE id= ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array($post_id));
    }


    protected  function displayPostForUpdate($post_id)
    {
        $sql = "SELECT title, content FROM blog_posts WHERE id= ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array($post_id));

        while ($row = $stmt->fetch()) {
            $post = $row;
            return $post;
        }
    }

    protected  function updatePost($title, $content, $id)
    {


        $sql = "UPDATE blog_posts SET title='$title' ,content='$content' WHERE id='$id'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        } else {
            header("location: ../index.php");
        }
    }
}
