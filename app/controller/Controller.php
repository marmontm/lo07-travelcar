<?php

require_once '../model/modelUser.php';

class Controller
{
    public static function auth()
    {
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $results = modelUser::read($username);
        $verified = password_verify($pass, $results[0]->getSecret());
        if ($verified) {
            session_start();
            $_SESSION['signedin'] = true;
            $_SESSION['username'] = $results[0]->getLogin();
            $_SESSION['role'] = $results[0]->getRole();
        }
        return $verified;
    }

    public static function signout()
    {
        session_start();
        $_SESSION = array();
        session_destroy();
        self::home();
    }

    public static function home()
    {
        require('../view/viewHome.php');
    }

    public static function signin()
    {
        require ('../view/viewSignin.php');
    }

    public static function signinAction()
    {
        if(self::auth()) {
            self::home();
        }
        else {
            $failure = true;
            require ('../view/viewSignin.php');
        }
//        require ('../view/viewSigninDone.php');
    }

    public static function signup()
    {
        require ('../view/viewSignin.php');
    }

    public static function signupAction()
    {
        require ('../view/viewSignupDone.php');
    }
}