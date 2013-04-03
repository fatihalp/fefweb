<div id="widecontent">
  <div id="widecontent2">
    <table  class = "tabular_info" cellpadding = "0" cellspacing = "0">
    <tbody>
    
      <tr class = "first_row">
          
          <td>Department Name</td>
          <td style = "width: 60px;">E-Mail</td>
          <td style = "width: 100px;">Telephone</td>
        </tr>
        <?php $i = 1;
      foreach ($rs as $b):  
    ?>
      <tr class ="<?php if($i%2 == 0)echo 'even_row'?>">
        <td>
        <?php 
          echo $this->Html->link($this->Lang->get('Department',$b['Department']['id'],'name') ,
          array(
            'controller' => 'department', 
            'action' => 'guestview',
            $b['Department']['id'],
             'lang' => Configure::read('Config.language'),
            )
          );
        ?>
        </td>
        <td><?php echo $b["Department"]["email"]; ?></td>
        <td><?php echo $b["Department"]["telephone"]; ?></td>
      </tr>
      <?php $i = $i + 1;
	      endforeach;  
        unset($post); 
      ?>
    </tbody>
    </table> 
  </div>
</div> 


<table
    