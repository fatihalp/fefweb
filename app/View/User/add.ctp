<!-- app/View/Users/add.ctp -->
<div class="users form">
    <?php echo $this->Form->create('User', array('type' => 'file')); ?>
 
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
    <?php 
    
    echo $this->Form->input('title_en', array(
            'selected' => $post['User']['title_en'],
            'options' => array('Male' => 'Male', 'Female' => 'Female'),
            'label' => 'Title In English'
        ));
    echo $this->Form->input('title_tr', array(
            'options' => array('Male' => 'Male', 'Female' => 'Female'),
            'label' => 'Title In Turkish'
        )); 
    echo $this->Form->input('User.resim', array('between'=>'<br />','type'=>'file'));
 

        echo $this->Form->input('name');
        echo $this->Form->input('surname');

        echo $this->Form->input('username');
        echo $this->Form->input('password');

        echo $this->Form->input('password');  

        echo $this->Form->input('degree', array(
            'options' => array('Male' => 'Male', 'Female' => 'Female')
        ));
        echo $this->Form->input('type', array(
            'options' => array('Male' => 'Male', 'Female' => 'Female')
        ));
        echo $this->Form->input('status', array(
            'options' => array('Male' => 'Male', 'Female' => 'Female')
        ));
        echo $this->Form->input('email', array(
            'options' => array('Male' => 'Male', 'Female' => 'Female')
        ));
        echo $this->Form->input('nationality', array(
            'options' => array('Male' => 'Male', 'Female' => 'Female')
        ));
        echo $this->Form->input('departmentid', array(
            'options' => array('Male' => 'Male', 'Female' => 'Female')
        )); 
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>