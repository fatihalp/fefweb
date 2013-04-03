<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

	    <!-- // Meta //  -->
    <meta charset="utf-8">   
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <![endif]-->
    
    <!-- // Stylesheets // -->
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>panel/css/style1.css" /> 
    <link rel="stylesheet" type="text/css"
     href="<?php echo $this->webroot; ?>panel/lightbox/style5/style.css">

     <link rel="apple-touch-icon" href="panel/panel/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="panel/panel/images/favicon.ico">
        
    <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
    <script src="<?php echo $this->webroot; ?>panel/js/modernizr-1.7.min.js"></script>


</head>
<body>
 <div id="container">
        <header>
        	<div id="meta-wrap">
                <ul id="user-meta">
                     
                    <li><img src="<?php echo $this->webroot; ?>panel/images/icons/9/005_12.png" alt="" /><a href="#" title="">Logout</a></li>
                </ul>
            </div>        
            <div id="menu-bar" class="corners shadow">
                <div class="menu-bar-inner corners">
                    <a href="index.php" title="" id="logo">
                        <h1>FACULTY OF ART AND SCIENCES</h1>
                    </a>
                    <ul id="menu">
                        <li class="sep"><a href="index.html" title="">Home</a>
                            <!-- second level dropdown -->
                            <ul class="second">
                                <li><a href="dialogs.html" title="">Dialogs</a></li>
                                <li><a href="dialogs.html" title="">Dialogs</a></li>
                                <li><a href="dialogs.html" title="">Dialogs</a></li>
                                <li><a href="login.html" title="">Login</a></li>
                            </ul>                    
                        </li> 
                    </ul> 
                </div>
            </div><!-- END "#menu-bar" -->
            
            <ul id="submenu" class="corners shadow">
                 
                <li>                      
                    <a href="<?php echo $this->webroot; ?>Department" class="icon-menu corners">
       <img src="<?php echo $this->webroot; ?>panel/images/icons/48/preferences-desktop-theme.png" alt="" title="" />
                        <span>Department</span>
                    </a>
                </li>    
                  
                

                <li>
  <a href="<?php echo $this->webroot; ?>Program" class="icon-menu corners">
   <img src="<?php echo $this->webroot; ?>panel/images/icons/48/image-x-generic.png" alt="" title="" />
                        <span>Programs</span>
                    </a>
                </li>     
                  
                     <li>                      
    <a href="<?php echo $this->webroot; ?>Courses" class="icon-menu corners">
                        <img src="<?php echo $this->webroot; ?>panel/images/icons/48/preferences-desktop-theme.png" alt="" title="" />
                        <span>Courses / Curriculum</span>
                    </a>
                </li>  
 

                <li>                      
                    <a href="<?php echo $this->webroot; ?>News" class="icon-menu corners">
                        <img src="<?php echo $this->webroot; ?>panel/images/icons/48/text-x-generic.png" alt="" title="" />
                        <span>Pages</span>
                    </a>
                </li>    
               
                <li>                      
                    <a href="<?php echo $this->webroot; ?>Researchgroup" class="icon-menu corners">
                        <img src="<?php echo $this->webroot; ?>panel/images/icons/48/text-x-generic.png" alt="" title="" />
                        <span>Researchgroup</span>
                    </a>
                </li>  

                <li>                      
                    <a href="<?php echo $this->webroot; ?>Users" class="icon-menu corners">
                        <img src="<?php echo $this->webroot; ?>panel/images/icons/48/user-info.png" alt="" title="" />
                        <span>People</span>
                    </a>
                </li>
                                     
                 

                 <li>                      
                    <a href="<?php echo $this->webroot; ?>News" class="icon-menu corners">
                        <img src="<?php echo $this->webroot; ?>panel/images/icons/48/system-help.png" alt="" title="" />
                        <span>Announcement</span>
                    </a>
                </li> 
               
                  
                                      
            </ul><!-- END "#submenu" -->
             
            <div id="breadcrumbs" class="corners shadow">
               
                <p class="right"><img src="panel/images/icons/9/005_21.png" alt="" />Last modification on: -</p>
                <div id="mastertoggle">
                    <a href="javascript:void(null);" title="Close all boxes" class="togglecloseall corners tip"></a> 
                    <a href="javascript:void(null);" title="Open all boxes" class="toggleopenall corners tip"></a>
                </div>
            </div><!-- END "#breadcrumbs" -->                                 
        </header><!-- END header -->
     
    <!-- // content starts here // -->
        
        <div id="content">
        <form action="" method="post">
          

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
 
 
              
          
           <div class="clear"></div>
                                                    
        </form><!-- END form-->                                              
        </div><!-- END "#content" -->
         
        <!-- // footer starts here // -->
        
        <footer>
            <p class="left">MATHCLUB</p>
            <p class="right">Copyright &copy; 2013 
                
            </p>
        </footer><!-- END footer --> 
         
    </div>




	 
	<?php 
	echo $this->element('sql_dump'); 
	?>
	   <!-- // Javascript/jQuery // -->
    <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    <script>!window.jQuery && document.write('<script src="js/jquery-1.6.min.js"><\/script>')</script>
    <script src="<?php echo $this->webroot; ?>panel/js/jquery-ui-1.8.6.min.js"></script>
    <script src="<?php echo $this->webroot; ?>panel/js/pirobox-min.js"></script>
    <script src="<?php echo $this->webroot; ?>panel/js/jquery.select_skin.js"></script>
    <script src="<?php echo $this->webroot; ?>panel/js/tinyeditor.js"></script>
    <script src="<?php echo $this->webroot; ?>panel/js/jquery.tipsy.js"></script>
    <script src="<?php echo $this->webroot; ?>panel/js/jquery.tweet.js"></script>
    <script src="<?php echo $this->webroot; ?>panel/js/jquery.tablesorter.js"></script>
    <script src="<?php echo $this->webroot; ?>panel/js/treeview.js"></script>
    <script src="<?php echo $this->webroot; ?>panel/js/jquery.cookie.js"></script>
    <script src="<?php echo $this->webroot; ?>panel/js/main.js"></script>

 
        
    
</body>
</html>
