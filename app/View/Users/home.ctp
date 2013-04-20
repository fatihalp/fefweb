<div id="centercontent">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  		<tr>
    		<td height="203" colspan="2" align="center"><div id="blinds">
    			<img src="<?php echo $this->webroot;?>images/home.jpg" height="203" width="862" />
    		</div></td>
     		<td width="2%">&nbsp;</td>
  		</tr>
  		<tr>
    		<td height="18" colspan="2" valign="top" class="td">&nbsp;</td>
    		<td>&nbsp;</td>
  		</tr>
  		<tr>
		    <td width="2%">&nbsp;</td>
		    <td width="96%">&nbsp;</td>
		    <td>&nbsp;</td>
  		</tr>
	</table>	
	<i>Welcome to EMU Arts and Sciences Faculty's Webpage</i>
	<hr /><br>
  	<p align="justify">With our faculty members, research oppurtunities, and our  international quality and understanding of continous education, we have been one of the top faculties of Eastern Mediterranean University and one of the best Arts and Sciences faculties in the region. Our main asset is our teaching members, who think universally, are open to innovation, and always develop themselves; and the students they teach. The students who enter the faculty of Arts and Humanities find programs in step with the  times. These programs enable them to gain both theoretical background and skills practiced in the fully-equipped labs. On completing their undergraduate studies, our students find themselves ready and competent to find jobs in the most sought-after professions according to their knowledge and skills, and can study further to become faculty members in their related fields at universities after completing their graduate studies in the fields they have chosen, or they can be employed as teachers upon completing their teacher training certificate program.  All  would-be students  are invited  to the Facultry of Arts and Sciences, where you can get quality education in a broad range of subjects from Literature to Maths, from Computer Sciences to Molecular Biology and Genetics, from Psychology to Translation-Interpretation.</p>
  	<p align="justify">
    
    <div>
    	<a href="http://www.youtube.com/user/emufas" target="_new"> <img src="<?php echo $this->webroot; ?>images/youtube.png" border="0"></a>
    	<a href="http://twitter.com/emufas" target="_new"><img src="<?php echo $this->webroot; ?>images/Twitter.png" border="0"></a>
    	<a href="http://www.facebook.com/pages/EMU-Faculty-of-Arts-and-Sciences/168380369888596" target="_new"><img src="<?php echo $this->webroot; ?>images/fb.png" border="0"></a>
    </div><br><br>
    <hr /><br> 
 
  	<i>Arts and Sciences Faculty Video Tour </i><br><br><br>

  	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  		<tr>
			<td align="center">
  				<iframe width="560" height="315" src="http://www.youtube.com/embed/8S-2QIeJ5iE" frameborder="0" allowfullscreen></iframe>
  			</td>
  		</tr>
  	</table>
  	<br><br>

	<div id="rightcontent">
		<div class="rightbox">
			<i>General Info</i>
			<hr />
			<div class="rightboxinfo"><a href="academic_staff.php?id=421">Dean:<br /><strong>Dr. Rza Bashirov<br />Professor</strong></a></div>
			<div class="rightboxinfo"><a href="academic_staff.php?id=476">Vice Dean:<br /><strong>Dr. Mehmet Bozer<br />Assist. Prof.</strong></a></div>
			<div class="rightboxinfo"><i>News:</i><br /><hr /><br />
				<!--SCROLL NEWS -->
				
					<div id="scrollMe">
					    <div class="scrollingHotSpotLeft" style = "display: none;"></div>
					    <div class="scrollingHotSpotRight" style = "display: none;"></div>
					    <div class="scrollWrapper">
					      	<div class="scrollableArea>"
					      		<li id="startAtMe"></li>
					<?php foreach ($rs as $j): ?> 
					  			<p>
					  				<b>
									    <?php echo $this->Html->link($this->Lang->ret('News',$j['News']['id'],'title'), 
									        array(
									      'controller' => 'News', 
									      'action' => 'guestview',
									      'lang'  => Configure::read('Config.language'),
									       $j['News']['id'])
									      ); 
									      ?>
									</b>
									<?php  echo $this->Time->format('m.d.y', $j['News']['modified']); ?>
					  			</p>
					<?php  	endforeach; unset($post); ?>
					 		</div>
					 	</div>
					</div>
				
				<?php $this->Smoothscroll->SmoothDivScroller("scrollMe"); ?>
        	</div>
		</div>
		<div class="rightbox">
			<i>Contact Info</i>
			<hr />
			<div class="rightboxinfo">Telephone:<br />+90 (392) 630 1251</div>
			<div class="rightboxinfo">Fax:<br />+90 392 3651604</div>
			<div class="rightboxinfo">Secretary:<br />Sevtap Tahsiner</div>
			<div class="rightboxinfo">Email:<br /><a href="mailto:sevtap.tahsiner@emu.edu.tr">sevtap.tahsiner@emu.edu.tr</a></div><br><br><br>
        	
		</div>   
	</div>