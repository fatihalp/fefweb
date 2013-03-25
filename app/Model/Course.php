<?php

class Course extends AppModel {
	//public $actsAs = array('Containable');
  //public $belongsTo = array('Department');

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
      ),
      'ref_code' => array(
          'rule' => 'notEmpty'
      ),
      'ac_term' => array(
          'rule' => 'notEmpty'
      ),
      'lecture_hour' => array(
          'rule' => 'notEmpty'
      ),
      'lab_hour' => array(
          'rule' => 'notEmpty'
      ),
      'program_id' => array(
          'rule' => 'notEmpty'
      ),
      'department_id' => array(
          'rule' => 'notEmpty'
      )
  );
}

?>