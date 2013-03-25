<?php
    foreach ($rs as $b):	

    	echo $this->Html->link('Detayları gör', 
    		array(
			'controller' => 'Department', 
			'action' => 'guestview',
			 $b['Department']['id'])
    	);

		echo  $b["Department"]["name"];
		echo $b["Department"]["email"];
		echo $b["Department"]["telephone"];
		echo '<br/>';
	  endforeach;  
    unset($post); 