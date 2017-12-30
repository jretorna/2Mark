<?php
class Student extends AppModel {

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