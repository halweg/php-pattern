<?php


namespace Civilization\Decorator\Request;


abstract class ProcessRequest
{
    abstract function process( RequestHelper $requestHelper );
}