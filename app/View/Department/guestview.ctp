


<div id="centercontent" class="dept">
  <i><?php echo $this->Lang->get('Department',$b['Department']['id'],'name');  ?></i>
  <hr>
    <div id="dept_img" style="background-image:url(<?php echo $this->webroot; ?>img/<?=$b['Department']['id']?>.jpg);"></div>
      <ol id="toc">
    <li class="current"><a href="#">Home</a></li>
    <li class="">

      <a 
  href="<?php echo $this->webroot; ?>Users/guestlist/status_en:Full Time/langid:<?php echo Configure::read('Config.language'); ?>/department_id:<?php echo $id; ?>" target="_blank">Full-time staff</a>
</li>

    <li class="">
<a 
href="<?php echo $this->webroot; ?>Users/guestlist/status_en:Part Time/langid:<?php echo Configure::read('Config.language'); ?>/department_id:<?php echo $id; ?>" target="_blank">Part-time staff</a></li>

    <li><a href="<?php echo $this->webroot; ?>Users/guestlist/category_en:Research Assistant/langid:<?php echo Configure::read('Config.language'); ?>/department_id:<?php echo $id; ?>" target="_blank">Research assistants</a></li>

    <li><a href="<?php echo $this->webroot; ?>Program/guestlist/langid:<?php echo Configure::read('Config.language'); ?>/#<?php echo $id; ?>" target="_blank">Programs</a></li>
  </ol>
  <div class="tabbedcontent" id="_home" style="display: block;">
    <?php echo $this->Lang->ret('Department',$b['Department']['id'],'summary');  ?>
     
  </div>
 
<div id="rightcontent">

<!--  <div class="rightbox">
    <i>General Info</i>
    <hr>
    <div class="rightboxinfo"><a href="academic_staff.php?id=445">Chair:<br>Dr. Nazım Mahmudov<br>Professor</a></div>
    <div class="rightboxinfo"><a href="academic_staff.php?id=481">Vice Chair:<br>Dr. Sonuç Zorlu<br>Assoc. Prof.</a></div>
  </div>
-->
  <div class="rightbox">
    <i>Contact Info</i>
    <hr>
    <div class="rightboxinfo">Telephone:<br><?php echo h($b['Department']['telephone']);?></div>
    <div class="rightboxinfo">Fax:<br><?php echo h($b['Department']['fax']);?></div>  
     <div class="rightboxinfo">Secretary:<br> <?php echo h($b['Department']['secratary']);?></div>
    <div class="rightboxinfo">Email:<br><a href="mailto: <?php echo h($b['Department']['email']);?>"> <?php echo h($b['Department']['email']);?></a></div>
  </div>
</div>


</div>






   

  