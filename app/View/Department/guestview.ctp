


<div id="centercontent" class="dept">
  <i><?php echo $this->Lang->get('Department',$b['Department']['id'],'name');  ?></i>
  <hr>
    <div id="dept_img" style="background-image:url(<?php echo $this->webroot; ?>img/<?=$b['Department']['id']?>.jpg);"></div>
      <ol id="toc">
    <li class="current"><a href="#home">Home</a></li>
    <li class="">

      <a 
  href="<?php echo $this->webroot; ?>Users/guestlist/status_en:Full Time/langid:<?=Configure::read('Config.language')?>/department_id:<?=$id?>">Full-time staff</a>
</li>

    <li class=""><a href="#ptstaff">Part-time staff</a></li>
    <li class=""><a href="#assistants">Research assistants</a></li>
    <li class=""><a href="#programs">Programs</a></li>
    <!--<li><a href="#courses">Courses</a></li> -->
  </ol>
  <div class="tabbedcontent" id="_home" style="display: block;">
    <?php echo $this->Lang->get('Department',$b['Department']['id'],'summary');  ?>
     
  </div>
  <div class="tabbedcontent" id="_ftstaff" style="display: none;">
    <table class="tabular_info" cellpadding="0" cellspacing="0">
              <tbody>

         <!--       <tr>
          <td>
            <a class="tooltip" href="academic_staff.php?id=445">
              Dr. Nazım Mahmudov<img class="linktooltip" src="files/741.jpg" alt="Picture of Nazım Mahmudov">
            </a>
          </td>
          <td>AS</td>
          <td>+90 (392) 630 1002</td>
          <td><a href="mailto:nazim.mahmudov@emu.edu.tr">nazim.mahmudov@emu.edu.tr</a></td>
        </tr>
             -->
              <tr>
          <td>
            <a class="tooltip" href="academic_staff.php?id=424">
              Dr. Agamirza Bashirov<img class="linktooltip" src="files/194.jpg" alt="Picture of Agamirza Bashirov">
            </a>
          </td>
          <td>AS 364</td>
          <td>+90 (392) 630 1228</td>
          <td><a href="mailto:agamirza.bashirov@emu.edu.tr">agamirza.bashirov@emu.edu.tr</a></td>
        </tr>
             
           
               
           
          </tbody></table>
    <h3>Total: 19</h3>
  </div>
  <div class="tabbedcontent" id="_ptstaff" style="display: none;">
    <table class="tabular_info" cellpadding="0" cellspacing="0">
              <tbody><tr>
          <td>
            <a class="tooltip" href="academic_staff.php?id=668">
              Dr. Şerife Bekar<img class="linktooltip" src="images/mendefault.jpg" alt="No picture available">
            </a>
          </td>
          <td></td>
          <td></td>
          <td><a href="mailto:serife.bekar@emu.edu.tr">serife.bekar@emu.edu.tr</a></td>
        </tr>
          
          
             
          </tbody></table>
    <h3>Total: 10</h3>
  </div>
  <div class="tabbedcontent" id="_assistants" style="display: none;">
    <table class="tabular_info" cellpadding="0" cellspacing="0">
              <tbody><tr>
          <td>
            <a class="tooltip" href="academic_staff.php?id=670">
              Emine Çeliker<img class="linktooltip" src="images/mendefault.jpg" alt="No picture available">
            </a>
          </td>
          <td>AS 350</td>
          <td>2408</td>
          <td><a href="mailto:emine.celiker@emu.edu.tr">emine.celiker@emu.edu.tr</a></td>
        </tr>
           
             
           
              <tr>
          <td>
            <a class="tooltip" href="academic_staff.php?id=704">
              Hadi Zahmatkesh<img class="linktooltip" src="images/mendefault.jpg" alt="No picture available">
            </a>
          </td>
          <td>AS 435</td>
          <td>2412</td>
          <td><a href="mailto:hadi.zahmatkesh@gmail.com">hadi.zahmatkesh@gmail.com</a></td>
        </tr>
          </tbody></table>
    <h3>Total: 17</h3>
  </div>
  <div class="tabbedcontent" id="_programs" style="display: none;">
    <table class="tabular_info" cellpadding="0" cellspacing="0">
              <tbody><tr>
          <td>
            <a href="programs.php?id=254">Information Systems</a>
          </td>
          <td>MSc</td>
        </tr>
           
          </tbody></table>
    <h3>Total: 4</h3>
  </div>
  <div class="tabbedcontent" id="_courses" style="display: none;">
    <table class="tabular_info" cellpadding="0" cellspacing="0">
              <tbody><tr>
          <td>AE-1</td>
          <td><a href="courses.php?id=517">Area Elective - 1</a></td>
        </tr>
              <tr class="even_row">
          <td>AE-2</td>
          <td><a href="courses.php?id=518">Area Elective - 2</a></td>
        </tr>
              
          </tbody></table>
    <h3>Total: 128</h3>
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






   

  