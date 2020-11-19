<?php
require __DIR__ . "/../../Boot/Boot.php";

use LessonSystem\Core\v2\Lesson\Lecture;
use LessonSystem\Core\v2\Lesson\Seminar;
use LessonSystem\Core\v2\Strategy\FixedCostStrategy;
use LessonSystem\Core\v2\Strategy\TimedCostStrategy;

$lecture = new Lecture(4, new FixedCostStrategy());
$se = new Seminar(4, new TimedCostStrategy());

echo $lecture->cost()."\n";

echo $se->cost()."\n";

$r = new LessonSystem\Core\v2\RegisterMgr\RegisterMgr();

$r->register($lecture);