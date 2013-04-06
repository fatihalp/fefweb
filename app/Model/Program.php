<?php 
class Program extends AppModel { 
    public $belongsTo = 'Department';

    public $validate = array(
        'name_en' => array(
            'rule' => 'notEmpty'
        ),
        'name_tr' => array(
            'rule' => 'notEmpty'
        ),
        'summary_en' => array(
            'rule' => 'notEmpty'
        ),
        'summary_tr' => array(
            'rule' => 'notEmpty'
        ),
        'description_en' => array(
            'rule' => 'notEmpty'
        ),
        'description_tr' => array(
            'rule' => 'notEmpty'
        ),
        'thesis' => array(
            'rule' => 'notEmpty'
        ),
        'type' => array(
            'rule' => 'notEmpty'
        ),
        'instlang_en' => array(
            'rule' => 'notEmpty'
        ),
        'instlang_tr' => array(
            'rule' => 'notEmpty'
        ),
        'departmentid' => array(
            'rule' => 'notEmpty'
        )
    );
}