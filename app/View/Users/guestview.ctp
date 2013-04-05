<div id="centercontent"> <i> <?php echo $a['User']['title_'.Configure::read('Config.language')]; ?> 

<?php echo $a['User']['name']; ?>

<?php echo $a['User']['surname']; ?>

    </i>
  <hr>
  <p><strong><?php  $this->Department->dept_name1($a['User']['department_id']) ; ?> </strong></p>
  <p><strong><?php

   echo $a['User']['parttime']; 

  ?>
</strong></p>
  <p><strong>Contact Information:</strong></p>
  <dl>
    <dt>Website:</dt>
    <dd><?php echo $a['User']['url']; ?></dd>
    <dt>Telephone:</dt>
    <dd><?php echo $a['User']['tel']; ?></dd>
   
    <dt>Office:</dt>
    <dd><?php echo $a['User']['officeno']; ?></dd>
    <dt>Email:</dt>
    <dd><a href="mailto:h<?php echo $a['User']['email']; ?>"><?php echo $a['User']['email']; ?></a></dd>
  </dl>
  

<p><strong>Research Interests: </strong></p>
<ul>
     <?php echo $a['User']['interests']; ?> 
      </ul>


</div>
