<div id="widecontent">
  <div id="widecontent2"><i>    <?php echo $this->Lang->get('News',$j['News']['id'],'title'); ?> </i>
    <hr>

<br/>

<?php echo $this->Lang->get('News',$j['News']['id'],'body'); ?>
 
   <br>
   <?php echo h($j['News']['modified']);?>
  </div>
</div> 