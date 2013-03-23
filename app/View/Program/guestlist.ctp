  <?php foreach ($rs as $a): ?>
 <?php echo $a['Program']['id']; ?>

 
          
            <?php 
            echo '<br/>';
echo  $a['Department']['name'];

echo '<br/>';
            echo $this->Html->link($a['Program']['name'],
array(
    'controller' => 'Program',
    'action' => 'guestview', 
     $a['Program']['id'])
); 
            echo '<br/>';
 ?>


  
    <?php endforeach; ?>
    <?php unset($post); ?>
 
