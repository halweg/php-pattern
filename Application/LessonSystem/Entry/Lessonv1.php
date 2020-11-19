<?php
require __DIR__."/../../Boot/Boot.php";

use Application\LessonSystem\Core\v1\TimedLesson;
use Application\LessonSystem\Core\v1\TerryMaoLesson;

$fl = new TerryMaoLesson();

$msg = $fl->cost();

echo $msg;

