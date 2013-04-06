<h1>Edit Person Info</h1>
<?php 
    echo $this->Html->link('Back', array('action' => 'index'));
    $dummy_id = null;
    echo $this->Form->create('User', array('enctype' => 'multipart/form-data'));
 
  ?>
    <fieldset>
        <legend> </legend>
    <?php 
    echo $this->Form->input('title_en', array(
            'options' => array(
                'Assistant Professor' => 'Assistant Professor', 
                'Associate Professor' => 'Associate Professor',
                 'Professor' => 'Professor', 
                
            ),
            'selected' => $dummy_id,
            'label' => 'Title (EN)'
        ));

    echo $this->Form->input('title_tr', array(
            'options' => array(
                'Yrd. Doç.' => 'Yrd. Doç.', 
                'Doç.' => 'Doç.',
                 'Prof. ' => 'Prof. ', 
                
            ),
            'selected' => $dummy_id,
            'label' => 'Title (TR)'
    ));

    
    echo $this->Form->input('status_en', array(
            'options' => array(  
                'Part Time' => 'Part Time',   
                'Full Time' => 'Full Time', 
            ),
            'selected' => $dummy_id,
            'label' => 'Status (EN)'
    )); 
        echo $this->Form->input('status_tr', array(
            'options' => array(  
                'Yarı Zamanlı' => 'Yarı Zamanlı',   
                'Tam Zamanlı' => 'Tam Zamanlı', 
            ),
            'selected' => $dummy_id,
            'label' => 'Status (TR)'
    )); 

   
    echo $this->Form->input('category_en', array(
            'options' => array(  
                'Faculty Member' => 'Faculty Member',   
                'Senior Instructor' => 'Senior Instructor', 
                'Lecturer' => 'Lecturer',
                'Research Assistant' => 'Research Assistant',  
            ),
            'selected' => $dummy_id,
            'label' => 'Category (EN)'
    )); 

    echo $this->Form->input('category_tr', array(
            'options' => array(  
                'Öğretim Üyesi' => 'Öğretim Üyesi',   
                'Öğretim Görevlisi' => 'Öğretim Görevlisi', 
                'Okutman' => 'Okutman',
                'Araştırma Görevlisi' => 'Araştırma Görevlisi',  
            ),
            'selected' => $dummy_id,
            'label' => 'Category (TR)'
    )); 

 
        echo $this->Form->input('name');
        echo $this->Form->input('surname');

     echo $this->Form->input('username');
        echo $this->Form->input('password');

        echo $this->Form->input('email');  
       echo $this->Form->input('tel');  
       echo $this->Form->input('officeno');  
       echo $this->Form->input('url');   

         echo $this->Form->input('department_id', 
            array('type' => 'select',
                    'options' => $dept,
                    'selected' => $dummy_id,
                    'label' => 'Department')
            ); 

  echo '<img src="';

  echo $this->webroot.'upload/'.$id.'.jpg"';
  echo ' width="150" height="150" /> ';

      echo $this->Form->input('User.resim', array('type' => 'file', 'label' => 'Photo'));


    ?>
    </fieldset>
<?php echo $this->Form->end('Save'); ?> 