<?php
require __DIR__."/../../Boot/Boot.php";

use Application\LessonSystem\Core\v2\Lesson\Lecture;
use Application\LessonSystem\Core\v2\Lesson\Seminar;
use Application\LessonSystem\Core\v2\Strategy\FixedCostStrategy;
use Application\LessonSystem\Core\v2\Strategy\TimedCostStrategy;

$lecture = new Lecture(4, new FixedCostStrategy());
$se = new Seminar(4, new TimedCostStrategy());

echo $lecture->cost()."\n";

echo $se->cost();