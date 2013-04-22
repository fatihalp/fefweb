<!--TABS-->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script type="text/javascript">
  $(function() {
    $( "#tabs" ).tabs();
  });
</script>
<!--/TABS-->
<?php 
  if(Configure::read('Config.language') == 'en'){
    $dept_en = "DEPARTMENT OF ";
    $t1 = 'General'; $t2 = 'Full-Time Staff'; $t3 = 'Part-Time Staff'; $t4 = 'Research Assistants'; $t5 = 'Programs';  $total = 'Total';
    $info = "General Info"; $ch = "Chair"; $vCh = "Vice Chair";
    $contact = "Contact Info"; $tel = "Telephone"; $fax = "Fax"; $sect = "Secretary"; $email = "E-Mail";
  } 
  if(Configure::read('Config.language') == 'tr'){
    $dept_tr = " BÖLÜMÜ";
    $t1 = 'Genel'; $t2 = 'Tam Zamanlı Personel'; $t3 = 'Yarı Zamanlı Personel'; $t4 = 'Araştırma Görevlileri'; $t5 = 'Programlar'; $total = 'Toplam';
    $info = "Genel Bilgi"; $ch = "Bölüm Başkanı"; $vCh = "Bölüm Başkan Yardımcısı";
    $news = 'Haberler';
    $contact = "İletişim"; $tel = "Telefon No"; $fax = "Faks No"; $sect = "Sekreter"; $email = "E-Posta";
  }
?>
<div id="centercontent" class="dept">
  <i><?php echo $dept_en.strtoupper($b['Department']['name_'.Configure::read('Config.language')]).$dept_tr;?></i>
  <hr />
    <div id="dept_img"></div>
  <div id="tabs">
    <ul>
      <li><a href="#tabs-1"><?php echo $t1;?></a></li>
      <li><a href="#tabs-2"><?php echo $t2;?></a></li>
      <li><a href="#tabs-3"><?php echo $t3;?></a></li>
      <li><a href="#tabs-4"><?php echo $t4;?></a></li>
      <li><a href="#tabs-5"><?php echo $t5;?></a></li>
    </ul>

    <div id="tabs-1">
      <p><?php echo $b['Department']['summary_'.Configure::read('Config.language')]?></p>
      
      <!--<h2>Statistics</h2>
      <dl>
        <dt>Full-time staff:</dt><dd>19</dd>
        <dt>Part-time staff:</dt><dd>10</dd>
        <dt>Research assistants:</dt><dd>17</dd>
        <dt>Undergraduate programs:</dt><dd>1</dd>
        <dt>Graduate programs:</dt><dd>3</dd>
      </dl>-->
    </div>

    <div id="tabs-2">
      <table class="tabular_info" cellpadding="0" cellspacing="0">
      <?php $i = 0; foreach ($full as $a) {?>
        <tr <?php if($i % 2 == 1) echo 'class="even_row"'; ?>>
          <td>
            <a class="tooltip" href="<?php echo $this->webroot; echo 'Users/guestview/'.$a['User']['id'].'/lang:'.Configure::read('Config.language'); ?>">
            <?php if(!empty($a['User']['title_'.Configure::read('Config.language')])) echo "Dr. "; 
              echo $a['User']['name'].' '.$a['User']['surname']; ?>
              <img class="linktooltip" width="200" height="250" src="<?php echo $this->webroot; ?>upload/<?php echo $a['User']['id']; ?>.jpg" alt="<?php echo $a['User']['name'].' '.$a['User']['surname']; ?>" />
            </a>
          </td>
          <td><?php echo $a['User']['officeno'];?></td>
          <td><?php echo $a['User']['tel'];?></td>
          <td><a href="mailto:<?php echo $a['User']['email'];?>"><?php echo $a['User']['email'];?></a></td>
        </tr>
        <?php $i = $i + 1;} ?>
      </table>

      <h3><?php echo $total;?>: <?php echo $i;?></h3>
    </div>

    <div id="tabs-3">
      <table class="tabular_info" cellpadding="0" cellspacing="0">
        <?php $i = 0; foreach ($part as $a) {?>
        <tr <?php if($i % 2 == 1) echo 'class="even_row"'; ?>>
          <td>
            <a class="tooltip" href="<?php echo $this->webroot; echo 'Users/guestview/'.$a['User']['id'].'/lang:'.Configure::read('Config.language'); ?>">
            <?php if(!empty($a['User']['title_'.Configure::read('Config.language')])) echo "Dr. "; 
              echo $a['User']['name'].' '.$a['User']['surname']; ?>
              <img class="linktooltip" width="200" height="250" src="<?php echo $this->webroot; ?>upload/<?php echo $a['User']['id']; ?>.jpg" alt="<?php echo $a['User']['name'].' '.$a['User']['surname']; ?>" />
            </a>
          </td>
          <td><?php echo $a['User']['officeno'];?></td>
          <td><?php echo $a['User']['tel'];?></td>
          <td><a href="mailto:<?php echo $a['User']['email'];?>"><?php echo $a['User']['email'];?></a></td>
        </tr>
        <?php $i = $i + 1;} ?>
      </table>

      <h3><?php echo $total;?>: <?php echo $i;?></h3>
    </div>

    <div id="tabs-4">
      <table class="tabular_info" cellpadding="0" cellspacing="0">
        <?php $i = 0; foreach ($assist as $a) {?>
        <tr <?php if($i % 2 == 1) echo 'class="even_row"'; ?>>
          <td>
            <a class="tooltip" href="<?php echo $this->webroot; echo 'Users/guestview/'.$a['User']['id'].'/lang:'.Configure::read('Config.language'); ?>">
            <?php if(!empty($a['User']['title_'.Configure::read('Config.language')])) echo "Dr. "; 
              echo $a['User']['name'].' '.$a['User']['surname']; ?>
              <img class="linktooltip" width="200" height="250" src="<?php echo $this->webroot; ?>upload/<?php echo $a['User']['id']; ?>.jpg" alt="<?php echo $a['User']['name'].' '.$a['User']['surname']; ?>" />
            </a>
          </td>
          <td><?php echo $a['User']['officeno'];?></td>
          <td><?php echo $a['User']['tel'];?></td>
          <td><a href="mailto:<?php echo $a['User']['email'];?>"><?php echo $a['User']['email'];?></a></td>
        </tr>
        <?php $i = $i + 1;} ?>
      </table>

      <h3><?php echo $total;?>: <?php echo $i;?></h3>
    </div>

    <div id="tabs-5">
      <table class="tabular_info" cellpadding="0" cellspacing="0">
      <?php $i = 0; foreach ($prog as $a) {?>
        <tr <?php if($i % 2 == 1) echo 'class="even_row"'; ?>>
          <td>
            <a href="<?php echo $this->webroot.'Program/guestview/'.$a['Program']['id'].'/lang:'.Configure::read('Config.language'); ?>"><?php echo $a['Program']['name_'.Configure::read('Config.language')];?></a>
          </td>
          <td>
            <?php 
              if(Configure::read('Config.language') == 'en'){
                if($a['Program']['type'] == 'U') $type = 'Undergraduate Program';
                else
                  if($a['Program']['type'] == 'M') $type = 'Master Program';
                else
                  $type = 'PhD. Program';
              } 
              if(Configure::read('Config.language') == 'tr'){
                if($a['Program']['type'] == 'U') $type = 'Lisans Programı';
                else
                  if($a['Program']['type'] == 'M') $type = 'Lisansüstü Programı';
                else
                  $type = 'Doktora Programı';
              }
              echo $type;
            ?>
          </td>
        </tr>
      <?php $i = $i + 1;} ?>
      </table>

      <h3><?php echo $total;?>: <?php echo $i;?></h3>
    </div>
  </div>

