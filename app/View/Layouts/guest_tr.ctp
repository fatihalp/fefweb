
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254" />
<meta http-equiv="Expires" content="now" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />
<title>Bölümler - Fen Ve Edebiyat Fakültesi - DAÜ</title>
<link href="<?php echo $this->webroot; ?>images/layout.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->webroot; ?>images/style.css" rel="stylesheet" type="text/css" />
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="210" height="113" align="right" valign="top" id="banner"><a href="http://www.emu.edu.tr"> <img src="<?php echo $this->webroot; ?>images/logo.jpg" alt="EMU" border="0" width="165" height="110" /> </a></td>
    <td width="500" height="113" align="center" valign="top" id="banner"><br>
      <br>
    <img src="<?php echo $this->webroot; ?>images/header_tr.jpg" alt="EMU - Faculty of Arts and Sciences" name="header_script" width="409" height="40" border="0" /></td>
    <td width="100%" id="banner">&nbsp;</td>
    <td width="301" valign="top" id="banner"><img src="<?php echo $this->webroot; ?>images/diploma.jpg" alt="EMU - Faculty of Arts and Sciences" name="header_script" width="301" height="110" border="0" /></td>
  </tr>
  <tr>
    <td colspan="2"><div id="banner2">
        <div  id="search_form">
          <a href="<?php echo $this->webroot; ?>">Anasayfa</a>
          
          <?php if(Configure::read('Config.language') == 'en') { ?>

          <a href="<?php echo Configure::read('Config.language'); ?>">&nbsp;
            <img src="<?php echo $this->webroot; ?>images/TurkishFlag.gif">
            Türkçe
          </a>&nbsp;&nbsp;

          <?php }  ?>

          <?php if(Configure::read('Config.language') == 'tr') { ?>
            <img src="<?php echo $this->webroot; ?>images/EnglishFlag.gif">
          <a href="<?php echo Configure::read('Config.language'); ?>">&nbsp;
             
            English
          </a>&nbsp;&nbsp;

          <?php }  ?>
 
         </div>

      </div></td>
  </tr>
</table><div id="leftcontent">
  <div class="menu">
    <ul>
      <li ><a href="<?php echo $this->webroot; ?>">Anasayfa</a> </li>
      <li ><a href="<?php echo $this->webroot; ?>News/guestlist/lang:<?php echo Configure::read('Config.language'); ?>">Haberler</a> </li>
      <li ><a href="<?php echo $this->webroot; ?>news/guestview/8/lang:<?php echo Configure::read('Config.language'); ?>">Dekanın Mesajı</a> </li>

      <li ><a href="<?php echo $this->webroot; ?>Users/guestlist/lang:<?php echo Configure::read('Config.language'); ?>">Kadro</a>
       
      </li>

<li><a href="<?php echo $this->webroot; ?>Department/guestlist/lang:<?php echo Configure::read('Config.language'); ?>">Bölümler</a></li>
      <li ><a href="<?php echo $this->webroot; ?>Program/guestlist/lang:<?php echo Configure::read('Config.language'); ?>">Programlar</a> </li>
 
    
      <li><a href="<?php echo $this->webroot; ?>News/guestview/11/lang:<?php echo Configure::read('Config.language'); ?>">Vizyon-Misyon</a></li>
      <li><a href="<?php echo $this->webroot; ?>News/guestview/12/lang:<?php echo Configure::read('Config.language'); ?>" >Stratejik Plan</a></li>
      <li ><a href="<?php echo $this->webroot; ?>News/guestview/9/lang:<?php echo Configure::read('Config.language'); ?>">İletişim</a>
    
    </ul>
  </div></div>
<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

<br style="clear:both;" />
<hr style="padding-top:30px; margin-bottom:5px; margin:0px;" />
<div id="footer" align="center" style="margin:15px; padding:15px; padding-left:150px;   text-align:center !important; width:600px; "> 
  
<div>
   <a href="http://www.youtube.com/user/emufas" target="_new">
    <img src="<?php echo $this->webroot; ?>images/youtube.png" border="0">
  </a> 

  <a href="http://twitter.com/emufas" target="_new">
  <img src="<?php echo $this->webroot; ?>images/Twitter.png" border="0"></a>

   <a href="http://www.facebook.com/pages/EMU-Faculty-of-Arts-and-Sciences/168380369888596" target="_new">
    <img src="<?php echo $this->webroot; ?>images/fb.png" border="0"></a>
</div>

       
<script>
  (function() {
    var cx = '000726049824051921483:533wwo1wr-4';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchbox-only></gcse:searchbox-only>
   




<div>
 &copy; DAÜ - Fen Edebiyat Fakültesi, Tüm Hakları saklıdır. 
 <br/>
 Kıbrıs'ta sevgi ile yapılmıştır. 
 <a href="<?php echo $this->webroot; ?>News/guestview/12/lang:<?php echo Configure::read('Config.language'); ?>" target="_blank">Emeği geçenler</a>
   -- <a href="<?php echo $this->webroot; ?>Users/login">Giriş </a>
</div>


</div>



</div>
</body>
</html>



	