<?php

namespace Application\LessonSystem\Core\v2\RegisterMgr;


use Application\LessonSystem\Core\v2\Lesson\Lesson;
use Application\LessonSystem\Core\v2\Notify\Notifier;

class RegisterMgr
{
    
    public function register(Lesson $lesson)
    {
        //todo register logic
        
        $msg = "New Lesson Cost :{$lesson->cost()}";
        
        $n = Notifier::getNotifier();
        
        $n->inform($msg);
    }
    
}