<p>&plus;&nbsp;<?php echo $this->Html->link('Add A New Program', array('controller' => 'Program', 'action' => 'add'));?></p>
<h1>Programs</h1>
<table>
    <tr>
        <th>Program Name (EN / TR)</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
<?php foreach ($rs as $a): ?>
    <tr>
        <td>
        <?php 
            echo $this->Html->link($a['Program']['name_en'].' / '.$a['Program']['name_tr'],
            array(
                'controller' => 'Program',
                'action' => 'edit',
                 $a['Program']['id'])
            );
        ?>
        </td>
        <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $a['Program']['id'])); ?></td>
        <td><?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $a['Program']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
        </td>
    </tr>
<?php endforeach; unset($post);?>
</table>