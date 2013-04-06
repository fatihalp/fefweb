<h1>Add An User To A Research Group</h1>
<?php
	echo $this->Html->link('Back', array('action' => 'index'));
	echo $this->Form->create('Researchgroupusermap');
	echo $this->Form->input('user_id', array('type' => 'select',
							'options' => $user,
							'empty' => 'Choose One',
							'label' => 'User')
						);
	echo $this->Form->input('researchgroup_id', array('type' => 'select',
							'options' => $resGroup,
							'empty' => 'Choose One',
							'label' => 'Research Group')
						);
	echo $this->Form->end('Save');
?>