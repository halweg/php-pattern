<?php


namespace Civilization\Decorator\Request;


class AuthProcessDecorator extends ProcessDecorator
{
    public function process(RequestHelper $requestHelper)
    {
        echo __CLASS__."Do Auth Things \n";
        $this->process->process($requestHelper);
    }
}