<div id="widecontent">
	<div id="widecontent2">
	<?php foreach($a as $b){ $dept_name = $this->Lang->ret('Department', $b['department_id'], 'name');?>
		<i> DEPARTMENT: <?php echo strtoupper($dept_name)?>
			<br />
			<?php echo $b['code'].' '.strtoupper($b['name_'.Configure::read('Config.language')]);?>
		</i>
		<hr />
		<p>
			<strong>Credits:</strong>
			<?php echo $b['credit'];?>
		</p>
		<p>
			<strong>Learning Outcomes:</strong>
			<?php echo $b['outcomes_'.Configure::read('Config.language')];?>
		</p>
		<p>
			<strong>Description:</strong>
			<?php echo $b['description_'.Configure::read('Config.language')];?>
		</p>
		<p>
			<strong>Prerequisite(s):</strong>
			<?php echo $this->Course->pre_req($b['pre_req1']);?>
		</p>
		<p>
			<strong>Faculty &amp; Department:</strong>
			Faculty of Arts And Sciences - Department of <?php echo $dept_name;?>
		</p>
	<?php }?>
	</div>
</div>