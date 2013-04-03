<div id="widecontent">
	<div id="widecontent2">
		<i>COMPLETE LIST OF PROGRAMS</i>
		<hr />
	<?php
		foreach ($rs as $a){
	    	echo  '<h3>'.$this->Lang->get('Department', $a['Program']['department_id'], 'name').'</h3>';
			$this->Program->createList($a['Program']['department_id']);
		}
	?>
	</div>
</div>