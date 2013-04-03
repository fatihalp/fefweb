<div id = "widecontent">
	<div id = "widecontent2">
	<?php
		echo '<i>'.strtoupper($b['Program']['name_'.Configure::read('Config.language')]).'<br />';
		echo $b['Program']['type'].' IN '.strtoupper($b['Program']['instlang_'.Configure::read('Config.language')]).'</i><hr/>';

	?>
	<div id = "tabular_info">
		<div class = "back_button"><a href="<?php echo $this->webroot.'Program/guestview/'.$b['Program']['id']; ?>">Back to Program</a></div>
	<?php echo $c;
		$c = 1; $i = 1;
		foreach ($a as $b) {if($c == 1){$prev = $b['Course']['ac_term'];$next = $prev + 1;}
		if($next == $b['Course']['ac_term'] || $c == 1){
	?>
		<div class = "curriculum_table_title">SEMESTER <?php echo $b['Course']['ac_term'];?></div>
		<table class = "tabular_info" cellpadding = "0" cellspacing = "0">
			<tbody>
				<tr class = "first_row">
					<td style = "width: 70px;">Code</td>
					<td>Course Name</td>
					<td style = "width: 60px;">Credits</td>
					<td style = "width: 100px;">ECTS Credits</td>
				</tr>
			<?php } ?>
				<tr class ="<?php if($i%2 == 0)echo 'even_row'?>">
					<td><?php echo $b['Course']['code'];?></td>
					<td><a href="#"><?php echo $b['Course']['name_'.Configure::read('Config.language')];?></a></td>
					<td><?php echo $b['Course']['credit'];?></td>
					<td><?php echo $b['Course']['ectscredit'];?></td>
				</tr>
			<?php if($next == $b['Course']['ac_term'] || $c == 1){?>
			</tbody>
		</table>
	<?php $i = $i + 1;}if($next == $b['Course']['ac_term'])$c = 1;else $c=2;}?>
	</div>
	</div>
</div>
