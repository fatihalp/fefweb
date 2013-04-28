<h1>Add A New Person</h1>
<?php  
    echo $this->Html->link('Back', array('action' => 'index'));
    echo $this->Form->create('User', array('enctype' => 'multipart/form-data'));
  ?>
    <fieldset>
        <legend> </legend>
    <?php
    echo $this->Form->input('position', array(
            'options' => array(
                'Dean' => 'Dean', 
                'Vice Dean' => 'Vice Dean',
                 'Chair' => 'Chair',
                 'Vice Chair' => 'Vice Chair'                
            ),
            'empty' => 'Choose A Position'
        ));
    echo $this->Form->input('title_en', array(
            'options' => array(
                'Assistant Professor' => 'Assistant Professor', 
                'Associate Professor' => 'Associate Professor',
                 'Professor' => 'Professor'
                
            ),
            'empty' => 'Choose An English Title',
            'label' => 'Title (EN)'
        ));

    echo $this->Form->input('title_tr', array(
            'options' => array(
                'Yrd. Doç.' => 'Yrd. Doç.', 
                'Doç.' => 'Doç.',
                 'Prof. ' => 'Prof. '
                
            ),
            'empty' => 'Choose A Turkish Title',
            'label' => 'Title (TR)'
    ));
    
    echo $this->Form->input('status_en', array(
            'options' => array(  
                'Part Time' => 'Part Time',   
                'Full Time' => 'Full Time'
            ),
            'empty' => 'Choose An English Status',
            'label' => 'Status (EN)'
    )); 
        echo $this->Form->input('status_tr', array(
            'options' => array(  
                'Yarı Zamanlı' => 'Yarı Zamanlı',   
                'Tam Zamanlı' => 'Tam Zamanlı'
            ),
            'empty' => 'Choose A Turkish Status',
            'label' => 'Status (TR)'
    )); 

    echo $this->Form->input('category_en', array(
            'options' => array(  
                'Faculty Member' => 'Faculty Member',   
                'Senior Instructor' => 'Senior Instructor', 
                'Lecturer' => 'Lecturer',
                'Research Assistant' => 'Research Assistant'
            ),
            'empty' => 'Choose An English Category',
            'label' => 'Category (EN)'
    )); 

    echo $this->Form->input('category_tr', array(
            'options' => array(  
                'Öğretim Üyesi' => 'Öğretim Üyesi',   
                'Öğretim Görevlisi' => 'Öğretim Görevlisi', 
                'Okutman' => 'Okutman',
                'Araştırma Görevlisi' => 'Araştırma Görevlisi'
            ),
            'empty' => 'Choose A Turkish Category',
            'label' => 'Category (TR)'
    )); 

    echo $this->Form->input('name', array('label' => 'Name - If only prefix is Dr. then add it here before name (e.g. "Dr. Burak")'));
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
                'empty' => 'Choose A Department',
                'label' => 'Department')
        );
    echo $this->Form->input('User.resim', array('type' => 'file', 'label' => 'Photo'));

    echo $this->Form->input('interests', array('rows' => '5', 'label' => 'Research Interests'));
?>
    </fieldset>
<?php echo $this->Form->end('Save'); ?> 