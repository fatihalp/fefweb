<h1>Add Researchgroupusermap</h1>
<?php
echo $this->Form->create('Researchgroupusermap');
echo $this->Form->input('name');
echo $this->Form->input('description', array('rows' => '3'));


    

echo $this->Form->end('Save Researchgroupusermap');
?>