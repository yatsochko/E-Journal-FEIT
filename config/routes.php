<?php

return array(
    // Курс:
    'course/([0-9]+)' => 'course/index/$1', //actionIndex в CourseController
    // Главная страница
    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
);
