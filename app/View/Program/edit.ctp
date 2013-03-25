<h1>Edit Program Info</h1>
<?php
echo $this->Html->link('Back', array('action' => 'index'));
$dummy_id = null; //selectbox' ta seçili kısmı göstermek için gerekli
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
                                      'selected' => $dummy_id  
                                  )
                  );



    echo $this->Form->input('instlangid', array(
                                      'type' => 'select',
                                      'label' => 'Inst. Language',
                                      'options' => $lang,
                                      'selected' => $dummy_id  
                                  )
                  );


    echo $this->Form->input('departmentid', array(
                                      'type' => 'select',
                                      'label' => 'Department',
                                      'options' => $b,
                                      'selected' => $dummy_id  
                                  )
    );

    echo $this->Form->input('id', array('type' => 'hidden'));

echo $this->Form->end('Save');
?>