<?php


namespace Civilization\Decorator\Request;


class AuthProcessDecorator extends ProcessDecorator
{
    public function process(RequestHelper $requestHelper)
    {
        // TODO: Implement process() method.
        echo __CLASS__."Do Auth Things \n";
        $this->process->process($requestHelper);
    }
}