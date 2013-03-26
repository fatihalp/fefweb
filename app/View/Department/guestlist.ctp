<?php
    foreach ($rs as $b):	

    	echo $this->Html->link('Detayları gör', 
    		array(
			'controller' => 'Department', 
			'action' => 'guestview',
			 $b['Department']['id'])
    	);

      echo $this->Lang->get('Department',$b['Department']['id'],'name');   
echo $b["Department"]["email"];
echo $b["Department"]["telephone"];
		echo '<br/>';
	  endforeach;  
    unset($post); 