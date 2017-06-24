<?php
/**
 * ���������� CourseController
 */

include_once ROOT . '/models/Group.php';

class CourseController
{

    /**
     * Action ��� ������� ��������
     */
    public function actionIndex($course_id)
    {
        $GroupsList = Group::getGroupsListByIdCourse($course_id);

        // ���������� ���
        require_once(ROOT . '/views/course/index.php');
        return true;
    }

}