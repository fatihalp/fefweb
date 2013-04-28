<link rel="stylesheet" href="<?php echo $this->webroot;?>css/totemticker.css" />
<script src="<?php echo $this->webroot;?>js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>js/jquery.totemticker.js"></script>
<script type="text/javascript">
	$(function(){
		$('#vertical-ticker').totemticker({
			row_height	:	'100px',
			next		:	'#ticker-next',
			previous	:	'#ticker-previous',
			stop		:	'#stop',
			start		:	'#start',
			speed       :   1800,
			interval    :   4000,
			max_items   :   3,
			mousestop   :   true,
		});
	});
</script>
<?php 
  if(Configure::read('Config.language') == 'en'){
    $title1 = "Welcome to EMU Arts and Sciences Faculty's Webpage";
    $title2 = "EMU Arts and Sciences Faculty Video Tour";
    $info = "General Info"; $tdean = "Dean"; $tvDean = "Vice Dean";
    $news = 'News'; $archive = 'Archive';
    $contact = "Contact Info"; $tel = "Telephone"; $fax = "Fax"; $secretary = "Secretary"; $email = "E-Mail";
  } 
  if(Configure::read('Config.language') == 'tr'){
    $title1 = "DAÜ Fen ve Edebiyat Fakültesi' nin Sayfasına Hoşgeldiniz";
    $title2 = "DAÜ Fen ve Edebiyat Fakültesi Tanıtım Videosu";
    $info = "Genel Bilgi"; $tdean = "Dekan"; $tvDean = "Dekan Yardımcısı";
    $news = 'Haberler'; $archive = 'Arşiv';
    $contact = "İletişim"; $tel = "Telefon No"; $fax = "Faks No"; $secretary = "Sekreter"; $email = "E-Posta";
  }
?>
<div id="centercontent">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  		<tr>
    		<td width="1000" height="203" colspan="2" align="center"><div id="blinds">
    			<img id="home_photo" src="<?php echo $this->webroot;?>images/home.jpg" height="203" width="862" style="float: none;" />
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
	<i><?php echo $title1;?></i>
	<hr /><br>
<?php if(Configure::read('Config.language') == 'en'){ ?>
  	<p align="justify">With our faculty members, research oppurtunities, and our  international quality and understanding of continous education, we have been one of the top faculties of Eastern Mediterranean University and one of the best Arts and Sciences faculties in the region. Our main asset is our teaching members, who think universally, are open to innovation, and always develop themselves; and the students they teach. The students who enter the faculty of Arts and Humanities find programs in step with the  times. These programs enable them to gain both theoretical background and skills practiced in the fully-equipped labs. On completing their undergraduate studies, our students find themselves ready and competent to find jobs in the most sought-after professions according to their knowledge and skills, and can study further to become faculty members in their related fields at universities after completing their graduate studies in the fields they have chosen, or they can be employed as teachers upon completing their teacher training certificate program.  All  would-be students  are invited  to the Facultry of Arts and Sciences, where you can get quality education in a broad range of subjects from Literature to Maths, from Computer Sciences to Molecular Biology and Genetics, from Psychology to Translation-Interpretation.</p>
  	<p align="justify">
<?php }else echo '<p align="justify">Çeviri Bekleniyor!..</p>'; ?>
    
    <div>
    	<a href="http://www.youtube.com/user/emufas" target="_new"> <img src="<?php echo $this->webroot; ?>images/youtube.png" border="0"></a>
    	<a href="http://twitter.com/emufas" target="_new"><img src="<?php echo $this->webroot; ?>images/Twitter.png" border="0"></a>
    	<a href="http://www.facebook.com/pages/EMU-Faculty-of-Arts-and-Sciences/168380369888596" target="_new"><img src="<?php echo $this->webroot; ?>images/fb.png" border="0"></a>
    </div><br><br>
    <hr /><br> 
 
  	<i><?php echo $title2;?></i><br><br><br>

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
			<i><?php echo $info;?></i>
			<hr />
			<div class="rightboxinfo">
				<a href="<?php echo $this->webroot; echo 'Users/guestview/'.$dean[0]['User']['id'].'/lang:'.Configure::read('Config.language'); ?>"><?php echo $tdean;?>:<br /><strong>Dr. 
				<?php echo $dean[0]['User']['name'].''.$dean[0]['User']['surname'].'<br />'.$dean[0]['User']['title_'.Configure::read('Config.language')]?></strong></a>
			</div>
			<div class="rightboxinfo">
				<a href="<?php echo $this->webroot; echo 'Users/guestview/'.$vDean[0]['User']['id'].'/lang:'.Configure::read('Config.language'); ?>"><?php echo $tvDean;?>:<br /><strong>Dr. 
				<?php echo $vDean[0]['User']['name'].''.$vDean[0]['User']['surname'].'<br />'.$vDean[0]['User']['title_'.Configure::read('Config.language')]?></strong></a>
			</div>
			<div class="rightboxinfo"><i><?php echo $news;?>:</i><br /><hr /><br />
				<!--TOTEM TICKER-->
				<div id="wrapper">
				    <ul id="vertical-ticker">
						<?php foreach ($rs as $j): ?>
				  			<li>
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
								<?php  echo $this->Time->format('d.m.Y', $j['News']['modified']); ?>
				  			</li>
						<?php  	endforeach; ?>
					</ul>
				 	<p>
				 		<a href="#" id="ticker-previous" alt="Previous/Önceki">&lt;--&nbsp;&nbsp;</a>
				 		<a id="start" href="#" alt="Start/Başlat">&nbsp;&nbsp;I&nbsp;&nbsp;</a> / <a id="stop" href="#"  alt="Stop/Durdur">&nbsp;&nbsp;O&nbsp;&nbsp;</a>
				 		<a href="#" id="ticker-next" alt="Next/Sonraki">&nbsp;&nbsp;--&gt;</a>
				 	</p>
				 	<p><a href="<?php echo $this->webroot.'news/guestlist/lang:'.Configure::read('Config.language'); ?>"><?php echo $archive; ?></a></p>
				</div>
        	</div>
		</div>
		<div class="rightbox">
			<i><?php echo $contact;?></i>
			<hr />
			<div class="rightboxinfo"><?php echo $tel;?>:<br />+90 (392) 630 1251</div>
			<div class="rightboxinfo"><?php echo $fax;?>:<br />+90 392 3651604</div>
			<div class="rightboxinfo"><?php echo $secretary;?>:<br />Sevtap Tahsiner</div>
			<div class="rightboxinfo"><?php echo $email;?>:<br /><a href="mailto:sevtap.tahsiner@emu.edu.tr">sevtap.tahsiner@emu.edu.tr</a></div><br><br><br>
		</div>   
	</div>