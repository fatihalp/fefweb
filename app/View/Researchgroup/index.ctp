<?php echo $this->Html->link(
    'Add Post',
    array('controller' => 'Researchgroup', 'action' => 'add')
); ?>
<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
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
<div class="rowElem noborder">
        <label>Researchgroup:</label>
        <div class="formRight noSearch">
          <select name="select2" class="chzn-select">
            <option value="opt1">Choose the Language</option>
            <option value="opt2" selected="selected">Kannada</option>
            <option value="opt3">Telugu</option>
            <option value="opt4">Tamil</option>
          </select>
        </div>
        <div class="fix"></div>
</div>
<?php echo $this->Form->input('languageid', array('class' => 'chzn-select' ));