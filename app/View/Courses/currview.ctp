<?php 
  if(Configure::read('Config.language') == 'en'){
    $curr = "CURRICULUM"; $sem = "SEMESTER"; $back = "Back to Program";
    $code = "Code"; $name = "Course Name"; $credit = 'Credits'; $ects = 'ECTS Credits';
  } 
  if(Configure::read('Config.language') == 'tr'){
    $curr = "MÜFREDAT"; $sem = "DÖNEM"; $back = "Programa Geri Dön";
    $code = "Kod"; $name = "Ders Adı"; $credit = 'Kredi'; $ects = 'ECTS Kredisi';
  }
?>
<div id = "widecontent">
	<div id = "widecontent2">
	<?php
		echo '<i>'.strtoupper($b['Program']['name_'.Configure::read('Config.language')]).'<br />';
		echo $curr.'</i><hr/>';

	?>
	<div id = "tabular_info">
	<?php for($j = 1; $j <= $c; $j = $j + 1){?>
		<div class = "back_button"><a href="<?php echo $this->webroot.'Program/guestview/'.$b['Program']['id'].'/lang:'.Configure::read('Config.language'); ?>"><?php echo $back?></a></div>
		<div class = "curriculum_table_title"><?php echo $sem.' '.$j;?></div>
		<table class = "tabular_info" cellpadding = "0" cellspacing = "0">
			<tbody>
				<tr class = "first_row">
					<td style = "width: 70px;"><?php echo $code?></td>
					<td><?php echo $name?></td>
					<td style = "width: 60px;"><?php echo $credit?></td>
					<td style = "width: 100px;"><?php echo $ects?></td>
				</tr>
			<?php $i = 1; foreach ($a as $bb) {
				if( $j == $bb['Course']['ac_term'] ) {
			?>
				<tr class ="<?php if($i%2 == 0)echo 'even_row'?>">
					<td><?php echo $bb['Course']['code'];?></td>
					<td>
						<?php echo $this->Html->link($bb['Course']['name_'.Configure::read('Config.language')],
							array(
						    'controller' => 'Courses',
						    'action' => 'guestview', 
						     $bb['Course']['id'])
						); ?>
					</td>
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
