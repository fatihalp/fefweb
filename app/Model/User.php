<?php
//App::uses('AuthComponent', 'Controller/Component');
// app/Model/User.php
class User extends AppModel {

  public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
    }
    
/*
'image' => array(
        'rule'    => array('extension', array('gif', 'jpeg', 'png', 'jpg')),
        'message' => 'Please supply a valid image.'
        )
   

     public $validate = array(
        
        'title_en' => array( 
            'required' => true,
            'message' => 'title_en required'
        ),
        'title_tr' => array( 
            'required' => true,
            'message' => 'title_tr required'
        ),
        'email' => array(
            'rule'    => array('email', true),
            'required' => true,
            'message' => 'Please supply a valid email address.'
        ),

    
    );
    */
}