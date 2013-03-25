<?php
class Researchgroupusermap extends AppModel {
	public $actsAs = array('Containable');
    public $belongsTo = array('User','Researchgroup');

    public $validate = array(
        'user_id' => array(
            'rule' => 'notEmpty'
        ),
        'researchgroup_id' => array(
            'rule' => 'notEmpty'
        )
    ); 
}