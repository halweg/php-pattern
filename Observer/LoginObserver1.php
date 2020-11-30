<?php


namespace Observer;


use Observer\Face\Observable;

class LoginObserver1 extends LoginObserver
{
    
    function doUpdate(Login $login)
    {
        $status = $login->getStatus()[0];
        if ($status == Login::LOGIN_ACCESS) {
            echo "恭喜你登录成功\n";
        }
    }
}