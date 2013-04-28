<!DOCTYPE html> 
<html lang="en" class="no-js">
<head>
    <title>Math Club System!</title>
    
    <!-- // Meta //  -->
    <meta charset="utf-8">   
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <![endif]-->
    
    <!-- // Stylesheets // -->
    <link rel="stylesheet" href="<?php echo $this->webroot; ?>panel/css/login2.css" />

    <!-- http://allinthehead.com/retro/319/how-to-set-an-apple-touch-icon-for-any-site -->
    <link rel="apple-touch-icon" href="<?php echo $this->webroot; ?>panel/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php echo $this->webroot; ?>panel/images/favicon.ico">
        
    <!--  Modernizr which enables HTML5 elements & feature detects -->
    <script src="<?php echo $this->webroot; ?>panel/js/modernizr-1.7.min.js"></script>
    
    <!-- // Javascript/jQuery // -->
    <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    <script>!window.jQuery && document.write('<script src="js/jquery-1.6.min.js"><\/script>')</script>
    <script src="<?php echo $this->webroot; ?>panel/js/showpassword.js"></script>
    <script src="<?php echo $this->webroot; ?>panel/js/jquery-ui-1.8.6.min.js"></script>
    <script src="<?php echo $this->webroot; ?>panel/js/login.js"></script>  
     
</head>
<body>
    <div id="container">

        <?php echo $this->fetch('content'); ?>

    </div><!-- END "#container" -->
           
</body>
</html>