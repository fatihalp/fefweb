<?php

class Course extends AppModel {
  public $validate = array(
      'name_en' => array(
          'rule' => 'notEmpty'
      ),
      'name_tr' => array(
          'rule' => 'notEmpty'
      ),
      'code_en' => array(
          'rule' => 'notEmpty'
      ),
      'code_tr' => array(
          'rule' => 'notEmpty'
      ),
        'credit' => array(
          'rule' => 'notEmpty'
      ),
         'outcomes_en' => array(
          'rule' => 'notEmpty'
      ),
         'outcomes_tr' => array(
          'rule' => 'notEmpty'
      ),
         'description_en' => array(
          'rule' => 'notEmpty'
      ),
         'description_tr' => array(
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