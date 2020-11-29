<?php
namespace Observer\Face;

interface Observable
{
    function attach(Observer $observer);
    
    function detach(Observer $observer);
    
    function notify();
}