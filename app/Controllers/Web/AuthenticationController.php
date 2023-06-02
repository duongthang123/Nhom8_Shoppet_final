<?php

require_once("app/Model/User.php");
require_once("app/Model/Admin.php");
require_once("app/requests/web/AuthenticationRequest.php");
require_once("app/Model/Product.php");
require_once("app/Model/Category.php");


class AuthenticationController
{

    private $user;
    private $admin;
    private $product;
    private $category;

    public function __construct()
    {
        $this->user = new User();
        $this->admin = new Admin();
        $this->product = new Product();
        $this->category = new Category();
    }


    public function showlogin()
    {
        // $id = $_GET['category_id'];
        $categories = $this->category->all();
        require "views/web/authentication/login.php";
    }

    public function login() {
        if(isset($_POST['btn_login'])) {
            $loginRequest = new AuthenticationRequest();
            $loginErrors = $loginRequest->VilidateLogin($_POST);

            if(count($loginErrors) == 0) {
                $usersResponstory = new User();

                $email = $_POST['email'];
                $password = md5($_POST['password']);
                $user = $usersResponstory->getUserByEmailPassword($email, $password);
                
                if($user) {
                    $_SESSION['user'] = $user;
                    header("location: index.php?controller=homepage&action=index&module=web");
                }else {
                    $loginErrors['error'] = "Bạn đã điền sai email hoặc mật khẩu. Vui lòng nhập lại!";
                    require_once "views/web/authentication/login.php";
                }
                
            } else {
                require_once "views/web/authentication/login.php";
            }
        }
    }

    public function showregister()
    {
        $categories = $this->category->all();
        require "views/web/authentication/resgister.php";
    }

    public function register()
    {
        if(isset($_POST['btn_register'])) {
            $registerRequest = new AuthenticationRequest();
            $registerErrors = $registerRequest->VilidateRegister($_POST);

            if(count($registerErrors) == 0) 
            {
                $findUsers = new User();
                $findUser = $findUsers->findUserByEmail($_POST['email']);
                if($findUser == 1) {
                    $registerErrors['email'] = "Email này đã tồn tại!";
                    require_once "views/web/authentication/resgister.php";
                } else {
                    $user = $this->user->createUser($_POST);
                    require_once "views/web/authentication/login.php";
                }
            } else
            {
                require_once "views/web/authentication/resgister.php";
            }
        }
    }
    

    public function logout()
    {
        // session_start();
        // session_unset();
        // session_destroy();
        unset($_SESSION['user']);
        header("location: index.php?controller=authentication&action=showlogin&module=web");
    }

    // ADMIN
}