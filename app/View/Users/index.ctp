<?php echo $this->Html->link(
    'Add',
    array('controller' => 'Users', 'action' => 'add')
); ?>

<table>
    <tr>
        <th>Id</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>

    </tr> 
    <?php 

    foreach ($rs as $a): ?>
    <tr>
        <td><?php echo $a['users']['id']; ?></td>

        <td>
          
            <?php 

            echo $this->Html->link($a['users']['name'],
array(
    'controller' => 'users',
    'action' => 'edit', 
     $a['Users']['id'])
); 
 ?>


        </td>
        <td>   
            <img src="<?php echo $this->webroot; ?>/img/<?php echo $a['Users']['langid']; ?>.png" /></td>

        <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $a['Users']['id'])); ?></td>
    <td><?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $a['Users']['id']),
                array('confirm' => 'Are you sure?'));
            ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>


