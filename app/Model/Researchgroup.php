<?php
    class Researchgroup extends AppModel {
        public $actsAs = array('Containable');
        public $hasMany = array('Researchgroupusermap');
        
        public $validate = array(
            'name_en' => array(
                'rule' => 'notEmpty'
            ),
            'name_tr' => array(
                'rule' => 'notEmpty'
            ),
            'description_en' => array(
                'rule' => 'notEmpty'
            ),
            'description_tr' => array(
                'rule' => 'notEmpty'
            )
        ); 
    }
?>