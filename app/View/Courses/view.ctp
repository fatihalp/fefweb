<h1><?php echo $course['Course']['name']; ?></h1>

<dl>
	<dt>Actions:</dt>
	<dd>
		<?php echo $this->Html->link('Back', array('action' => 'index')); ?> - 
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $course['Course']['id'])); ?> - 
		<?php echo $this->Form->postLink(
            'Delete',
            array('action' => 'delete', $course['Course']['id']),
            array('confirm' => 'Are you sure?'));
        ?>
	</dd>
	<dt>Code:</dt> <dd><?php echo $course['Course']['code']; ?></dd>
	<dt>Credit:</dt> <dd><?php echo $course['Course']['credit']; ?></dd>
	<dt>Prerequisites:</dt> <dd><?php echo $course['Course']['prerequisites']; ?></dd>
	<dt>Ectscredit:</dt> <dd><?php echo $course['Course']['ectscredit']; ?></dd>
	<dt>Department:</dt> <dd><?php echo $course['Department']['name']; ?></dd>
	<dt>Description:</dt> <dd><?php echo $course['Course']['description']; ?></dd>
	<dt>Learning Outcomes:</dt> <dd><?php echo $course['Course']['outcomes']; ?> </dd>
</dl>