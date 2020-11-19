<?php
namespace LessonSystem\Core\v2\Strategy;

use LessonSystem\Core\v2\Lesson\Lesson;

abstract class CostStrategy {
    
    abstract public function cost(Lesson $lesson);
    
    abstract public function chargeType();
    
}