<?php

class Course extends AppModel {
	public $actsAs = array('Containable');
    public $belongsTo = array('Department');

    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'code' => array(
            'rule' => 'notEmpty'
        ),
         'name' => array(
            'rule' => 'notEmpty'
        ),
          'credit' => array(
            'rule' => 'notEmpty'
        ),
           'outcomes' => array(
            'rule' => 'notEmpty'
        ),
           'description' => array(
            'rule' => 'notEmpty'
        ),
           'ectscredit' => array(
            'rule' => 'notEmpty'
        )
    );
}

?>