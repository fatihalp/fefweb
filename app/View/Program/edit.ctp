<h1>Edit Program Info</h1>
<?php
	echo $this->Html->link('Back', array('action' => 'index'));
	$dummy_id = null; //selectbox' ta seçili kısmı göstermek için gerekli
	echo $this->Form->create('Program');
	echo $this->Form->input('departmentid', array(
							'type' => 'select',
							'label' => 'Department',
							'options' => $b,
							'selected' => $dummy_id
	));
	echo $this->Form->input('type', array(
                            'type' => 'select',
                            'options' => array('U' => 'Undergraduate', 'M' => 'Master', 'D' => 'Doctor of Philosophy'),
							'selected' => $dummy_id
    ));
    echo $this->Form->input('thesis', array(
                            'type' => 'select',
                            'options' => array('0' => 'No', '1' => 'Yes'),
							'selected' => $dummy_id
    ));
	echo $this->Form->input('instlang_en', array(
							'type' => 'select',
							'label' => 'Inst. Language (EN)',
							'options' => array('English', 'Turkish'),
							'selected' => $dummy_id
	));
	echo $this->Form->input('instlang_tr', array(
							'type' => 'select',
							'label' => 'Inst. Language (EN)',
							'options' => array('İngilizce', 'Türkçe'),
							'selected' => $dummy_id
	));
	echo $this->Form->input('duration', array('type' => 'text' ));
	echo $this->Form->input('name_en');
	echo $this->Form->input('name_tr');
	echo $this->Form->input('summary_en', array('rows' => '3'));
	echo $this->Form->input('summary_tr', array('rows' => '3'));
	echo $this->Form->input('description_en', array('rows' => '3'));
	echo $this->Form->input('description_tr', array('rows' => '3'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Save');
?>