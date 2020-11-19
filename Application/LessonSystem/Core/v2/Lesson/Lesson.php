<?php
namespace Application\LessonSystem\Core\v2\Lesson;

use Application\LessonSystem\Core\v2\Strategy\CostStrategy;

abstract class Lesson
{
    protected $costStrategy;
    protected $duration;
    
    public function __construct(int $duration, CostStrategy $costStrategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $costStrategy;
    }
    
    public function cost()
    {
        return $this->costStrategy->cost($this);
    }
    
    public function chargeType()
    {
        return $this->costStrategy->chargeType();
    }
    
    public function getDuration()
    {
        return $this->duration;
    }
}
