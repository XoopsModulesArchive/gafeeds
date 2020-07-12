<?php
// $Id: index.php,v 1.1 2007/06/28 16:44:14 ohwada Exp $

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
$xoopsOption['template_main'] = 'gafeeds_index.html';
include XOOPS_ROOT_PATH.'/header.php';

$xoopsTpl->assign('lang_feeds',      _MI_GAFEEDS_SMNAME_FEEDS );
$xoopsTpl->assign('lang_slide_show', _MI_GAFEEDS_SMNAME_SLIDE_SHOW );

$xoopsTpl->assign('module_name',     $xoopsModule->getVar('name') );
$xoopsTpl->assign('is_module_admin', $xoopsUserIsAdmin );

$xoopsTpl->assign('ga_api_key',    $xoopsModuleConfig['api_key'] );
$xoopsTpl->assign('ga_url_1',      $xoopsModuleConfig['url_1'] );
$xoopsTpl->assign('ga_label_1',    $xoopsModuleConfig['label_1'] );
$xoopsTpl->assign('ga_url_2',      $xoopsModuleConfig['url_2'] );
$xoopsTpl->assign('ga_label_2',    $xoopsModuleConfig['label_2'] );
$xoopsTpl->assign('ga_url_3',      $xoopsModuleConfig['url_3'] );
$xoopsTpl->assign('ga_label_3',    $xoopsModuleConfig['label_3'] );
$xoopsTpl->assign('ga_draw_mode',  $xoopsModuleConfig['draw_mode'] );

include XOOPS_ROOT_PATH.'/footer.php';
exit();

?>