<?php
session_start();

class Home extends Controller
{
    public function index()
    {
        $HomePost = $this->model('homepost');
        $HomePost->loadPost();

        $this->views('home/index', ['data' => $HomePost->loadPost()]);
    }

    public function signIn()
    {


        if (isset($_POST["login"])) {


            $username = $_POST["username"];
            $password = $_POST["password"];

            $loginUser = $this->model('logindata');
            $userLogin = $loginUser->signIn($username);

            $verifyPwd = password_verify($password, $userLogin[0]["password"]);

            if (!$verifyPwd) {
                $_SESSION['message'] = 'Invalid username or password';
                $this->views('auth/auth', ['message' => 'Invalid username or password']);
            } else {


                $_SESSION['user'] = $username;
                $_SESSION['id'] = $userLogin[0]["id"];


                $post = $this->model('post');
                $result = $post->loadPostForAuthor($_SESSION['id']);

                $this->views('admin', ['user' => $userLogin, 'authorpost' => $result]);
            }
        } else {
            echo 'not logged in';
        }
    }

    public function signUp()
    {


        if (isset($_POST["register"])) {

            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $checkUser = $this->model('register');
            $result = $checkUser->checkUser($username, $email);

            if ($result === 1) {

                $HomePost = $this->model('homepost');
                $HomePost->loadPost();

                $this->views('auth/auth', ['message' => 'User already exist!!!! Sign-In']);


            } else {

                $registerUser = $this->model('register');
                $result = $registerUser->signUp($username, $email, $password);

                $_SESSION['user'] = $username;

                $loginUser = $this->model('logindata');
                $userLogin = $loginUser->signIn($username);

                $_SESSION['id'] = $userLogin[0]["id"];


                $post = $this->model('post');
                $result = $post->loadPostForAuthor($_SESSION['id']);

                $this->views('admin', ['user' => $userLogin, 'authorpost' => $result]);
            }
        } else {
            echo 'not logged in';
        }
    }


    public function createPost()
    {

        if (!isset($_SESSION['user'])) {
            $this->views('auth/auth', ['message' => 'user does not exist']);
        } else if (isset($_SESSION['user'])) {

            $loginUser = $this->model('logindata');
            $userLogin = $loginUser->signIn($_SESSION['user']);

            $post = $this->model('post');
            $result = $post->loadPostForAuthor($_SESSION['id']);

            $this->views('admin', ['user' => $userLogin, 'authorpost' => $result]);
        }
    }
}
