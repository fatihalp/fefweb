<h1>Edit Research Group Info</h1>
<?php
    echo $this->Html->link('Back', array('action' => 'index'));
    echo $this->Form->create('Researchgroup');
    echo $this->Form->input('name_en');
    echo $this->Form->input('name_tr');
    echo $this->Form->input('description_en', array('rows' => '10'));
    echo $this->Form->input('description_tr', array('rows' => '10'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save');
?>