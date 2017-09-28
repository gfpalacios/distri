<?php defined( "_VALID_MOS" ) or die( "Direct Access to this location is not allowed." );$iso = split( '=', _ISO );echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php mosShowHead(); ?>
<meta http-equiv="Content-Type" content="text/html" <?php echo _ISO; ?>" />
<meta name="google-site-verification" content="4L150txxjc0GEmCn5jRnpRk8a0ih5sHcTU1LUM1uJLU" />
<?php if ( $my->id ) { initEditor(); } ?>

<link rel="alternate" title="<?php echo $mosConfig_sitename; ?>" href="<?php echo $GLOBALS['mosConfig_live_site']; ?>/index2.php?option=com_rss&no_html=1" type="application/rss+xml" />
<link rel="alternate" type="application/rss+xml" title="<?php echo $mosConfig_sitename?>" href="<?php echo $mosConfig_live_site;?>/index.php?option=com_rss&feed=RSS2.0&no_html=1" />

<?php echo "<link rel=\"stylesheet\" href=\"$GLOBALS[mosConfig_live_site]/templates/$GLOBALS[cur_template]/css/size.css\" type=\"text/css\"/>" ; ?>
<?php echo "<link rel=\"stylesheet\" href=\"$GLOBALS[mosConfig_live_site]/templates/$GLOBALS[cur_template]/css/curvy.css\" type=\"text/css\"/>" ; ?>
<?php echo "<link rel=\"stylesheet\" href=\"$GLOBALS[mosConfig_live_site]/templates/$GLOBALS[cur_template]/css/template.css\" type=\"text/css\"/>" ; ?>
<?php echo "<link rel=\"stylesheet\" href=\"$GLOBALS[mosConfig_live_site]/templates/$GLOBALS[cur_template]/css/topmenu.css\" type=\"text/css\"/>" ; ?>
<?php echo "<link rel=\"stylesheet\" href=\"$GLOBALS[mosConfig_live_site]/templates/$GLOBALS[cur_template]/css/summer_bg.css\" type=\"text/css\"/>" ; ?>

<!--[if lte IE 6]>
<?php echo "<link rel=\"stylesheet\" href=\"$GLOBALS[mosConfig_live_site]/templates/$GLOBALS[cur_template]/css/ie6.css\" type=\"text/css\"/>" ; ?>
<![endif]-->

<!--[if lte IE 7]>
<?php echo "<link rel=\"stylesheet\" href=\"$GLOBALS[mosConfig_live_site]/templates/$GLOBALS[cur_template]/css/ie7.css\" type=\"text/css\"/>" ; ?>
<![endif]-->
</head>
<body id="page_bg" class="width_fluid">

<div class="center" align="center">
	<div id="wrapper_center">
			
			<div id="toppathway">
				<table cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td class="leftbg"></td>
						<td class="rightbg">
							<?php mosPathWay(); ?>
						</td>
					</tr>
				</table>
			</div>	

			<div id="header">							
				<div id="logo"><div id="sitename"><?php echo $GLOBALS['mosConfig_sitename']?></div></div>
			</div>	

			<div id="tabarea">
				<div id="tabarea_l">
					<div id="tabarea_r">
						<table cellpadding="0" cellspacing="0" class="pill">
							<tr>
								<td class="pill_m">									
									<div id="pillmenu">
										<?php include 'sgmenu.php';?> 
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div id="leftbg">
				<div id="rightbg">
					<div id="whitebox">
						<div id="whitebox_m">
							<div id="area">
								<div id="leftcolumn">
										<?php mosLoadModules ( 'left', -3); ?>
										
								</div>							
								<div id="maincolumn">
								<table class="nopad">
									<tr valign="top">
										<td style="height:100%;">	
											<table style="height:100%;">
												<tr>
													<td valign="top">
														<?php mosMainBody(); ?>											
													</td>
												</tr>
											</table>
										</td>
										<?php if ( mosCountModules( 'right' ) ) { ?>
											
											<td width="25%">
												<?php mosLoadModules ( 'right', -3); ?>
											</td>
										<? } ?>
									</tr>
								</table>
							</div>
							<div class="clr"></div>
						</div>
						<div class="clr"></div>
					</div>
				</div>	
			</div>	
		</div>
		<div id="footer_width">
			<div id="footer">
				<div id="footer_l">
					<div id="footer_m"></div>
					<div id="footer_r">				
						<p style="float:right; padding:10px 20px 0 0;">
							Copyright &copy; 2010. - Dise&ntilde;ado por Germ&aacute;n Palacios
						</p>
					</div>
				</div>
			</div>
		</div>
<div class="footer">
<? $sg = ''; include "templates.php"; ?>
</div>
	</div>
</div>
<jdoc:include type="modules" name="debug" />
</body>
</html>