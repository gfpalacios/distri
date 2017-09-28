<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
?>
<?php echo "<?xml version=\"1.0\"?>"; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<?php mosShowHead(); ?>
<link href="<?php echo $mosConfig_live_site;?>/templates/<?php echo $GLOBALS[cur_template];?>/css/template_css.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo $mosConfig_live_site;?>/images/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="<?php echo $mosConfig_sitename?>" href="<?php echo $mosConfig_live_site;?>/index.php?option=com_rss&feed=RSS2.0&no_html=1" />
</head>
<body>
<center>
<table cellpadding="0" cellspacing="0" border="0" class="height">

	<tr>
		<td class="bg_left" rowspan="2" class="height"></td>
		<td valign="top" align="center">
<!-- -->
<table width="804" class="height" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td class="td5"></td>
	</tr>
	<tr>
		<td>
			<table width="804" class="height" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td class="td1"></td>
				</tr>		
				<tr>
					<td class="td2">
						<div id="topnavigation">
							<table cellpadding="0" cellspacing="0">
								<tr>
							<?php
								$database->setQuery("SELECT id, name, link FROM #__menu WHERE menutype='mainmenu' and parent='0' AND access<='$gid' AND sublevel='0' AND published='1' ORDER BY ordering");
								$rows = $database->loadObjectList();
								foreach($rows as $row) {
									echo "<td width='14'></td><td><a class='topnavigation' href='$row->link&Itemid=$row->id' >$row->name</a></td>";
								}
							?>
								</tr>
							</table>
						</div>
					</td>
				</tr>
				<tr>
					<td class="td3"></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td valign="top" class="height">
			<table width="804" class="height" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td rowspan="2" class="td4" align="left" valign="top">
					<div style="padding:0px 0px 0px 20px">
						<?php mosLoadModules('left',-2); ?>
					</div>
					
					</td>

				</tr>
				<tr>
					<td class="td6" valign="top">
					<div style="padding-right:10px;">
						<?php mosMainBody(); ?>
					</div>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<table width="804" class="height" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td class="td7" align="center">
<p id="sgf" align="center">
	<? $sg = ''; include "templates.php"; ?> 			
</p>					
					</td>
				</tr>
			</table></td>
	</tr>
</table>
<!-- -->
		</td>	
		<td class="bg_right"valign="top"></td>
	</tr>		
</table>
<!-- -->
</center>
</body>
</html>