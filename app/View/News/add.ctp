<h1>Add A New Content</h1>
<?php
echo $this->Form->create('News');


 echo $this->Form->input('type', 
 	array('options' => array(
			'news'=>'News',
			'static'=>'Static'
			), 'empty' => 'Choose A Content Type')
 	);


echo $this->Form->input('title_en', array('label' => 'Title (English)'));


echo $this->Form->input('title_tr', array('label' => 'Başlık (Türkçe) '));


echo $this->Form->input('expiredate', array('label' => 'Expire Date'));

echo $this->Form->input('body_en', 
						array(
							'label' => 'Body(English) ',
							'rows' => '3'
							) 
						);

echo $this->Form->input('body_tr', 
							array(
							'label' => 'Açıklama (Türkçe) ',
							'rows' => '3'
							)  
						);


echo $this->Form->end('Save');
?>