<?php

namespace LessonSystem\Core\v2\RegisterMgr;


use LessonSystem\Core\v2\Lesson\Lesson;
use LessonSystem\Core\v2\Notify\Notifier;

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