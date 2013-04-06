<?php
class Department extends AppModel {
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
         'email' => array(
            'rule' => 'email'
        ),
          'officeno' => array(
            'rule' => 'notEmpty'
        ),
           'telephone' => array(
            'rule' => 'notEmpty'
        ),
          'fax' => array(
            'rule' => 'notEmpty'
        ),
           'infrastructure_en' => array(
            'rule' => 'notEmpty'
        ),
           'infrastructure_tr' => array(
            'rule' => 'notEmpty'
        )
    );
}
?>