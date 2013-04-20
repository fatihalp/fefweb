<?php 
  if(Configure::read('Config.language') == 'en'){
    $title = 'ACADEMIC STAFF';
    $filter = 'Filter'; $filter1 = 'BROWSE OPTIONS'; $filter2 = 'DEPARTMENT: '; $filter3 = 'TYPES: '; $all = 'All';
    $name = 'Name'; $depts = 'Department'; $room = 'Room'; $telephone = 'Telephone'; $email = 'E-Mail';
  } 
  if(Configure::read('Config.language') == 'tr'){
    $title = 'AKADEMİK PERSONEL';
    $filter = 'Filtrele'; $filter1 = 'GÖRÜNTÜLEME SEÇENEKLERİ'; $filter2 = 'BÖLÜM: '; $filter3 = 'KADRO TİPİ: '; $all = 'Hepsi';
    $name = 'Ad Soyad'; $depts = 'Bölüm'; $room = 'Ofis No'; $telephone = 'Ofis Telefonu'; $email = 'E-Posta';
  }
?>
<div id="widecontent"> <i><?php echo $title; ?></i>
  <div id="tabular_info">
    <div id="browser">
      <div id="browser_title">
      <strong>
        <?php echo $filter1;?>
      </strong>
    </div>
      <?php 
        echo $this->Form->create('Filter', array('type' => 'post'));
        echo $this->Form->input('department_id', array('type' => 'select',
                'options' => $dept,
                'empty' => $all,
                'label' => $filter2,
                'selected' => $dept_id));
        echo $this->Form->input('category_'.Configure::read('Config.language'), array('type' => 'select',
                'options' => $cats,
                'empty' => $all,
                'label' => $filter3,
                'selected' => $cat));
        echo $this->Form->end($filter);
      ?>
      <br />
    </div>

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
          <td><a><?php echo $name;?></a></td>
          <td><a><?php echo $depts;?></a></td>
          <td><?php echo $room;?></td>
          <td><?php echo $telephone;?></td>
          <td><?php echo $email;?></td>
        </tr>
          <?php
    foreach ($row as $a): 
    ?>
        <tr class="even_row">
          <td>
<a class="tooltip" href="<?php echo $this->webroot; echo 'Users/guestview/'.$a['User']['id'].'/lang:'.Configure::read('Config.language'); ?>
"> 

<?php if(!empty($a['User']['title_'.Configure::read('Config.language')])) { echo "Dr. "; }?> 

<?php echo $a['User']['name']; ?>

<?php echo $a['User']['surname']; ?>

   <img class="linktooltip" width="200" height="250" src="<?php echo $this->webroot; ?>upload/<?php echo $a['User']['id']; ?>.jpg" alt=""> </a>

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
          <td colspan="5" class="last_row">1/1</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
