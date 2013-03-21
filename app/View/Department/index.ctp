
<p><?php echo $this->Html->link('Add Department', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Language</th>
        <th>Edit</th>
        <th>Delete</th>
 </tr>
    <?php foreach ($r as $post): ?>
 
    <tr>
        <td><?php echo $post['Department']['id']; ?></td>
        <td>
         <?php 
         echo $this->Html->link($post['Department']['name'],
			array(
			'controller' => 'department', 
			'action' => 'edit',
			 $post['Department']['id']));
		 ?>
        </td>

<td>   
            <img src="<?php echo $this->webroot; ?>/img/<?php echo $post['Department']['langid']; ?>.png" /></td>

        <td> 
        	  <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Department']['id'])); ?>
</td>
<td> 
        	 <?php 
        	 echo $this->Form->postLink(
                'Delete',
                array('action' => 'sil', $post['Department']['id']),
                array('confirm' => 'Do you really want to delete ?'));
            ?>
</td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>