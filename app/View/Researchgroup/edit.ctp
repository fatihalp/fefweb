<h1>Edit Research Group Info</h1>
<?php
    echo $this->Html->link('Back', array('action' => 'index'));
    $dummy_id = null; //selectbox' ta seçili kısmı göstermek için gerekli
    echo $this->Form->create('Researchgroup');
    echo $this->Form->input('name');
    echo $this->Form->input('description', array('rows' => '3'));

    echo $this->Form->input('langid', array(
                                      'type' => 'select',
                                      'options' => $lang,
                                        'label' => 'Language', 
                                      'selected' => $dummy_id
                                  )
                  );


    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save');
    ?>