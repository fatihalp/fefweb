<div id="centercontent" style="font-size: 14px;"> 

  <i>
  <?php 
    echo $a['User']['title_'.Configure::read('Config.language')]; 
    if(!empty($a['User']['title_'.Configure::read('Config.language')])) echo " Dr. ";
  ?> 

<?php echo $a['User']['name']; ?>

<?php echo $a['User']['surname']; ?>

    </i>
  <hr>
  <img  width="200" height="250" src="<?php echo $this->webroot; ?>upload/<?php echo $a['User']['id']; ?>.jpg">


  <p><strong><?php if(Configure::read('Config.language') == 'en') echo 'Department of '; $this->Department->dept_name1($a['User']['department_id']); if(Configure::read('Config.language') == 'tr') echo ' Bölümü'; ?> </strong></p>
  <p><strong><?php

   echo $a['User']['status_'.Configure::read('Config.language')]; 
   echo ' ';
    echo $a['User']['category_'.Configure::read('Config.language')]; 

  ?>
</strong></p>
  <p><strong>
     <?php if(Configure::read('Config.language') == 'en') { echo 'Contact Information'; } ?>  
      <?php if(Configure::read('Config.language') == 'tr') { echo 'İletişim Bilgileri'; } ?>
    </strong></p>


  <dl>
    <dt>
      <?php if(Configure::read('Config.language') == 'en') { echo 'Personal Website'; } ?>  
      <?php if(Configure::read('Config.language') == 'tr') { echo 'Kişisel Web Sitesi'; } ?>
    :</dt>
    <dd><?php if(empty($a['User']['url'])) echo " - "; else echo $a['User']['url']; ?></dd>
 

    <dt>
        <?php if(Configure::read('Config.language') == 'en') { echo 'Office Telephone:'; } ?>  
      <?php if(Configure::read('Config.language') == 'tr') { echo 'Ofis Telefonu:'; } ?> 
    </dt>
    <dd><?php echo $a['User']['tel']; ?></dd>
   
    <dt>    <?php if(Configure::read('Config.language') == 'en') { echo 'Office Number'; } ?>  
      <?php if(Configure::read('Config.language') == 'tr') { echo 'Ofis No'; } ?> :</dt>
    <dd><?php echo $a['User']['officeno']; ?></dd>

    <dt>
      <?php if(Configure::read('Config.language') == 'en') { echo 'E-mail Address'; } ?>  
      <?php if(Configure::read('Config.language') == 'tr') { echo 'E-Posta Adresi'; } ?>
    :</dt>
    <dd><a href="mailto:h<?php echo $a['User']['email']; ?>"><?php echo $a['User']['email']; ?></a></dd>
  </dl>
  

<p><strong> <?php if(Configure::read('Config.language') == 'en') { echo 'Research Interests: '; } ?>  
      <?php if(Configure::read('Config.language') == 'tr') { echo 'Araştırma Konuları'; } ?>
</strong></p>
<ul>
     <?php echo $a['User']['interests']; ?> 
</ul>


</div>
<style type="text/css">
  dt { height: 25px; font-size: 14px;  }
  dd { height: 25px; font-size: 14px; font-weight: bold;}
</style>