<?php

class Post extends Dbh
{

    public function newPost($title, $content, $author_id)
    {

        $sql = "INSERT INTO blog_posts (title, content, author_id) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array($title, $content, $author_id));

        if (!$stmt) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    public function loadPost()

    {
        $sql = "SELECT title, content, id FROM blog_posts ORDER BY id DESC";
        $stmt = $this->connect()->query($sql);
        
        while ($row = $stmt->fetchAll()) {
            return $row;
        }
    }

    public function pagination($start, $limit)

    {
        $sql = "SELECT * FROM blog_posts ORDER BY id DESC LIMIT $start, $limit";
        $stmt = $this->connect()->query($sql);
        $q = $stmt->rowCount();

        while ($row = $stmt->fetchAll()) {
            return $row;
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

    public function deletePost($post_id)
    {
        $sql = "DELETE FROM blog_posts WHERE id= ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array($post_id));
    }


    public  function displayPostForUpdate($post_id)
    {
        $sql = "SELECT title, content FROM blog_posts WHERE id= ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array($post_id));

        while ($row = $stmt->fetchAll()) {
            $post = $row;
            return $post;
        }
    }

    public function updatePost($title, $content, $id)
    {


        $sql = "UPDATE blog_posts SET title='$title' ,content='$content' WHERE id='$id'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
    }
}
