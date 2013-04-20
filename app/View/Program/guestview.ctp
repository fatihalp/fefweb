<?php 
  if(Configure::read('Config.language') == 'en'){
    $thesis = 'Thesis'; $yes = 'Yes'; $no = 'No'; $duration = 'Duration'; $summary = 'Summary'; $desc = 'Description'; $curr = 'Curriculum'; $year = ' Years'; $view = 'View';
    if($a['Program']['type'] == 'U') $type = 'UNDERGRADUATE PROGRAM';
    else
    	if($a['Program']['type'] == 'M') $type = 'MASTER PROGRAM';
    else
    	$type = 'PhD. PROGRAM';
  } 
  if(Configure::read('Config.language') == 'tr'){
    $thesis = 'Tez'; $yes = 'Evet'; $no = 'Hayır'; $duration = 'Süre'; $summary = 'Özet'; $desc = 'Açıklama'; $curr = 'Müfredat'; $year = ' Yıl'; $view = 'Görüntüle';
    if($a['Program']['type'] == 'U') $type = 'LİSANS PROGRAMI';
    else
    	if($a['Program']['type'] == 'M') $type = 'LİSANSÜSTÜ PROGRAMI';
    else
    	$type = 'DOKTORA PROGRAMI';
  }
?>
<div id="widecontent">
	<div id="widecontent2">
	<?php
		echo '<i>'.strtoupper($a['Program']['name_'.Configure::read('Config.language')]).'<br />';
		echo $type.' ('.strtoupper($a['Program']['instlang_'.Configure::read('Config.language')]).')</i><hr/>';

		echo "<p><strong>".$thesis.": </strong>";
		if($a['Program']['thesis'])
			echo $yes;
		else
			echo $no;
		echo "</p>";

		echo "<p><strong>".$duration.": </strong>";
		echo $a['Program']['duration'].$year;
		echo "</p>";

		echo "<p><strong>".$summary.": </strong>";
		echo $a['Program']['summary_'.Configure::read('Config.language')];
		echo "</p>";

		echo "<p><strong>".$desc.": </strong>";
		echo $a['Program']['description_'.Configure::read('Config.language')];
		echo "</p>";

		echo "<p><strong>".$curr.": </strong>";
		echo '<a href="'.$this->webroot.'Courses/currview/'.$a['Program']['id'].'/lang:'.Configure::read('Config.language').'" >'.$view.'</a>';
		echo "</p>";

	?>
	</div>
</div>

