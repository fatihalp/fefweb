<h1>Add Post</h1>
<?php
echo $this->Form->create('News');
echo $this->Form->input('title');
echo $this->Form->input('expire date');

echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('langid', array(
                                      'type' => 'select',
                                      'label' => 'Language',
                                      'options' => $lang,
                                      'selected' => $post['News']['langid'] // suppose default select Kannada
                                  )
                  );
echo $this->Form->end('Save Post');
?>