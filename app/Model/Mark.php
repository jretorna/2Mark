<?php

//App::uses('AppModel', 'App.Model');
class Mark extends AppModel {
    public $name = 'Mark';

    public $validate = array(
        'subject' => array(
            'rule' => 'notBlank',
            'required'   => true
        ),
        'mark' => array(
            'required' => true,
            'rule' => 'isValidMark',
            'message' => 'La note doit être comprise entre 0 et 20'
        ),
    );

    public function findByStudentId($studentId = null){
        return $this->find('all', array(
            'conditions' => array(
                'Mark.studentId' => $studentId,
            ),
            'order'      => array(
                'Mark.created DESC'
            ),
        ));
        return $marks;
    }

    public function isValidMark($mark) {
        $markInt = (int) $mark;
        pr($markInt);
        return $markInt >= 0 && $markInt <=20;
    }
}