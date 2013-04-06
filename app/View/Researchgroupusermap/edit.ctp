<h1>Edit Research Group User</h1>
<?php
	echo $this->Html->link('Back', array('action' => 'index'));
	$dummy_id = null; //selectbox' ta seçili kısmı göstermek için gerekli
    echo $this->Form->create('Researchgroupusermap');
    echo $this->Form->input('user_id', array('type' => 'select',
							'options' => $user,
							'selected' => $dummy_id,
							'label' => 'User')
    					);
	echo $this->Form->input('researchgroup_id', array('type' => 'select',
							'options' => $resGroup,
							'selected' => $dummy_id,
							'label' => 'Research Group')
						);
    echo $this->Form->end('Save');
?>