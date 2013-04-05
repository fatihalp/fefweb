<div id="widecontent"> <i>ACADEMIC STAFF</i>
  <div id="tabular_info">
    <!--
    <div id="browser">
      <div id="browser_title"> <strong>BROWSE OPTIONS</strong></div>
      <span class="browse_options">DEPARTMENT:
      <select name="department" title="Department" disabled>
        <option selected="selected" value="0">All</option>
      </select>
      </span> <span class="browse_options">TYPES:
      <select name="typeSel" title="Types" disabled>
       <option selected="selected" value="0">All</option>
        <option value="1">Faculty Members</option>
        <option value="2">Part-time Instructors</option>
        <option selected="selected" value="3">Research Assistants</option>
      </select>
      </span><br>
      <br>
    </div>
-->
    <table class="tabular_info" cellpadding="0" cellspacing="0">
      <tbody>
        <tr class="first_row">
          <td><a>Name</a></td>
          <td><a>Department</a></td>
          <td>Room</td>
          <td>Telephone</td>
          <td>Email</td>
        </tr>
          <?php
    foreach ($row as $a): 
    ?>
        <tr class="even_row">
          <td>
<a class="tooltip" href="<?php echo $this->webroot; echo 'Users/guestview/'.$a['User']['id'].'/langid:'.Configure::read('Config.language'); ?>
"> 

<?php echo $a['User']['title_'.Configure::read('Config.language')]; ?> 

<?php echo $a['User']['name']; ?>

<?php echo $a['User']['surname']; ?>
 
   <img class="linktooltip" src="<?php echo $this->webroot; ?>upload/<?php echo $a['User']['id']; ?>.jpg" alt="No picture available"> </a>

      </td>
          <td>

      
<?php  $this->Department->dept_name1($a['User']['department_id']) ; ?>   </td>

          <td><?php echo $a['User']['officeno']; ?></td>
          <td><?php echo $a['User']['tel']; ?></td>
          <td><a href="mailto:<?php echo $a['User']['email']; ?>"><?php echo $a['User']['email']; ?></a></td>
        </tr>
      <?php  
    endforeach;  
    unset($post); 
 ?>  
        <tr>
          <td colspan="5" class="last_row">PAGE 1/1 </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
