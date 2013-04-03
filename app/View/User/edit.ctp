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
                '-1' => 'Ünvan Yok', 
                'Assistant Professor' => 'Assistant Professor', 
                'Associate Professor' => 'Associate Professor',
                 'Professor' => 'Professor', 
                
            ),
            'label' => 'Title In English'
        ));

        echo $this->Form->input('title_tr', array(
            'selected' => $r['User']['title_tr'],
            'options' => array(
                '-1' => 'Ünvan Yok', 
                'Yrd. Doç.' => 'Yrd. Doç.', 
                'Doç.' => 'Doç.',
                 'Prof. ' => 'Prof. ', 
                
            ),
            'label' => 'Personel Ünvanı'
        ));

    
        echo $this->Form->input('parttime', array(
            'selected' => $r['User']['parttime'],
            'options' => array(  
                '' => 'Select', 
                '1' => 'Part Time',   
                '2' => 'Full Time', 
            ),
            'label' => 'Type'
        )); 
    
 
        echo $this->Form->input('name');
        echo $this->Form->input('surname');

   

        echo $this->Form->input('email');  
       echo $this->Form->input('tel');  
       echo $this->Form->input('officeno');  
       echo $this->Form->input('url');   

            echo $this->Form->input('department_id', array('type' => 'select',
        'selected' => $r['User']['department_id'],
        'options' => $dept,
        'label' => 'Department'));
  echo '<img src="';

  echo $this->webroot.'upload/'.$id.'.jpg"';
  echo ' width="150" height="150" /> ';

       // echo $this->Form->input('User.resim', array('type' => 'file'));


    ?>
    </fieldset>
<?php echo $this->Form->end('Submit'); ?> 