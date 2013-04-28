<link rel="stylesheet" href="<?php echo $this->webroot;?>css/totemticker.css" />
<script src="<?php echo $this->webroot;?>js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot;?>js/jquery.totemticker.js"></script>
<script type="text/javascript">
  $(function(){
    $('#vertical-ticker').totemticker({
      row_height  : '100px',
      next    : '#ticker-next',
      previous  : '#ticker-previous',
      stop    : '#stop',
      start   : '#start',
      speed       :   1800,
      interval    :   4000,
      max_items   :   5,
      mousestop   :   true,
    });
  });
</script>
<?php 
  if(Configure::read('Config.language') == 'en'){
    $title = 'NEWS ARCHIVE';
    $note = "If you see only this line, then there is no news in that archive. You can control this ticker at the bottom.";
  }
  if(Configure::read('Config.language') == 'tr'){
    $title = 'HABER ARŞİVİ';
    $note = "Sadece bu içeriği görüyorsanız, bu arşivde haber yok demektir. Aşağıdaki kontroller ile bu kutuyu kumanda edebilirsiniz.";
  }
?>
<div id="widecontent">
<i><?php echo $title; ?></i>
<hr /><br />
<!--TOTEM TICKER-->
        <div id="wrapper">
            <ul id="vertical-ticker">
              <li><b><?php echo $note; ?></b></li>
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
            <?php   endforeach; ?>
          </ul>
          <p>
            <a href="#" id="ticker-previous" alt="Previous/Önceki">&lt;--&nbsp;&nbsp;</a>
            <a id="start" href="#" alt="Start/Başlat">&nbsp;&nbsp;I&nbsp;&nbsp;</a> / <a id="stop" href="#"  alt="Stop/Durdur">&nbsp;&nbsp;O&nbsp;&nbsp;</a>
            <a href="#" id="ticker-next" alt="Next/Sonraki">&nbsp;&nbsp;--&gt;</a>
          </p>
        </div>
</div>