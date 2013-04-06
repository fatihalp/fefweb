<p>&plus;&nbsp;<?php echo $this->Html->link(
    'Add A Research Group',
    array('controller' => 'Researchgroup', 'action' => 'add'));
    echo "&nbsp;|&nbsp;";
    echo $this->Html->link('User Management', array('controller' => 'Researchgroupusermap', 'action' => 'index'));
?>
</p>
<table>
    <tr>
        <th>Research Group Title (EN / TR)</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
<?php foreach ($researchgroup as $a): ?>
    <tr>
        <td>
    <?php 
            echo $this->Html->link($a['Researchgroup']['name_en'].' / '.$a['Researchgroup']['name_tr'],
                                    array(
                                        'controller' => 'Researchgroup',
                                        'action' => 'guestview', 
                                         $a['Researchgroup']['id'])
                                    ); 
    ?>
        </td>
        <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $a['Researchgroup']['id'])); ?></td>
        <td><?php echo $this->Form->postLink('Delete',
                                        array('action' => 'delete', $a['Researchgroup']['id']),
                                        array('confirm' => 'Are you sure?')
                                    );?>
        </td>
    </tr>
    <?php endforeach; unset($post);?>
</table>