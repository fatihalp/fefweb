<h1>Add A Program</h1>
<?php
    echo $this->Html->link('Back', array('action' => 'index'));
    echo $this->Form->create('Program');
    echo $this->Form->input('departmentid', array(
                            'type' => 'select',
                            'label' => 'Department',
                            'options' => $b,
                            'empty' => 'Choose One'
    ));
    echo $this->Form->input('type', array(
                            'type' => 'select',
                            'options' => array('U' => 'Undergraduate', 'M' => 'Master', 'D' => 'Doctor of Philosophy'),
                            'empty' => 'Choose One'
    ));
    echo $this->Form->input('thesis', array(
                            'type' => 'select',
                            'options' => array('0' => 'No', '1' => 'Yes'),
                            'empty' => 'Choose One'
    ));
    echo $this->Form->input('instlang_en', array(
                            'type' => 'select',
                            'label' => 'Inst. Language (EN)',
                            'options' => array('English', 'Turkish'),
                            'empty' => 'Choose One'
    ));
    echo $this->Form->input('instlang_tr', array(
                            'type' => 'select',
                            'label' => 'Inst. Language (TR)',
                            'options' => array('İngilizce', 'Türkçe'),
                            'empty' => 'Choose One'
    ));
    echo $this->Form->input('duration', array('type' => 'text' ));
    echo $this->Form->input('name_en');
    echo $this->Form->input('name_tr');
    echo $this->Form->input('summary_en', array('rows' => '3'));
    echo $this->Form->input('summary_tr', array('rows' => '3'));
    echo $this->Form->input('description_en', array('rows' => '3'));
    echo $this->Form->input('description_tr', array('rows' => '3'));
    echo $this->Form->end('Save');
?>