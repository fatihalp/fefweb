<!-- File: /app/View/Posts/index.ctp -->
<?php echo $this->Html->link(
    'Add A New Content',
    array('controller' => 'news', 'action' => 'add')
); ?>



<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Language&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Expire</th>
        <th>Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Delete</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out News info -->

    <?php foreach ($posts as $News): ?>
    <tr>
        <td><?php echo $News['News']['id']; ?></td>

        <td>
            <?php echo $this->Html->link($News['News']['title'],
array('controller' => 'news', 'action' => 'guestview', $News['News']['id'])); ?>
        </td>
<td>   
            <img src="<?php echo $this->webroot; ?>/img/<?php echo $News['News']['langid']; ?>.png" /></td>
    
        <td><?php echo $News['News']['expiredate']; ?> &nbsp;&nbsp;&nbsp; </td>
<td>
         <?php echo $this->Html->link('Edit', array('action' => 'edit', $News['News']['id'])); ?>
 </td>
 <td>
<?php echo $this->Form->postLink(
'Delete',
array('action' => 'delete', $News['News']['id']),
array('confirm' => 'Do you really want to delete?'));
?>

     </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($News); ?>
</table>

 