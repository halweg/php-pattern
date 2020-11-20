<?php


namespace PersonnelMgr\v1;


use PersonnelMgr\v1\Encoder\BlogsEncoding;
use PersonnelMgr\v1\Encoder\MegaEncoder;

class CommMgr
{
    const MEGA = 1;
    const BLOGS = 2;

    private $model = 1;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function getApptEncoder()
    {

        if ($this->model == self::MEGA) {
            return new MegaEncoder();
        }

        if ($this->model == self::BLOGS) {
            return new BlogsEncoding();
        }

    }
}