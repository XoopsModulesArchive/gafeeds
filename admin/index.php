<?php
// $Id: index.php,v 1.1 2007/06/28 16:41:49 ohwada Exp $

//=========================================================
// Google Ajax Feeds Module
// 2007-06-23 K.OHWADA
//=========================================================

include '../../../include/cp_header.php';

$XOOPS_LANGUAGE = $xoopsConfig['language'];
if ( file_exists(XOOPS_ROOT_PATH.'/modules/gafeeds/language/'.$XOOPS_LANGUAGE.'/modinfo.php') ) 
{
	include_once XOOPS_ROOT_PATH.'/modules/gafeeds/language/'.$XOOPS_LANGUAGE.'/modinfo.php';
}
else
{
	include_once XOOPS_ROOT_PATH.'/modules/gafeeds/language/english/modinfo.php';
}

// --- main start ---
xoops_cp_header();
$url_pref = XOOPS_URL.'/modules/system/admin.php?fct=preferences&amp;op=showmod&amp;mod='.$xoopsModule->getVar('mid');
$url_mod = XOOPS_URL.'/modules/gafeeds/index.php';

?>
<h3><?php echo $xoopsModule->getVar('name'); ?></h3>
<?php echo _MI_GAFEEDS_DESC; ?><br /><br />
<ul>
<li><a href="<?php echo $url_pref; ?>"><?php echo _PREFERENCES; ?></a><br /><br /></li>
<li><a href="<?php echo $url_mod; ?>">go to module</a></li>
</ul><br />
<hr />
<div style="text-align: right; font-size: 80%;">
<a href="http://linux2.ohwada.net/" target="_blank">
Powered by Happy Linux
</a><br />
&copy; 2007, Kenichi OHWADA<br />
</div>
<?php

xoops_cp_footer();
exit();
// --- main end ---


?>