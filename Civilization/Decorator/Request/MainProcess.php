<?php


namespace Civilization\Decorator\Request;


class MainProcess extends ProcessRequest
{
    public function process(RequestHelper $requestHelper)
    {
        echo __CLASS__." Do MainProcess things"."\n";
    }
}