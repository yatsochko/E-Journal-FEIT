<?php

return array(
    'login' => 'login/index',
    'logout' => 'logout/index',
    'feedback' => 'feedback/index',
    // Курс:
    'course/([0-9]+)/group/([0-9]+)/subject/([0-9]+)' => 'subject/index/$1/$2/$3', //actionIndex в CourseController
    'course/([0-9]+)/group/([0-9]+)' => 'group/index/$1/$2', //actionIndex в CourseController
    'course/([0-9]+)' => 'course/index/$1', //actionIndex в CourseController
    // Главная страница
    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
);
