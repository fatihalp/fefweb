<div id="widecontent">
	<div id="widecontent2">
	<?php
		echo '<i>'.strtoupper($a['Program']['name_'.Configure::read('Config.language')]).'<br />';
		echo $a['Program']['type'].' IN '.strtoupper($a['Program']['instlang_'.Configure::read('Config.language')]).'</i><hr/>';

		echo "<p><strong>Thesis: </strong>";
		if($a['Program']['thesis'])
			echo 'Yes';
		else
			echo 'No';
		echo "</p>";

		echo "<p><strong>Duration: </strong>";
		echo $a['Program']['duration']." Years";
		echo "</p>";

		echo "<p><strong>Summary: </strong>";
		echo $a['Program']['summary_'.Configure::read('Config.language')];
		echo "</p>";

		echo "<p><strong>Description: </strong>";
		echo $a['Program']['description_'.Configure::read('Config.language')];
		echo "</p>";

		echo "<p><strong>Curriculum: </strong>";
		echo '<a href="'.$this->webroot.'Courses/currview/'.$a['Program']['id'].'" >View</a>';
		echo "</p>";

	?>
	</div>
</div>

