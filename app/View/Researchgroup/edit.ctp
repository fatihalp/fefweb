<h1>Edit Post</h1>
<?php
    echo $this->Form->create('Researchgroup');
    echo $this->Form->input('name');
    echo $this->Form->input('description', array('rows' => '3'));

    echo $this->Form->input('langid', array(
                                      'type' => 'select',
                                      'options' => $lang,
                                        'label' => 'Language', 
                                      'selected' => $post['Researchgroup']['langid'] // suppose default select Kannada
                                  )
                  );


    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Post');
    ?>