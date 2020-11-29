<?php


namespace Observer\Face;


interface Observer
{
    function update(Observable $observable);
}