<p>&plus;&nbsp;<?php echo $this->Html->link(
    'Add An User To A Research Group',
    array('controller' => 'Researchgroupusermap', 'action' => 'add')
); ?>
</p>
<table>
    <tr>
        <th>User</th>
        <th>Research Group</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
<?php foreach ($Researchgroupusermap as $a): ?>
    <tr>
        <td>
    <?php $full_name = $a['User']['title_en'].' '.$a['User']['name'].' '.$a['User']['surname'];
        echo $this->Html->link($full_name, array(
                                'controller' => 'Users',
                                'action' => 'guestview',
                                 $a['Researchgroupusermap']['id']),
                                array('target' => '_blank')
                            ); 
    ?>
        </td>
        <td> <?php echo $this->Html->link($a['Researchgroup']['name_en'], array(
                                            'controller' => 'Researchgroup',
                                            'action' => 'guestview',
                                            $a['Researchgroup']['id']),
                                            array('target' => '_blank'));
            ?>
        </td>
        <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $a['Researchgroupusermap']['id'])); ?></td>
        <td><?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $a['Researchgroupusermap']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
        </td>
    </tr>
    <?php endforeach; unset($post);?>
</table>
