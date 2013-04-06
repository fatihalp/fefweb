<p>&plus;&nbsp;<?php echo $this->Html->link(
    'Add A User',
    array('controller' => 'users', 'action' => 'add')
); ?>
</p>
<table>
    <tr>
        <th>Name Surname</th>
        <th>Username</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>

    </tr> 
    <?php   foreach ($r as $a): ?>
    <tr>

        <td>
          
            <?php 

            echo $this->Html->link($a['User']['name'].' '.$a['User']['surname'],
array(
    'controller' => 'users',
    'action' => 'edit', 
     $a['User']['id'])
); 
echo ' ';
 ?>
        </td>
        <td><?php echo $a['User']['username']; ?></td>
        <td><?php echo $a['User']['email']; ?></td>

        <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $a['User']['id'])); ?></td>
    <td><?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $a['User']['id']),
                array('confirm' => 'Are you sure?'));
            ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($r); ?>
</table>


