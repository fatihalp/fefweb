<h1>Edit Course</h1>
<?php
    echo $this->Html->link('Back', array('action' => 'index'));

    echo $this->Form->input('department_id', array('type' => 'select',
			'options' => $dept,
			'label' => 'Department'));
	echo $this->Form->create('Course');
	echo $this->Form->input('code');
	echo $this->Form->input('name');
	echo $this->Form->input('credit', array('type' => 'text'));
	echo $this->Form->input('prerequisites');
	echo $this->Form->input('ectscredit', array('type' => 'text'));
	echo $this->Form->input('description', array('rows' => '5'));
	echo $this->Form->input('outcomes', array('rows' => '3'));
    echo $this->Form->end('Save');
?>