<h1>Add</h1>
<?php
echo $this->Form->create('Program');
echo $this->Form->input('name');
echo $this->Form->input('summary', array('rows' => '3'));
echo $this->Form->input('description', array('rows' => '3'));

echo $this->Form->input('thesis');
echo $this->Form->input('type');
echo $this->Form->input('duration');




    echo $this->Form->input('langid', array(
                                      'type' => 'select',
                                      'label' => 'Language',
                                      'options' => $lang,
                                      'selected' => $post['Program']['langid']  
                                  )
                  );



    echo $this->Form->input('instlangid', array(
                                      'type' => 'select',
                                      'label' => 'instlangid',
                                      'options' => $lang,
                                      'selected' => $post['Program']['instlangid']  
                                  )
                  );


    echo $this->Form->input('departmentid', array(
                                      'type' => 'select',
                                      'label' => 'departmentid',
                                      'options' => $b,
                                      'selected' => $post['Program']['departmentid']  
                                  )
    );


echo $this->Form->end('Save');
?>