<div id="rightcontent">
  <div class="rightbox">
    <i><?php echo $info;?></i>
    <hr />
    <div class="rightboxinfo"><a href="<?php echo $this->webroot; echo 'Users/guestview/'.$chair[0]['User']['id'].'/lang:'.Configure::read('Config.language'); ?>"><?php echo $ch;?>:<br />Dr. 
      <?php echo $chair[0]['User']['name'].' '.$chair[0]['User']['surname'].'<br />'.$chair[0]['User']['title_'.Configure::read('Config.language')]; ?></a></div>
    <div class="rightboxinfo"><a href="<?php echo $this->webroot; echo 'Users/guestview/'.$vChair[0]['User']['id'].'/lang:'.Configure::read('Config.language'); ?>"><?php echo $vCh;?>:<br />Dr. 
      <?php echo $vChair[0]['User']['name'].' '.$vChair[0]['User']['surname'].'<br />'.$vChair[0]['User']['title_'.Configure::read('Config.language')]; ?></a></div>
  </div>
  <div class="rightbox">
    <i><?php echo $contact;?></i>
    <hr />
    <div class="rightboxinfo"><?php echo $tel;?>:<br /><?php echo $b['Department']['telephone'];?></div>
    <div class="rightboxinfo"><?php echo $fax;?>:<br /><?php echo $b['Department']['fax'];?></div>   <div class="rightboxinfo"><?php echo $sect;?>:<br /><?php echo $secretary[0]['User']['name'].' '.$secretary[0]['User']['surname'];?></div>
    <div class="rightboxinfo"><?php echo $email;?>:<br /><a href="mailto:<?php echo $b['Department']['email'];?>"><?php echo $b['Department']['email'];?></a></div>
  </div>
</div>












