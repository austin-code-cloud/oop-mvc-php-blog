<?php
session_start();

class Admin extends Controller
{

    public function index()
    {

        $HomePost = $this->model('post');
        $HomePost->loadPost();

        $this->views('index', ['data' => $HomePost->loadPost()]);
    }

    public function signIn()
    {

        if (isset($_SESSION['user'])) {
            $loginUser = $this->model('auth');
            $userLogin = $loginUser->signIn($_SESSION['user']);

            $post = $this->model('post');
            $result = $post->loadPostForAuthor($_SESSION['id']);

            $this->views('admin', ['user' => $userLogin, 'authorpost' => $result]);
        } else  if (isset($_POST["login"])) {

            $username = $_POST["username"];
            $password = $_POST["password"];

            $loginUser = $this->model('auth');
            $userLogin = $loginUser->signIn($username);

            $verifyPwd = password_verify($password, $userLogin[0]["password"]);

            if (!$verifyPwd) {
                $_SESSION['message'] = 'Invalid username or password';
                $this->views('auth', ['message' => 'Invalid username or password']);
            } else {


                $_SESSION['user'] = $username;
                $_SESSION['id'] = $userLogin[0]["id"];


                $post = $this->model('post');
                $result = $post->loadPostForAuthor($_SESSION['id']);

                $this->views('admin', ['user' => $userLogin, 'authorpost' => $result]);
            }
        } else {
            $this->views('auth', ['message' => 'Invalid username or password']);
        }
    }

    public function signUp()
    {

        if (isset($_SESSION['user'])) {
            $loginUser = $this->model('auth');
            $userLogin = $loginUser->signIn($_SESSION['user']);

            $post = $this->model('post');
            $result = $post->loadPostForAuthor($_SESSION['id']);

            $this->views('admin', ['user' => $userLogin, 'authorpost' => $result]);
        } else if (isset($_POST["register"])) {

            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $checkUser = $this->model('auth');
            $result = $checkUser->checkUser($username, $email);

            if ($result === 1) {

                $HomePost = $this->model('post');
                $HomePost->loadPost();

                $this->views('auth', ['message' => 'User already exist!!!! Sign-In']);
            } else {

                $registerUser = $this->model('auth');
                $result = $registerUser->signUp($username, $email, $password);

                $_SESSION['user'] = $username;

                $loginUser = $this->model('auth');
                $userLogin = $loginUser->signIn($username);

                $_SESSION['id'] = $userLogin[0]["id"];


                $post = $this->model('post');
                $result = $post->loadPostForAuthor($_SESSION['id']);

                $this->views('admin', ['user' => $userLogin, 'authorpost' => $result]);
            }
        } else {
            $this->views('auth', ['message' => 'Sign Up']);
        }
    }

    public function logout()
    {
        session_destroy();

        $HomePost = $this->model('post');
        $HomePost->loadPost();

        header('location: index');
    }

    public function checkUsr()
    {

        if (!isset($_SESSION['user'])) {
            $this->views('auth', ['message' => 'user does not exist']);
        } else if (isset($_SESSION['user'])) {

            $loginUser = $this->model('auth');
            $userLogin = $loginUser->signIn($_SESSION['user']);

            $post = $this->model('post');
            $result = $post->loadPostForAuthor($_SESSION['id']);

            $this->views('admin', ['user' => $userLogin, 'authorpost' => $result]);
        }
    }
    public function createpost()
    {

        if (isset($_POST["post"])) {

            $postTitle = $_POST['title'];
            $postContent = $_POST['content'];


            $loginUser = $this->model('auth');
            $userLogin = $loginUser->signIn($_SESSION['user']);

            $newPost = $this->model('post');
            $newPost->newPost($postTitle, $postContent, $userLogin[0]['id']);

            //GOING TO ADMIN PAGE

            header('location: index');
        } else {

            $this->views('createpost', ['message' => 'Input Post Details']);
        }
    }
    public function editpost()
    {


        if (isset($_POST["update"])) {

            $postTitle = $_POST['title'];
            $postContent = $_POST['content'];
            $post_id = $_POST['id'];

            $newPost = $this->model('post');
            $newPost->updatePost($postTitle, $postContent, $post_id);

            //GOING TO ADMIN PAGE
            $post = $this->model('post');
            $result = $post->loadPostForAuthor($_SESSION['id']);

            $loginUser = $this->model('auth');
            $userLogin = $loginUser->signIn($_SESSION['user']);

            $this->views('admin', ['user' => $userLogin, 'authorpost' => $result]);
        } else {

            // Program to display current page URL.
            if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                $link = "https";
            else
                $link = "http";

            // Here append the common URL characters.
            $link .= "://";

            // Append the host(domain name, ip) to the URL.
            $link .= $_SERVER['HTTP_HOST'];

            // Append the requested resource location to the URL
            $link .= $_SERVER['REQUEST_URI'];

            // Print the link
            $url = explode('/', filter_var(rtrim($link, '/'), FILTER_SANITIZE_URL));
            $post_id = $url[7];

            $existingPost = $this->model('post');
            $result = $existingPost->displayPostForUpdate($post_id);

            $this->views('edit', ['data' => $result, 'id' => $post_id]);
        }
    }

    public function deletepost()
    {

        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
            $link = "https";
        else
            $link = "http";

        // Here append the common URL characters.
        $link .= "://";

        // Append the host(domain name, ip) to the URL.
        $link .= $_SERVER['HTTP_HOST'];

        // Append the requested resource location to the URL
        $link .= $_SERVER['REQUEST_URI'];


        // Print the link
        $url = explode('/', filter_var(rtrim($link, '/'), FILTER_SANITIZE_URL));
        $post_id = $url[7];

        $existingPost = $this->model('post');
        $result = $existingPost->deletepost($post_id);

        $post = $this->model('post');
        $result = $post->loadPostForAuthor($_SESSION['id']);

        $loginUser = $this->model('auth');
        $userLogin = $loginUser->signIn($_SESSION['user']);

        $this->views('admin', ['user' => $userLogin, 'authorpost' => $result]);
    }
}
