<?php
// $Id: slide_show.php,v 1.3 2007/07/20 11:36:15 ohwada Exp $

// 2007-07-19 K.OHWADA
// thumbnail_size

//=========================================================
// Google Ajax Feeds Module
// 2007-06-23 K.OHWADA
//=========================================================

include '../../mainfile.php';

// modinfo.php
$XOOPS_LANGUAGE   = $xoopsConfig['language'];
if ( file_exists(XOOPS_ROOT_PATH.'/modules/gafeeds/language/'.$XOOPS_LANGUAGE.'/modinfo.php') ) 
{
	include_once XOOPS_ROOT_PATH.'/modules/gafeeds/language/'.$XOOPS_LANGUAGE.'/modinfo.php';
}
else
{
	include_once XOOPS_ROOT_PATH.'/modules/gafeeds/language/english/modinfo.php';
}

// start
$xoopsOption['template_main'] = 'gafeeds_slide_show.html';
include XOOPS_ROOT_PATH.'/header.php';

$scale_images = 'false';
if ( $xoopsModuleConfig['ss_scale_images'] )
{
	$scale_images = 'true';
}

$url = $xoopsModuleConfig['ss_url'];
if ( $xoopsModuleConfig['ss_url_random'] )
{
	$parse = parse_url($url);
	if ( isset($parse['query']) ) {
		$url .= '&';
	} else {
		$url .= '?';
	}
	$url .= 'rand='.rand();
}

$xoopsTpl->assign('lang_feeds',      _MI_GAFEEDS_SMNAME_FEEDS );
$xoopsTpl->assign('lang_slide_show', _MI_GAFEEDS_SMNAME_SLIDE_SHOW );

$xoopsTpl->assign('module_name',     $xoopsModule->getVar('name') );
$xoopsTpl->assign('is_module_admin', $xoopsUserIsAdmin );

$xoopsTpl->assign('ga_api_key',             $xoopsModuleConfig['api_key'] );
$xoopsTpl->assign('ss_title_s',             htmlspecialchars($xoopsModuleConfig['ss_title'], ENT_QUOTES) );
$xoopsTpl->assign('ga_ss_url',              $url );
$xoopsTpl->assign('ga_ss_url_s',            htmlspecialchars($url, ENT_QUOTES) );
$xoopsTpl->assign('ga_ss_num_results',      $xoopsModuleConfig['ss_num_results'] );
$xoopsTpl->assign('ga_ss_display_time',     $xoopsModuleConfig['ss_display_time'] );
$xoopsTpl->assign('ga_ss_transition_time',  $xoopsModuleConfig['ss_transition_time'] );
$xoopsTpl->assign('ga_ss_link_target',      $xoopsModuleConfig['ss_link_target'] );
$xoopsTpl->assign('ga_ss_thumbnail_size',   $xoopsModuleConfig['ss_thumbnail_size'] );
$xoopsTpl->assign('ga_ss_scale_images',     $scale_images );

include XOOPS_ROOT_PATH.'/footer.php';
exit();

?>