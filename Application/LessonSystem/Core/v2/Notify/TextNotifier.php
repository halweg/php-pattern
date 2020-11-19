<?php


namespace Application\LessonSystem\Core\v2\Notify;


class TextNotifier extends Notifier
{
    
    public function inform($msg)
    {
        echo "we has inform a text.\n";
    }
}