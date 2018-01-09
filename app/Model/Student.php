<?php

class Student extends AppModel {
    public $hasMany = array(
        'Mark' => array(
            'className' => 'Mark',
            'foreignKey' => 'studentId',
            'dependent' => true,
        )
    );

    public $validate = array(
        'lastname' => array(
            'rule' => 'notBlank'
        ),
        'firstname' => array(
            'rule' => 'notBlank'
        ),
        'dateOfBirth' => array(
            'rule' => 'notBlank'
        )
    );
}