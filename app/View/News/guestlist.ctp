<?php
    foreach ($rs as $j):	

    	echo $this->Html->link('Detayları gör', 
    		array(
			'controller' => 'News', 
			'action' => 'guestview',
			 $j['News']['id'])
    	);

		echo $j["News"]["id"];
		?>

		<?php // echo $this->Lang->news('1','2'); ?>
<?php
		echo $j["News"]["title"];
		echo $j["News"]["body"];
		echo '<br/>';
	  endforeach;  
    unset($post); 