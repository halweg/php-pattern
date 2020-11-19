<?php
namespace LessonSystem\Core\v1;

class TimedLesson extends Lesson
{
    function cost()
    {
        return "TimedLesson cost is 199";
    }
    
    function chargeType()
    {
        return "TimedLesson charge type is online";
    }
}