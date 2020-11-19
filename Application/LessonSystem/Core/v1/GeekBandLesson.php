<?php
namespace Application\LessonSystem\Core\v1;

class GeekBandLesson extends Lesson {
    
    function cost()
    {
        return "GeekLesson cost is 99";
    }
    
    function chargeType()
    {
        return "GeekLesson charge type is wechat";
    }
}