<?php

class Group
{
    /*
     * Returns single news item with specified id
     * @param integer $id
     */
    public static function getGroupsListByIdCourse($course_id)
    {
        $id = intval($course_id);

        $db = Db::getConnection();

        $result = $db->query('SELECT *'
            . ' FROM groups'
            . ' WHERE id_course=' . $course_id);

        $result->setFetchMode(PDO::FETCH_ASSOC); //[id] => 2

        $i = 0;
        while ($row = $result->fetch()) {
            $GroupsList[$i]['id'] = $row['id'];
            $GroupsList[$i]['group_name'] = $row['group_name'];
            $GroupsList[$i]['id_course'] = $row['id_course'];
            $i++;
        }

        return $GroupsList;
    }
}