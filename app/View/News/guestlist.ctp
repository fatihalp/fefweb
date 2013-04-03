<div id="widecontent">
  <div id="widecontent2">
  	<?php
    foreach ($rs as $j):	

    	
		?>

 <h2>    <?php echo $this->Html->link($this->Lang->ret('News',$j['News']['id'],'title'), 
    		array(
			'controller' => 'News', 
			'action' => 'guestview',
			'lang'  => Configure::read('Config.language'),
			 $j['News']['id'])
    	); 
    	?>

</h2>
 <p>    <?php echo $this->Lang->get('News',$j['News']['id'],'body'); ?> </p>
<?php  
	  endforeach;  
    unset($post); 
 ?>
</div>
</div>