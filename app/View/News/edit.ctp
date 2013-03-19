<h1>Add Post</h1>
<?php
echo $this->Form->create('News');
echo $this->Form->input('title');
echo $this->Form->input('expiredate');
echo $this->Form->input('body', array('rows' => '3'));
 echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>
 