<?php
class Researchgroup extends AppModel {
    public $actsAs = array('Containable');
    public $hasMany = array('Researchgroupusermap');
    
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