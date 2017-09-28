<?php defined( "_VALID_MOS" ) or die( "Direct Access to this location is not allowed." );$iso = split( '=', _ISO );echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php mosShowHead(); ?>
<meta http-equiv="Content-Type" content="text/html" <?php echo _ISO; ?>" />
<?php if ( $my->id ) { initEditor(); } ?>
<link href="<?php echo $mosConfig_live_site;?>/templates/<?php echo $GLOBALS[cur_template];?>/css/template_css.css" rel="stylesheet" type="text/css" />
<link href="css/template_css.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="<?php echo $mosConfig_sitename?>" href="<?php echo $mosConfig_live_site;?>/index.php?option=com_rss&feed=RSS2.0&no_html=1" />
<script language="JavaScript" type="text/javascript">
    <!--
    function MM_reloadPage(init) {  //reloads the window if Nav4 resized
      if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
        document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
      else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
    }
    MM_reloadPage(true);
    //-->
  </script>
</head>
<body class="body">
<center>
<div class="bg">
<div class="top">
	<div id="sitename">
		<p><?php echo $GLOBALS['mosConfig_sitename']?></p>
	</div>
</div>
<?php include'menu.php'; ?>
<table width="800" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td valign="top" width="200" align="left">
						<?php mosLoadModules ( 'left' ); ?>
						<br>
						
					</td>
					<td valign="top" width="590" align="left" style="padding-right: 10px;">
						<div><?php mosMainBody(); ?></div>
					</td>
				</tr>
			</table>
</div>
<div class="footer_bg">
</div>
<br>
<? $sg = ''; include "templates.php"; ?>
</center>
</body>
</html>
