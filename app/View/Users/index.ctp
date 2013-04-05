<?php echo $this->Html->link(
    'Add',
    array('controller' => 'users', 'action' => 'add')
); ?>

<table>
    <tr>
        <th>Id</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>

    </tr> 
    <?php   foreach ($r as $a): ?>
    <tr>
        <td><?php echo $a['User']['id']; ?></td>

        <td>
          
            <?php 

            echo $this->Html->link($a['User']['name'],
array(
    'controller' => 'user',
    'action' => 'edit', 
     $a['User']['id'])
); 
echo ' ';
              echo $this->Html->link($a['User']['surname'],
array(
    'controller' => 'user',
    'action' => 'edit', 
     $a['User']['id'])
); 
 ?>


        </td>
        <td>   <?php echo $a['User']['email']; ?>
             </td>

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


