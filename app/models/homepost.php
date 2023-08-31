<?php

class HomePost extends Dbh
{

    public function loadPost()
    {

        $sql = "SELECT title, content, id FROM blog_posts";
        $stmt = $this->connect()->query($sql);

        while ($row = $stmt->fetchAll()) {
            return $row;
        }


    }
}
