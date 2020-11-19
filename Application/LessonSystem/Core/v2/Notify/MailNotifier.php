<?php


namespace Application\LessonSystem\Core\v2\Notify;


class MailNotifier extends Notifier
{
    
    public function inform($msg)
    {
        echo "we has send a mail .\n";
    }
}