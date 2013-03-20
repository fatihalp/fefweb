<h1>Add Post</h1>
<?php
echo $this->Form->create('Department');
echo $this->Form->input('name');
echo $this->Form->input('summary', array('rows' => '3'));
echo $this->Form->input('secretary');
echo $this->Form->input('officeno');
echo $this->Form->input('infrastructure');
echo $this->Form->input('email');
echo $this->Form->input('url');
echo $this->Form->input('code');

echo $this->Form->input('telephone');
echo $this->Form->input('fax');



 echo $this->Form->input('langid', array(
                                      'type' => 'select',
                                      'label' => 'Language',
                                      'options' => $lang,
                                      'selected' => $post['Department']['langid'] // suppose default select Kannada
                                  )
                  );
echo $this->Form->end('Save Post');



?>