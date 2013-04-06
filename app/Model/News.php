<?php
    class News extends AppModel {
    	public $validate = array(
            'type' => array(
                'rule' => 'notEmpty'
            ),
            'title_en' => array(
                'rule' => 'notEmpty'
            ),
            'title_tr' => array(
                'rule' => 'notEmpty'
            ),
            'body_en' => array(
                'rule' => 'notEmpty'
            ),
            'body_tr' => array(
                'rule' => 'notEmpty'
            )
        );
    }
?>