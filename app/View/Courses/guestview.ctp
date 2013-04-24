<?php 
  if(Configure::read('Config.language') == 'en'){
  	$dept = 'DEPARTMENT OF '; $credit = "Credits"; $outcomes = 'Learning Outcomes'; $desc = 'Description';
  	$pre = 'Prerequisite(s)'; $fac_dept = 'Faculty &amp; Department'; $faculty = 'Faculty of Arts And Sciences';
  	$dept2 = 'Department of ';
  } 
  if(Configure::read('Config.language') == 'tr'){
  	$dept = ' BÖLÜMÜ'; $credit = "Kredi"; $outcomes = 'Dersin Hedefleri'; $desc = 'Açıklama';
  	$pre = 'Ön Koşullar'; $fac_dept = 'Fakülte &amp; Bölüm'; $faculty = 'Fen ve Edebiyat Fakültesi';
  	$dept2 = ' Bölümü';
  }
?>
<div id="widecontent">
	<div id="widecontent2">
	<?php foreach($a as $b){ $dept_name = $this->Lang->ret('Department', $b['department_id'], 'name');?>
		<i> <?php if(Configure::read('Config.language') == 'en') echo $dept; echo strtoupper($dept_name); if(Configure::read('Config.language') == 'tr') echo $dept; ?>
			<br />
			<?php echo $b['code'].' '.strtoupper($b['name_'.Configure::read('Config.language')]);?>
		</i>
		<hr />
		<p>
			<strong><?php echo $credit;?>:</strong>
			<?php echo $b['credit'];?>
		</p>
		<p>
			<strong><?php echo $outcomes;?>:</strong>
			<?php echo $b['outcomes_'.Configure::read('Config.language')];?>
		</p>
		<p>
			<strong><?php echo $desc;?>:</strong>
			<?php echo $b['description_'.Configure::read('Config.language')];?>
		</p>
		<p>
			<strong><?php echo $pre;?>:</strong>
			<?php
				if(!empty($b['pre_req1'])){
					$reqs = explode(",", $b['pre_req1']);
					foreach ($reqs as $req) {
						echo $this->Course->pre_req($req); 
					}
				}else 
					echo ' - ';?>
		</p>
		<p>
			<strong><?php echo $fac_dept; ?>:</strong>
			 <?php echo $faculty; ?> - <?php if(Configure::read('Config.language') == 'en') echo $dept2; echo $dept_name; if(Configure::read('Config.language') == 'tr') echo $dept2;?>
		</p>
	<?php }?>
	</div>
</div>