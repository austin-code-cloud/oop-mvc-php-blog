<?php

class Auth extends Dbh
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

    public function checkUser($username, $email)
    {
        $sql = "SELECT username FROM users WHERE username = ? or email = ?";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($username, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }


        if ($stmt->rowCount() > 0) {
            $resultCheck = 1;
            return $resultCheck;
        } else {
            $resultCheck = 0;
            return $resultCheck;
        }
    }

    public function signUp($username, $email, $password)
    {


        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);

        $hashpwd = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $stmt->execute(array($username, $email, $hashpwd));

        if (!$stmt) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
    }
}
