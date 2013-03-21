<h1>Courses</h1>
<p><?php echo $this->Html->link('Add Course', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Code</th>
        <th>Name</th>
        <th>DepartmentID</th>
        <th>Actions</th>


    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php 
    //print_r($courses);
    foreach ($courses as $course): ?>
    <tr>
        <td><?php echo $course['Course']['code']; ?></td>
        <td>
            <?php echo $this->Html->link($course['Course']['name'], array('action' => 'view', $course['Course']['id'])); ?> 
        </td>
        <td><?php echo $course['Department']['name']; ?></td>
        <td>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $course['Course']['id'])); ?> - 
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $course['Course']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>