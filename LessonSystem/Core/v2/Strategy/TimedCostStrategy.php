<?php


namespace LessonSystem\Core\v2\Strategy;


use LessonSystem\Core\v2\Lesson\Lesson;

class TimedCostStrategy extends CostStrategy
{
    
    public function cost(Lesson $lesson)
    {
       return "use TimedStrategy cost".$lesson->getDuration() * 5;
    }
    
    public function chargeType()
    {
        return "Timed rate";
    }
}