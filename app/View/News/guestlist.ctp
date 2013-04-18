<div id="centercontent">

<ul style = "position: relative;">
<div id="scroll">
    <div class="scrollingHotSpotLeft"></div>
    <div class="scrollingHotSpotRight"></div>
    <div class="scrollWrapper">
      <div class="scrollableArea>"
<?php foreach ($rs as $j): ?> 
  <li><strong>
    <?php echo $this->Html->link($this->Lang->ret('News',$j['News']['id'],'title'), 
        array(
      'controller' => 'News', 
      'action' => 'guestview',
      'lang'  => Configure::read('Config.language'),
       $j['News']['id'])
      ); 
      ?>

    </strong><?php  echo $this->Time->format('m.d.y', $j['News']['modified']); ?>
  </li>
<?php  
    endforeach;  
    unset($post); 
 ?>
 <li>DENEMEqwwwwwwwwwwwwwwwwwww wqqqqqqqqqqqqqqqqqqqqqqqqqc qwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww wqdsdads</li>
 <li>DENEME</li>

 </div></div></div>
</ul>
<?php $this->Smoothscroll->SmoothDivScroller("scroll"); ?>
</div>
