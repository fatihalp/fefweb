<h1>Edit Content Info</h1>
<?php
echo $this->Html->link('Back', array('action' => 'index'));

echo $this->Form->create('News');

 echo $this->Form->input('type', array('options' => array(
'news'=>'News',
'static'=>'Static'
), 'empty' => 'Choose A Content Type'));


echo $this->Form->input('title_en', array('label' => 'Title (English)'));


echo $this->Form->input('title_tr', array('label' => 'Başlık (Türkçe) '));


echo $this->Form->input('expiredate', array('label' => 'Expire Date'));

echo $this->Form->input('body_en', 
						array('label' => 'Body(English) '),
						array('rows' => '3')
						);

echo $this->Form->input('body_tr', 
						array('label' => 'Açıklama (Türkçe) '),
						array('rows' => '3')
						);



 echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save');
?>
 