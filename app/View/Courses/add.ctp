<h1>Add A New Course</h1>
<?php 
	echo $this->Html->link('Back', array('action' => 'index'));

	echo $this->Form->create('Course');
	echo $this->Form->input('code');
	echo $this->Form->input('name');
	echo $this->Form->input('credit');
	echo $this->Form->input('catalogue');
	echo $this->Form->input('prerequisities');
	echo $this->Form->input('ectscredit');
	echo $this->Form->input('departmentid');
	echo $this->Form->input('description', array('rows' => '5'));
	echo $this->Form->input('summary', array('rows' => '3'));
	echo $this->Form->end('Save Post');
?>