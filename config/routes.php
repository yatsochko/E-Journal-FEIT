<?php

return array(
    // Курс:
    'course/([0-9]+)/group/([0-9]+)' => 'group/index/$1/$2', //actionIndex в CourseController
    'course/([0-9]+)' => 'course/index/$1', //actionIndex в CourseController
    // Главная страница
    'main.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
);
