<!-- File: /app/View/Posts/edit.ctp -->

<h1>Edit Post</h1>
<?php
echo $this->Form->create('Department');
echo $this->Form->input('name');
echo $this->Form->input('summary', array('rows' => '3'));
echo $this->Form->input('infrastructure');
echo $this->Form->input('email');
echo $this->Form->input('code');
echo $this->Form->input('picture');
echo $this->Form->input('contactinfo');

    echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
 
 
 
 
 