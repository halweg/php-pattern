<?php
namespace Application\LessonSystem\Core\v1;

abstract class Lesson {
    
    abstract function cost();
    
    abstract function chargeType();
    
}