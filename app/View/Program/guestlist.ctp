<?php foreach ($rs as $a){
    echo '<h2>';
    echo  $this->Lang->get('Department', $a['Program']['department_id'], 'name');
    echo '</h2>';
echo '<br/>';

$this->Program->createList($a['Program']['department_id']);

/*
echo '<br/>';
            echo $this->Html->link($this->Lang->get('Program', $a['Program']['id'], 'name'),
array(
    'controller' => 'Program',
    'action' => 'guestview', 
     $a['Program']['id'])
); 
            echo '<br/>';
 ?>*/


  
     } ?>