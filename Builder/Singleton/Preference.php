<?php


namespace Builder\Singleton;


class Preference
{
    public static $instance;

    private $props = [];

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Preference();
            return self::$instance;
        } else {
            return self::$instance;
        }
    }

    public function setProp($key, $value)
    {
        $this->props[$key] = $value;
    }

    public function getProp($key)
    {
        if(isset($this->props[$key])) {
            return $this->props[$key];
        }else {
            return null;
        }
    }

    private function __construct(){}

    private function __clone(){}

}