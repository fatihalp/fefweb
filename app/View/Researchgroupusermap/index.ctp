<?php echo $this->Html->link(
    'Add Post',
    array('controller' => 'Researchgroupusermap', 'action' => 'add')
); ?>

<table>
    <tr>
        <th>Id</th>
        <th>User</th>
      
        <th>Research Group</th>
        <th> Edit Delete</th>

    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php 

    foreach ($Researchgroupusermap as $a): ?>
    <tr>
        <td><?php echo $a['Researchgroupusermap']['id']; ?></td>

        <td>
          
            <?php 

            echo $this->Html->link($a['Researchgroupusermap']['userid'],
array(
    'controller' => 'Researchgroupusermap',
    'action' => 'view', 
     $a['Researchgroupusermap']['id'])
); 
 ?>


        </td>
<td> <?php echo $a['Researchgroupusermap']['Researchgroupid']; ?> </td>

        <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $a['Researchgroupusermap']['id'])); ?></td>
    <td><?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $a['Researchgroupusermap']['id']),
                array('confirm' => 'Are you sure?'));
            ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>
