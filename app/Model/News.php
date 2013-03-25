<?php

class News extends AppModel {
	

	public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        ),
        'langid' => array(
            'rule' => 'notEmpty'
        ),
        'type' => array(
            'rule' => 'notEmpty'
        )
    );
}
?>