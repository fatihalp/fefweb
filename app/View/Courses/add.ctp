<h1>Add A New Course</h1>
<?php 
	echo $this->Html->link('Back', array('action' => 'index'));

	echo $this->Form->create('Course');
	echo $this->Form->input('department_id', array('type' => 'select',
		'options' => $dept,
		'empty' => 'Choose One',
		'label' => 'Department'));
	echo $this->Form->input('program_id', array('type' => 'select',
		'options' => $prog,
		'empty' => 'Choose One',
		'label' => 'Program'));
	echo $this->Form->input('ref_code', array('label' => 'Reference Code'));
	echo $this->Form->input('code', array('label' => 'Course Code'));
	echo $this->Form->input('name');
	echo $this->Form->input('credit', array('type' => 'text'));
	echo $this->Form->input('lab_hour', array('label' => 'Laboratory Hour', 'type' => 'text'));
	echo $this->Form->input('lecture_hour', array('label' => 'Lecture Hour', 'type' => 'text'));
	echo $this->Form->input('ac_term', array('label' => 'Academic Term', 'type' => 'text'));
	echo $this->Form->input('pre_req1', array('label' => 'Prerequisites Codes'));
	echo $this->Form->input('prerequisites');
	echo $this->Form->input('ectscredit', array('type' => 'text'));
	echo $this->Form->input('description', array('rows' => '5'));
	echo $this->Form->input('outcomes', array('rows' => '3'));
	echo $this->Form->end('Save Course');
?>