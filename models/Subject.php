<?php

class Subject
{
    public static function getSubjectsListByIdGroup($group_id)
    {
        $group_id = intval($group_id);

        $db = Db::getConnection();

        $result = $db->query('SELECT s.id AS id_subject, s.subject_name, l.lector_fio, l.id AS id_lector'
            . ' FROM subjects s'
            . ' INNER JOIN relations_gr_subj_lect r ON s.id=r.id_subject'
            . ' INNER JOIN lectors l ON l.id=r.id_lector'
            . ' WHERE r.id_group=' . $group_id);

        $result->setFetchMode(PDO::FETCH_ASSOC); //[id] => 2

        $i = 0;
        while ($row = $result->fetch()) {
            $SubjectsList[$i]['id_subject'] = $row['id_subject'];
            $SubjectsList[$i]['subject_name'] = $row['subject_name'];
            $SubjectsList[$i]['id_lector'] = $row['id_lector']; // Пока не используется
            $SubjectsList[$i]['lector_fio'] = $row['lector_fio'];
            $i++;
        }

        return $SubjectsList;
    }

    public static function getNumberLabsAndRgrs($group_id, $subject_id)
    {
        $group_id = intval($group_id);
        $subject_id = intval($subject_id);

        $db = Db::getConnection();

        $result = $db->query('SELECT num_lab, num_rgr'
            . ' FROM relations_gr_subj_lect'
            . ' WHERE id_group=' . $group_id
            . ' AND id_subject=' . $subject_id);

        $result->setFetchMode(PDO::FETCH_ASSOC); //[id] => 2

        $NumberLabsAndRgrs = $result->fetch();

        return $NumberLabsAndRgrs;
    }
}