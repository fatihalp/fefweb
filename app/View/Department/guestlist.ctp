<div id="widecontent">
  <div id="widecontent2">

<table width="423" border="1">
 

<?php
    foreach ($rs as $b):	

    	
?>

 <tr>
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
<?php
       



	  endforeach;  
    unset($post); 
?>

</table>
 
 </div>
</div> 