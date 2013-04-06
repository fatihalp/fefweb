<p>&plus;&nbsp;<?php echo $this->Html->link('Add A New Content', array('controller' => 'news', 'action' => 'add'));?></p>
<table>
    <tr>
        <th>Content Title (EN / TR)</th>
        <th>Expire Date</th>
        <th>Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Delete</th>
    </tr>
<?php foreach ($posts as $News): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($News['News']['title_tr'].' / '.$News['News']['title_en'],
            array('controller' => 'news', 'action' => 'guestview', $News['News']['id'])); ?>
        </td>
        <td><?php echo $News['News']['expiredate']; ?>&nbsp;&nbsp;&nbsp;</td>
        <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $News['News']['id'])); ?></td>
        <td>
            <?php echo $this->Form->postLink('Delete',
                                        array('action' => 'delete', $News['News']['id']),
                                        array('confirm' => 'Do you really want to delete?')
                                    );
            ?>
        </td>
    </tr>
<?php endforeach; unset($News);?>
</table>