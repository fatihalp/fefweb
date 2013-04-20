<?php 
  if(Configure::read('Config.language') == 'en'){
    $title = 'COMPLETE LIST OF PROGRAMS';
  } 
  if(Configure::read('Config.language') == 'tr'){
    $title = 'TÜM PROGRAMLARIN LİSTESİ';
  }
?>
<div id="widecontent">
	<div id="widecontent2">
		<i><?php echo $title?></i>
		<hr />
	<?php
		foreach ($rs as $a){
	    	echo  '<h3 id="'.$a['Program']['department_id'].'">'.$this->Lang->get('Department', $a['Program']['department_id'], 'name').'</h3>';
			$this->Program->createList($a['Program']['department_id']);
		}
	?>
	</div>
</div>