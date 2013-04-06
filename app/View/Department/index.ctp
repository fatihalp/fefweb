
<p>&plus;&nbsp;<?php echo $this->Html->link('Add A Department', array('controller' => 'Department', 'action' => 'add')); ?></p>
<table>
    <tr>
        <th>Department Title (EN / TR)</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
<?php foreach ($r as $post): ?>
    <tr>
        <td>
        <?php 
            echo $this->Html->link($post['Department']['name_en'].' / '.$post['Department']['name_tr'],
                                    array(
                                    'controller' => 'department', 
                                    'action' => 'edit',
                                    $post['Department']['id'])
                                );
		?>
        </td>
        <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Department']['id'])); ?></td>
        <td> 
        	<?php 
        	echo $this->Form->postLink('Delete',
                                array('action' => 'sil', $post['Department']['id']),
                                array('confirm' => 'Do you really want to delete ?')
                            );
            ?>
        </td>
    </tr>
    <?php endforeach; unset($post);?>
</table>