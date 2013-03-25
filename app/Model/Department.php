<?php
class Department extends AppModel {
    /*public $actsAs = array('Containable');
     public $hasMany = array(
        'Program' => array(
            'className' => 'Program',
        )
    ); */
    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'summary' => array(
            'rule' => 'notEmpty'
        ),

         'email' => array(
            'rule' => 'notEmpty'
        ),

          'officeno' => array(
            'rule' => 'notEmpty'
        ),

           'telephone' => array(
            'rule' => 'notEmpty'
        ),

           'langid' => array(
            'rule' => 'notEmpty'
        )
    );


}
?>