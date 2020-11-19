<?php
namespace Application\LessonSystem\Core\v1;

class FixedPriceLesson extends Lesson {
    
    function cost()
    {
        return "FixedPriceLesson cost is 199";
    }
    
    function chargeType()
    {
        return "FixedPriceLesson charge type is online";
    }
}