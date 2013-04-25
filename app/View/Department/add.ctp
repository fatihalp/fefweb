<h1>Add A Department</h1>
<?php
	echo $this->Html->link('Back', array('action' => 'index'));
	echo $this->Form->create('Department', array('enctype' => 'multipart/form-data'));
	echo $this->Form->input('name_en');
	echo $this->Form->input('name_tr');
	echo $this->Form->input('summary_en', array('rows' => '3'));
	echo $this->Form->input('summary_tr', array('rows' => '3'));
	echo $this->Form->input('secretary');
	echo $this->Form->input('officeno', array('label' => 'Office No'));
	echo $this->Form->input('infrastructure_en');
	echo $this->Form->input('infrastructure_tr');
	echo $this->Form->input('email');
	echo $this->Form->input('url');
	echo $this->Form->input('code');
	echo $this->Form->input('telephone');
	echo $this->Form->input('fax');
	echo $this->Form->input('Department.resim', array('type' => 'file', 'label' => 'Photo (1000x136 px)'));
	echo $this->Form->end('Save');
?>