<div id="widecontent">
  <div id="widecontent2">

  	<i>    <?php echo $this->Lang->get('News',$j['News']['id'],'title'); ?> </i>
    <hr>

<br/>
<!--Contact Info dean's photo loading in next line:-->
<?php if($j['News']['id'] == 8){ ?><img src="<?php echo $this->webroot;?>images/dean_rza.jpg" /><?php } ?>
<?php echo $this->Lang->get('News',$j['News']['id'],'body'); ?>
 
   <br>
   <?php echo h($j['News']['modified']);?>
  </div>
</div> 