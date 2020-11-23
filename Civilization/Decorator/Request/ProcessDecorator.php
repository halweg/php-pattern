<?php


namespace Civilization\Decorator\Request;


abstract class ProcessDecorator extends ProcessRequest
{
    protected $process;
    
    public function __construct( ProcessRequest $mainProcess )
    {
        $this->process = $mainProcess;
    }
}