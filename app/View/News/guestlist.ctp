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

 <h2>    <?php echo $this->Lang->get('News',$j['News']['id'],'title'); ?> </h2>
 <p>    <?php echo $this->Lang->get('News',$j['News']['id'],'body'); ?> </p>
<?php 
		echo '<br/>';
	  endforeach;  
    unset($post); 