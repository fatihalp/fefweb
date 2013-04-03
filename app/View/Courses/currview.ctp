<div id = "widecontent">
	<div id = "widecontent2">
	<?php
		echo '<i>'.strtoupper($b['Program']['name_'.Configure::read('Config.language')]).'<br />';
		echo $b['Program']['type'].' IN '.strtoupper($b['Program']['instlang_'.Configure::read('Config.language')]).'</i><hr/>';

	?>
	<div id = "tabular_info">
	<?php for($j = 1; $j <= $c; $j = $j + 1){?>
		<div class = "back_button"><a href="<?php echo $this->webroot.'Program/guestview/'.$b['Program']['id']; ?>">Back to Program</a></div>
		<div class = "curriculum_table_title">SEMESTER <?php echo $j;?></div>
		<table class = "tabular_info" cellpadding = "0" cellspacing = "0">
			<tbody>
				<tr class = "first_row">
					<td style = "width: 70px;">Code</td>
					<td>Course Name</td>
					<td style = "width: 60px;">Credits</td>
					<td style = "width: 100px;">ECTS Credits</td>
				</tr>
			<?php $i = 1; foreach ($a as $bb) {
				if( $j == $bb['Course']['ac_term'] ) {
			?>
				<tr class ="<?php if($i%2 == 0)echo 'even_row'?>">
					<td><?php echo $bb['Course']['code'];?></td>
					<td><a href="#"><?php echo $bb['Course']['name_'.Configure::read('Config.language')];?></a></td>
					<td><?php echo $bb['Course']['credit'];?></td>
					<td><?php echo $bb['Course']['ectscredit'];?></td>
				</tr>
			<?php } $i = $i + 1;}?>
			</tbody>
		</table>
	<?php }?>
	</div>
	</div>
</div>
