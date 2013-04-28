<h1>Add A New Content</h1>
<?php
	echo $this->Html->link('Back', array('action' => 'index/'.$type));
	echo $this->Form->create('News');
	echo $this->Form->input('type', array(
									'type' => 'select',
									'options' => array('news'=>'News', 'static'=>'Static'),
									'selected' => $type)
						);
	echo $this->Form->input('title_en', array('label' => 'Title (EN)'));
	echo $this->Form->input('title_tr', array('label' => 'Title (TR)'));
	echo $this->Form->input('expiredate', array('label' => 'Expire Date'));
	echo $this->Form->input('body_en', array(
										'label' => 'Content (EN) ',
										'rows' => '10')
						);
	echo $this->Form->input('body_tr', array(
										'label' => 'Content (TR) ',
										'rows' => '10')
						);
	echo $this->Form->end('Save');
?>