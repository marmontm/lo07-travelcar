<?php

require_once '../model/ModelUser.php';

class Controller
{
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
        require ('../view/viewSigninDone.php');
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