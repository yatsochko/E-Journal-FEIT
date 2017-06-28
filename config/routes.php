<?php

return array(
    'login' => 'login/index',
    'logout' => 'logout/index',
    'feedback' => 'feedback/index',
    'admin/ajax/deletestudent' => 'admin/ajaxDeleteStudent',
    'admin/ajax/getgroups/([0-9]+)' => 'admin/ajaxGetGroupsByIdCourse/$1',
//    'admin/ajax/addlector' => 'admin/ajaxAddLector',
    'admin/ajax/deletelector' => 'admin/ajaxDeleteLector',
//    'admin/ajax/addsubject' => 'admin/ajaxAddSubject',
    'admin/ajax/deletesubject' => 'admin/ajaxDeleteSubject',
    'admin$' => 'admin/index',
    'lector/marks/([0-9]+)/([0-9]+)' => 'lector/marks/$1/$2',
    'lector/ajax/editmarks' => 'lector/ajaxEditMarks',
    'lector/ajax/numlabrgr' => 'lector/ajaxEditNumberLabsAndRgrs',
    'lector' => 'lector/index',
    // Курс:
    'course/([0-9]+)/group/([0-9]+)/subject/([0-9]+)' => 'subject/index/$1/$2/$3', //actionIndex в CourseController
    'course/([0-9]+)/group/([0-9]+)' => 'group/index/$1/$2', //actionIndex в CourseController
    'course/([0-9]+)' => 'course/index/$1', //actionIndex в CourseController
    // Главная страница
    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
);
