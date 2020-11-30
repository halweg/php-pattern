<?php


namespace Observer;


use Observer\Face\Observable;

class LoginObserver2 extends LoginObserver
{
    
    function doUpdate(Login $login)
    {
        $status = $login->getStatus()[0];
        if ($status == Login::LOGIN_WRONG_PASS) {
            echo "不正确的密码\n";
        }
    }
}