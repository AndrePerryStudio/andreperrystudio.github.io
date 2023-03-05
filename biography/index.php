<?php 
require ('../includes/infos.php') ;
if ($lang==en) { require('en.php') ;} 
else { require('fr.php') ;} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $SiteName ?><?php echo $PageTitle ?></title>
<link href="../css/lightbox.css" rel="stylesheet" type="text/css" />
  
<link href="/twoColFixLt.css" rel="stylesheet" type="text/css" />
<!--[if IE 5]>
<style type="text/css"> 
/* place css box model fixes for IE 5* in this conditional comment */
.twoColFixLt #sidebar1 { width: 230px; }
</style>
<![endif]--><!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.twoColFixLt #sidebar1 { padding-top: 0px; }
.twoColFixLt #mainContent { zoom: 1; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]-->
</head>

<body class="twoColFixLt"<?php require('../includes/onload.php'); ?>>

<div id="container">
  <div id="sidebar1"><?php require('../includes/menu.php'); ?></div>
  <div id="mainContent">
    <?php require('../includes/header.php'); ?> 
    <h1><a name="top" id="top"></a><img src="/biography/PageTitle_<?php echo $lang ?>.gif" alt="<?php echo $PageTitle ?>"  /></h1>
	<?php require('../includes/utils.php'); ?>
    <p>&nbsp;</p>
    <p><a href="#1960">1960 - 1970</a> / <a href="#1970">1970 - 1974</a> / <a href="#1974">1974 - 1982</a> / <a href="#1982">1982 - 1988</a> / <a href="#1988">1988 +</a></p>
    <?php echo $PageContent ?>
    <p><a href="/biography/?lang=<?php echo $lang ?>"><?php echo $MenuBio ?></a> / <a href="/discography/?lang=<?php echo $lang ?>"><?php echo $MenuDisco ?></a> / <a href="/awards/?lang=<?php echo $lang ?>"><?php echo $MenuAwards ?></a> / <a href="/biography/index.php?lang=<?php echo $lang ?>#contact-info"><?php echo $MenuContact ?></a></p>
    <?php include('../includes/footer.php'); ?>
  </div>
  </div>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>  
  <script src="../js/lightbox.min.js"></script>  
</body>
</html>
