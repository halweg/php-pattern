<?php
namespace Application\LessonSystem\Core\v2\Strategy;

use Application\LessonSystem\Core\v2\Lesson\Lesson;

class FixedCostStrategy extends CostStrategy
{
    
    public function cost(Lesson $lesson)
    {
        return "use FixedStrategy, cost 100";
    }
    
    
    public function chargeType()
    {
        return "fixed rate";
    }
}