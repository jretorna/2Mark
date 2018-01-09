<?php

class Mark extends AppModel {
    public $name = 'Mark';
    public $belongsTo = 'Student';
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

    public function isValidMark($mark) {
        return $mark['mark'] >= 0 && $mark['mark'] <=20;
    }
}