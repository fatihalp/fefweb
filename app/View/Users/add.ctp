<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
    <?php 
        echo $this->Form->input('name');
        echo $this->Form->input('surname');
        echo $this->Form->input('username');
        echo $this->Form->input('password');

         echo $this->Form->input('gender', array(
            'options' => array('Male' => 'Male', 'Female' => 'Female')
        ));
         
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>