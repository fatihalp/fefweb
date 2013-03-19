<?php
class Researchgroup extends AppModel {
 public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'description' => array(
            'rule' => 'notEmpty'
        ),
        'langid' => array(
            'rule' => 'notEmpty'
        )
    ); 

}
?>