<?php 
class Program extends AppModel { 
    public $belongsTo = 'Department';

    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
           'langid' => array(
            'rule' => 'notEmpty'
        ),
           'instlangid' => array(
            'rule' => 'notEmpty'
        ),
           'departmentid' => array(
            'rule' => 'notEmpty'
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );
}