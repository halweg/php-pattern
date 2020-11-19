<?php
namespace LessonSystem\Core\v2\Notify;


abstract class Notifier
{
 
    static public function getNotifier()
    {
        $rand = mt_rand(1,2);
        
        if ($rand == 1) {
            return new TextNotifier();
        }
        if ($rand == 2) {
            return new MailNotifier();
        }
    }
    
    abstract public function inform($msg);
    
}