<h1>Add Researchgroup</h1>
<?php
echo $this->Form->create('Researchgroup');
echo $this->Form->input('name');
echo $this->Form->input('description', array('rows' => '3'));

$this->Form->input('language_id', array(
                                      'type' => 'select',
                                      'options' => $d,
                                      'selected' => 2 // suppose default select Kannada
                                  )
                  );



echo $this->Form->end('Save Researchgroup');
?>