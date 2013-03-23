
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254" />
<meta http-equiv="Expires" content="now" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />
<title>Departments - Faculty of Arts and Sciences - EMU</title>
<link href="<?php echo $this->webroot; ?>images/layout.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->webroot; ?>images/style.css" rel="stylesheet" type="text/css" />
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="210" height="113" align="right" valign="top" id="banner"><a href="http://www.emu.edu.tr"> <img src="<?php echo $this->webroot; ?>images/logo.jpg" alt="EMU" border="0" width="165" height="110" /> </a></td>
    <td width="500" height="113" align="center" valign="top" id="banner"><br>
      <br>
    <img src="<?php echo $this->webroot; ?>images/colors/header_script/header_script_0.jpg" alt="EMU - Faculty of Arts and Sciences" name="header_script" width="409" height="40" border="0" /></td>
    <td width="100%" id="banner">&nbsp;</td>
    <td width="301" valign="top" id="banner"><img src="<?php echo $this->webroot; ?>images/diploma.jpg" alt="EMU - Faculty of Arts and Sciences" name="header_script" width="301" height="110" border="0" /></td>
  </tr>
  <tr>
    <td colspan="2"><div id="banner2">
        <form id="search_form" method="get" action="search.php">
          <a href="http://brahms.emu.edu.tr/Beta/">Home</a> - <a href="login.php">Login</a> - <a href="http://brahms.emu.edu.tr/tr/">&nbsp;<img src="<?php echo $this->webroot; ?>images/TurkishFlag.gif">&nbsp;T&uuml;rk&ccedil;e</a>&nbsp;&nbsp;
          <input name="q" type="text" value="Search this website" id="search_key_word" onfocus="if(document.getElementById('search_key_word').value=='Search this website')document.getElementById('search_key_word').value='';" onblur="if(document.getElementById('search_key_word').value=='')document.getElementById('search_key_word').value='Search this website';" />
          <input type="submit" value="GO!" />
        </form>
      </div></td>
  </tr>
</table><div id="leftcontent">
  <div class="menu">
    <ul>
      <li ><a href="index.php">Home</a> </li>
      <li ><a href="deanmessage.php">Dean's Message</a> </li>
      <li ><a href="academic_staff.php">People</a>
        <ul>
          <li><a href="academic_staff.php?browse=typeSel&amp;value=1" title="Faculty Members">Faculty Members</a></li>
          <li><a href="academic_staff.php?browse=typeSel&amp;value=2" title="Part-time Instructors">Part-Time Instructors</a></li>
          <li><a href="academic_staff.php?browse=typeSel&amp;value=3" title="Research Assistants">Research Assistants</a></li>
        </ul>
      </li>
      <li><a href="department.php">Departments</a>
        <ul>
          <li><a href="department.php?id=478" title="Arts, Humanities &amp; Social Sciences">Arts, Humanities &amp; Social Sciences</a></li>
          <li><a href="department.php?id=582" title="Biological Sciences">Biological Sciences</a></li>
          <li><a href="department.php?id=485" title="Chemistry">Chemistry</a></li>
          <li><a href="department.php?id=476" title="Mathematics">Mathematics</a></li>
          <li><a href="department.php?id=480" title="Physics">Physics</a></li>
          <li><a href="department.php?id=484" title="Psychology">Psychology</a></li>
          <li><a href="department.php?id=581" title="Translation &amp; Interpretation">Translation &amp; Interpretation</a></li>
          <li><a href="department.php?id=482" title="Turkish Language And Literature">Turkish Language And Literature</a></li>
        </ul>
      </li>
      <li ><a href="programs.php">Programs</a> </li>
      </li>
      </li>
      </li>
      <li ><a href="links.php">Links</a> </li>
      <li><a href="visionmission.php">Vision -Mission</a></li>
      <li><a href="fas_strategic_plan.pdf" target="_blank">Strategic Plan</a></li>
      <li ><a href="contactus.php">Contact Us</a>
      <li ><a href="faq.php">FAQ</a> </li>
    </ul>
  </div></div>
<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

<hr style="padding-top:30px; margin-bottom:5px; margin:0px;" />
<div id="footer" align="center"> 
  <!---->
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="82%" align="center" valign="middle"><p>&copy; EMU - Faculty of Arts and Sciences, All Rights Reserved. <a href="credits.php" target="_blank">Credits</a></p></td>
      <td width="18%"><div> <a href="http://www.youtube.com/user/emufas" target="_new"><img src="<?php echo $this->webroot; ?>images/youtube.png" border="0"></a> <a href="http://twitter.com/emufas" target="_new"><img src="<?php echo $this->webroot; ?>images/Twitter.png" border="0"></a> <a href="http://www.facebook.com/pages/EMU-Faculty-of-Arts-and-Sciences/168380369888596" target="_new"><img src="<?php echo $this->webroot; ?>images/fb.png" border="0"></a></div></td>
    </tr>
  </table>
</div>
</body>
</html>


	