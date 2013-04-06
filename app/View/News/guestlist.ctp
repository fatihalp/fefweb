<style>
#box a {
	 font-size:18px; text-decoration:none; color:#036;

}
#box i {
	font-size:12px; font-style:italic; float:right;
}
</style>

<div id="centercontent"  style=" background-color:#FFF !important; margin-left: 158px; margin-right: 188px;">
  	<?php
    foreach ($rs as $j):	
		?>
<div style=" " id="box">
 <h2>    <?php echo $this->Html->link($this->Lang->ret('News',$j['News']['id'],'title'), 
    		array(
			'controller' => 'News', 
			'action' => 'guestview',
			'lang'  => Configure::read('Config.language'),
			 $j['News']['id'])
    	); 
    	?>
        <i> 
       <?php  echo $this->Time->format('m.d.y', $j['News']['modified']); ?>
  
         
</i>
</h2>

</div>

<hr />
<?php  
	  endforeach;  
    unset($post); 
 ?>

</div>

<div id="rightcontent">
  <div class="rightbox">
      <i>General Info</i>
    <hr>
    <div class="rightboxinfo"><a href="academic_staff.php?id=421">Dean:<br><strong>Dr. Rza Bashirov<br>Professor</strong></a></div>
    <div class="rightboxinfo"><a href="academic_staff.php?id=476">Vice Dean:<br><strong>Dr. Mehmet Bozer<br>Assist. Prof.</strong></a></div>
  </div>
  <div class="rightbox">
    <i>Contact Info</i>
    <hr>
    <div class="rightboxinfo">Telephone:<br>+90 (392) 630 1251</div>
    <div class="rightboxinfo">Fax:<br>+90 392 3651604</div>   <div class="rightboxinfo">Secretary:<br>Sevtap Tahsiner</div>
    <div class="rightboxinfo">Email:<br><a href="mailto:sevtap.tahsiner@emu.edu.tr">sevtap.tahsiner@emu.edu.tr</a></div> 
        
        
       
  </div> </div>