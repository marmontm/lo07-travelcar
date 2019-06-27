<?php

require_once '../model/modelUser.php';
require_once '../model/modelSite.php';

class Controller
{
    public static function auth()
    {
        $username = trim($_POST['username']);
        $pass = trim($_POST['password']);
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

    public static function isAuthentified()
    {
        session_start();
        $isSignedinOK = isset($_SESSION['signedin']) && $_SESSION['signedin'] === true;
        $isUsernameOK = isset($_SESSION['username']) && !is_null($_SESSION['username']);
        $isRoleOK = isset($_SESSION['role']) && !is_null($_SESSION['role']);
        $verified = false;
        if ($isSignedinOK && $isUsernameOK && $isRoleOK) {
            $verified = true;
        }
        return $verified;
    }

    public static function getCurrentUserRole ()
    {
        session_start();
        $role = 'guest';
        if (isset($_SESSION['role'])) {
            $role = $_SESSION['role'];
        }
        return $role;
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
        if (!self::isAuthentified()) {
            require ('../view/viewSignin.php');
        }
        else {
            self::home();
        }
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
    }

    public static function signup()
    {
        require ('../view/viewSignup.php');
    }

    public static function signupAction()
    {
        if ($_POST['password'] == $_POST['confirm_password']) {
            $secret = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $res = modelUser::insert($_POST['username'], 'customer', $secret, $_POST['email'], $_POST['surname'], $_POST['firstname'], $_POST['birthdate'], $_POST['country'], $_POST['numDrivingLicence']);
            if ($res) {
                $successSignedup = true;
            }
            else {
                $failure = true;
            }
        }
        else {
            $failure = true;
        }
        require ('../view/viewSignin.php');
    }

    public static function myProfile()
    {
        session_start();
        $login = $_SESSION['username'];
        $res = modelUser::read($login);
        require ('../view/viewUserInfo.php');
    }

    public static function updateUserInfo()
    {
        if ($_POST['password'] == $_POST['confirm_password']) {
            $secret = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $res = modelUser::update($_POST['username'], $secret, $_POST['email'], $_POST['surname'], $_POST['firstname'], $_POST['birthdate'], $_POST['country'], $_POST['numDrivingLicence']);
            if ($res) {
                $success = true;
            }
            else {
                $failure = true;
            }
        }
        else {
            $failure = true;
        }
        session_start();
        $login = $_SESSION['username'];
        $res = modelUser::read($login);
        require ('../view/viewUserInfo.php');
    }

    public static function adminSites()
    {
        $results = modelSite::readAll();
        require ('../view/viewAdminSites.php');
    }

    public static function addSite()
    {
        $res = modelSite::insert($_POST['label'], $_POST['location'], $_POST['area'], $_POST['type']);
        if ($res) {
            $success = true;
        }
        else {
            $failure = true;
        }
        $results = modelSite::readAll();
        require ('../view/viewAdminSites.php');
    }

    public static function delSite()
    {
        $res = modelSite::delete($_POST['id']);
        if ($res) {
            $success = true;
        }
        else {
            $failure = true;
        }
        $results = modelSite::readAll();
        require ('../view/viewAdminSites.php');
    }
}