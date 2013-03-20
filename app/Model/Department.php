<?php
class Department extends AppModel {

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
        )


    );


}
?>