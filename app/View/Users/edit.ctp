<!-- app/View/Users/add.ctp --> 
    <?php  
    echo $this->Form->create('User', array('enctype' => 'multipart/form-data'));
 
  ?>
   
    <fieldset>
        <legend> </legend>
    <?php 
    echo $this->Form->input('title_en', array(
            'selected' => $r['User']['title_en'],
            'options' => array(
                '' => 'No Title', 
                'Assistant Professor' => 'Assistant Professor', 
                'Associate Professor' => 'Associate Professor',
                 'Professor' => 'Professor', 
                
            ),
            'label' => 'Title In English'
        ));

    echo $this->Form->input('title_tr', array(
            'selected' => $r['User']['title_tr'],
            'options' => array(
                '' => 'Ünvan Yok', 
                'Yrd. Doç.' => 'Yrd. Doç.', 
                'Doç.' => 'Doç.',
                 'Prof. ' => 'Prof. ', 
                
            ),
            'label' => 'Title In Turkish'
    ));

    
    echo $this->Form->input('status_en', array(
            'selected' => $r['User']['status_en'],
            'options' => array(  
                'Part Time' => 'Part Time',   
                'Full Time' => 'Full Time', 
            ),
            'label' => 'Status in English'
    )); 
        echo $this->Form->input('status_tr', array(
            'selected' => $r['User']['status_tr'],
            'options' => array(  
                'Yarı Zamanlı' => 'Yarı Zamanlı',   
                'Tam Zamanlı' => 'Tam Zamanlı', 
            ),
            'label' => 'Status in Turkish'
    )); 

   
    echo $this->Form->input('category_en', array(
            'selected' => $r['User']['category_en'],
            'options' => array(  
                'Faculty Member' => 'Faculty Member',   
                'Senior Instructor' => 'Senior Instructor', 
                'Lecturer' => 'Lecturer',
                'Research Assistant' => 'Research Assistant',  
            ),
            'label' => 'category in English'
    )); 

    echo $this->Form->input('category_tr', array(
            'selected' => $r['User']['category_tr'],
            'options' => array(  
                'Öğretim Üyesi' => 'Öğretim Üyesi',   
                'Öğretim Görevlisi' => 'Öğretim Görevlisi', 
                'Okutman' => 'Okutman',
                'Araştırma Görevlisi' => 'Araştırma Görevlisi',  
            ),
            'label' => 'category in Turkish'
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
                    'selected' => $r['User']['department_id'],
                    'label' => 'Department')
            ); 

  echo '<img src="';

  echo $this->webroot.'upload/'.$id.'.jpg"';
  echo ' width="150" height="150" /> ';

      echo $this->Form->input('User.resim', array('type' => 'file'));


    ?>
    </fieldset>
<?php echo $this->Form->end('Submit'); ?> 