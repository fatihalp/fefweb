<?php
    foreach ($rs as $b):	

    	echo $this->Html->link('Detayları gör', 
    		array(
			'controller' => 'Researchgroup', 
			'action' => 'guestview',
			 $b['Researchgroup']['id'])
    	);

		echo  $b["Researchgroup"]["id"];
		echo $b["Researchgroup"]["name"];
		echo $b["Researchgroup"]["langid"];
		echo '<br/>';
	  endforeach;  
    unset($post); 