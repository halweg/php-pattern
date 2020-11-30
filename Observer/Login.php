<?php


namespace Observer;


use Observer\Face\Observable;
use Observer\Face\Observer;

class Login implements Observable
{
    
    const LOGIN_USER_UNKNOWN = 1;
    const LOGIN_WRONG_PASS   = 2;
    const LOGIN_ACCESS   = 3;
    
    private $status = array();
    
    private $observer;
    
    public function __construct()
    {
        $this->observer = [];
    }
    
    public function handleLogin($user, $pass, $ip)
    {
        switch (rand(1, 2)){
            case 1:
                $this->setStatus(self::LOGIN_ACCESS, $user, $ip);
                $ret = true;
                break;
            case 2:
                $this->setStatus(self::LOGIN_USER_UNKNOWN, $user, $ip);
                $ret = false;
                break;
            case 3:
                $this->setStatus(self::LOGIN_WRONG_PASS, $user, $ip);
                $ret = false;
                break;
        }
        
        $this->notify();
        
        return $ret;
    }
    
    function getStatus()
    {
        return $this->status;
    }
    
    public function setStatus($status, $user, $ip)
    {
        $this->status = array($status, $user, $ip);
    }
    
    function attach(Observer $observer)
    {
        $this->observer[] = $observer;
    }
    
    function detach(Observer $observer)
    {
        $o = [];
        foreach ($this->observer as $item) {
            if ($item != $observer) {
                $o[] = $item;
            }
        }
        $this->observer = $o;
    }
    
    function notify()
    {
        foreach ($this->observer as $ob) {
            $ob->update($this);
        }
    }
}