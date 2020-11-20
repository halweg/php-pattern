<?php

namespace PersonnelMgr\v2\Managers;


abstract class CommsManager
{
    abstract function getApptEncoder();

    abstract function getHeaderText();

    abstract function getFooterText();
}