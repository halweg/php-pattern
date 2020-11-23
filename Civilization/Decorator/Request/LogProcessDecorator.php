<?php


namespace Civilization\Decorator\Request;


class LogProcessDecorator extends ProcessDecorator
{
    
    public function process(RequestHelper $requestHelper)
    {
        echo __CLASS__." Do Log Acton.\n";
        $this->process->process($requestHelper);
    }
    
}