<h1>Add Researchgroupusermap</h1>
<?php
echo $this->Form->create('Researchgroupusermap');
echo $this->Form->input('user_id', array('type' => 'select',
		'options' => $user,
		'empty' => 'Choose One',
		'label' => 'User'));
echo $this->Form->input('researchgroup_id', array('type' => 'select',
		'options' => $resGroup,
		'empty' => 'Choose One',
		'label' => 'Research Group'));
echo $this->Form->end('Save');
?>