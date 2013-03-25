<h1>Add A Program</h1>
<?php
echo $this->Form->create('Program');
echo $this->Form->input('name');
echo $this->Form->input('summary', array('rows' => '3'));
echo $this->Form->input('description', array('rows' => '3'));

echo $this->Form->input('thesis', array('type' => 'text' ));
echo $this->Form->input('type');
echo $this->Form->input('duration', array('type' => 'text' ));




    echo $this->Form->input('langid', array(
                                      'type' => 'select',
                                      'label' => 'Language',
                                      'options' => $lang,
                                      'empty' => 'Choose One'
                                  )
                  );



    echo $this->Form->input('instlangid', array(
                                      'type' => 'select',
                                      'label' => 'Inst. Language',
                                      'options' => $lang,
                                      'empty' => 'Choose One'
                                  )
                  );


    echo $this->Form->input('departmentid', array(
                                      'type' => 'select',
                                      'label' => 'Department',
                                      'options' => $b,
                                      'empty' => 'Choose One'
                                  )
    );


echo $this->Form->end('Save');
?>