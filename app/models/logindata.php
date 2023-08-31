<?php

class Logindata extends Dbh
{

    public function signIn($username)
    {

        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array($username));

        while ($row = $stmt->fetchAll()) {
            return $row;
        }
       
    }
}
