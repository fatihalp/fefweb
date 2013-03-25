<h1>Add A New Content</h1>
<?php
echo $this->Form->create('News');
 echo $this->Form->input('type', array('options' => array(
'news'=>'News',
'static'=>'Static'
), 'empty' => 'Choose A Content Type'));


echo $this->Form->input('title');
echo $this->Form->input('expiredate', array('label' => 'Expire Date'));

echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('langid', array(
                                      'type' => 'select',
                                      'label' => 'Language',
                                      'options' => $lang,
                                      'empty' => 'Choose One'
                 ) );
echo $this->Form->end('Save');
?>