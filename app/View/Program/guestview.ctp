<div id="widecontent">
	<div id="widecontent2">

<?php 
echo '<h1>'.$a['Program']['name_'.Configure::read('Config.language')].'</h1>';
echo '<br/>';
echo $a['Program']['refno'];echo '<br/>';
echo $a['Program']['thesis_'.Configure::read('Config.language')];echo '<br/>';

echo $a['Program']['duration'];echo '<br/>';
echo $a['Program']['summary_'.Configure::read('Config.language')];echo '<br/>';
echo $a['Program']['description_'.Configure::read('Config.language')];echo '<br/>';
echo $a['Program']['instlang_'.Configure::read('Config.language')]; echo '<br/>';

?>
</div></div>

