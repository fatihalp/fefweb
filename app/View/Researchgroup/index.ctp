<?php echo $this->Html->link(
    'Add Post',
    array('controller' => 'Researchgroup', 'action' => 'add')
); ?>
<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Language</th>
        <th>Edit</th>
        <th>Delete</th>

    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php 

    foreach ($researchgroup as $a): ?>
    <tr>
        <td><?php echo $a['Researchgroup']['id']; ?></td>

        <td>
          
            <?php 

            echo $this->Html->link($a['Researchgroup']['name'],
array(
    'controller' => 'Researchgroup',
    'action' => 'view', 
     $a['Researchgroup']['id'])
); 
 ?>


        </td>
        <td>   
            <img src="<?php echo $this->webroot; ?>/img/<?php echo $a['Researchgroup']['langid']; ?>.png" /></td>

        <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $a['Researchgroup']['id'])); ?></td>
    <td><?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $a['Researchgroup']['id']),
                array('confirm' => 'Are you sure?'));
            ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>
