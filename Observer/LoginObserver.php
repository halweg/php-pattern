<?php


namespace Observer;


use Observer\Face\Observable;
use Observer\Face\Observer;

abstract class LoginObserver implements Observer
{
    private $login;
    
    public function __construct(Login $login)
    {
        $this->login = $login;
        $login->attach($this);
    }
    
    public function update(Observable $observable)
    {
        if ($observable === $this->login) {
            $this->doUpdate($observable);
        }
    }
    
    abstract function doUpdate(Login $login);
}