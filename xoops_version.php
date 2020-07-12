<?php
// $Id: xoops_version.php,v 1.3 2007/07/20 11:36:15 ohwada Exp $

// 2007-07-19 K.OHWADA
// thumbnail_size

//=========================================================
// Google Ajax Feeds Module
// 2007-06-23 K.OHWADA
//=========================================================

$modversion['version']     = 0.2;
$modversion['name']        = _MI_GAFEEDS_NAME;
$modversion['description'] = _MI_GAFEEDS_DESC;
$modversion['credits']  = '';
$modversion['author']   = 'K.OHWADA';
$modversion['help']     = '';
$modversion['license']  = 'GPL see LICENSE';
$modversion['official'] = 1;
$modversion['image']    = 'images/gafeeds_logo.png';
$modversion['dirname']  = 'gafeeds';

//Admin things
$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu']  = 'admin/menu.php';

// Menu
$modversion['hasMain'] = 1;

// Sub Menu
$modversion['sub'][1]['name'] = _MI_GAFEEDS_SMNAME_SLIDE_SHOW;
$modversion['sub'][1]['url']  = 'slide_show.php';

// Templates
$modversion['templates'][1]['file'] = 'gafeeds_index.html';
$modversion['templates'][1]['description'] = '';
$modversion['templates'][2]['file'] = 'gafeeds_slide_show.html';
$modversion['templates'][2]['description'] = '';

// Config Settings (only for modules that need config settings generated automatically)
$modversion['config'][1]['name']        = 'api_key';
$modversion['config'][1]['title']       = '_MI_GAFEEDS_API_KEY';
$modversion['config'][1]['description'] = '_MI_GAFEEDS_API_KEY_DSC';
$modversion['config'][1]['formtype']    = 'textarea';
$modversion['config'][1]['valuetype']   = 'text';
$modversion['config'][1]['default']     = '';

$modversion['config'][2]['name']        = 'url_1';
$modversion['config'][2]['title']       = '_MI_GAFEEDS_URL_1';
$modversion['config'][2]['description'] = '_MI_GAFEEDS_URL_DSC';
$modversion['config'][2]['formtype']    = 'text';
$modversion['config'][2]['valuetype']   = 'text';
$modversion['config'][2]['default']     = 'http://xoops.org/backend.php';

$modversion['config'][3]['name']        = 'label_1';
$modversion['config'][3]['title']       = '_MI_GAFEEDS_LABEL_1';
$modversion['config'][3]['description'] = '_MI_GAFEEDS_LABEL_DSC';
$modversion['config'][3]['formtype']    = 'text';
$modversion['config'][3]['valuetype']   = 'text';
$modversion['config'][3]['default']     = 'Xoops';

$modversion['config'][4]['name']        = 'url_2';
$modversion['config'][4]['title']       = '_MI_GAFEEDS_URL_2';
$modversion['config'][4]['description'] = '';
$modversion['config'][4]['formtype']    = 'text';
$modversion['config'][4]['valuetype']   = 'text';
$modversion['config'][4]['default']     = 'http://rss.cnn.com/rss/cnn_topstories.rss';

$modversion['config'][5]['name']        = 'label_2';
$modversion['config'][5]['title']       = '_MI_GAFEEDS_LABEL_2';
$modversion['config'][5]['description'] = '';
$modversion['config'][5]['formtype']    = 'text';
$modversion['config'][5]['valuetype']   = 'text';
$modversion['config'][5]['default']     = 'CNN';

$modversion['config'][6]['name']        = 'url_3';
$modversion['config'][6]['title']       = '_MI_GAFEEDS_URL_3';
$modversion['config'][6]['description'] = '';
$modversion['config'][6]['formtype']    = 'text';
$modversion['config'][6]['valuetype']   = 'text';
$modversion['config'][6]['default']     = 'http://www.digg.com/rss/index.xml';

$modversion['config'][7]['name']        = 'label_3';
$modversion['config'][7]['title']       = '_MI_GAFEEDS_LABEL_3';
$modversion['config'][7]['description'] = '';
$modversion['config'][7]['formtype']    = 'text';
$modversion['config'][7]['valuetype']   = 'text';
$modversion['config'][7]['default']     = 'Digg';

$modversion['config'][8]['name']        = 'draw_mode';
$modversion['config'][8]['title']       = '_MI_GAFEEDS_DRAW_MODE';
$modversion['config'][8]['description'] = '_MI_GAFEEDS_DRAW_MODE_DSC';
$modversion['config'][8]['formtype']    = 'select';
$modversion['config'][8]['valuetype']   = 'text';
$modversion['config'][8]['default']     = 'tabbed';
$modversion['config'][8]['options']     = array(
	'_MI_GAFEEDS_DRAW_MODE_LINEAR' => 'linear',
	'_MI_GAFEEDS_DRAW_MODE_TABBED' => 'tabbed',
);

$modversion['config'][9]['name']        = 'ss_url';
$modversion['config'][9]['title']       = '_MI_GAFEEDS_SS_URL';
$modversion['config'][9]['description'] = '_MI_GAFEEDS_SS_URL_DSC';
$modversion['config'][9]['formtype']    = 'text';
$modversion['config'][9]['valuetype']   = 'text';
$modversion['config'][9]['default']     = 'http://www.google.com/uds/solutions/slideshow/sample.rss';

$modversion['config'][10]['name']        = 'ss_title';
$modversion['config'][10]['title']       = '_MI_GAFEEDS_SS_TITLE';
$modversion['config'][10]['description'] = '';
$modversion['config'][10]['formtype']    = 'text';
$modversion['config'][10]['valuetype']   = 'text';
$modversion['config'][10]['default']     = 'Google Sample';

$modversion['config'][11]['name']        = 'ss_num_results';
$modversion['config'][11]['title']       = '_MI_GAFEEDS_SS_NUM';
$modversion['config'][11]['description'] = '_MI_GAFEEDS_SS_NUM_DSC';
$modversion['config'][11]['formtype']    = 'text';
$modversion['config'][11]['valuetype']   = 'int';
$modversion['config'][11]['default']     = 10;

$modversion['config'][12]['name']        = 'ss_display_time';
$modversion['config'][12]['title']       = '_MI_GAFEEDS_SS_DISPLAY';
$modversion['config'][12]['description'] = '_MI_GAFEEDS_SS_DISPLAY_DSC';
$modversion['config'][12]['formtype']    = 'text';
$modversion['config'][12]['valuetype']   = 'int';
$modversion['config'][12]['default']     = 5000;

$modversion['config'][13]['name']        = 'ss_transition_time';
$modversion['config'][13]['title']       = '_MI_GAFEEDS_SS_TRANSITION';
$modversion['config'][13]['description'] = '_MI_GAFEEDS_SS_TRANSITION_DSC';
$modversion['config'][13]['formtype']    = 'text';
$modversion['config'][13]['valuetype']   = 'int';
$modversion['config'][13]['default']     = 1000;

$modversion['config'][14]['name']        = 'ss_scale_images';
$modversion['config'][14]['title']       = '_MI_GAFEEDS_SS_SCALE';
$modversion['config'][14]['description'] = '_MI_GAFEEDS_SS_SCALE_DSC';
$modversion['config'][14]['formtype']    = 'yesno';
$modversion['config'][14]['valuetype']   = 'int';
$modversion['config'][14]['default']     = 1;

$modversion['config'][15]['name']        = 'ss_link_target';
$modversion['config'][15]['title']       = '_MI_GAFEEDS_SS_TARGET';
$modversion['config'][15]['description'] = '_MI_GAFEEDS_SS_TARGET_DSC';
$modversion['config'][15]['formtype']    = 'yesno';
$modversion['config'][15]['valuetype']   = 'int';
$modversion['config'][15]['default']     = 1;

$modversion['config'][16]['name']        = 'ss_thumbnail_size';
$modversion['config'][16]['title']       = '_MI_GAFEEDS_SS_THUMBNAIL';
$modversion['config'][16]['description'] = '_MI_GAFEEDS_SS_THUMBNAIL_DSC';
$modversion['config'][16]['formtype']    = 'select';
$modversion['config'][16]['valuetype']   = 'text';
$modversion['config'][16]['default']     = 'large';
$modversion['config'][16]['options']     = array(
	'_MI_GAFEEDS_THUMBNAIL_SMALL'  => 'small',
	'_MI_GAFEEDS_THUMBNAIL_MEDIUM' => 'medium',
	'_MI_GAFEEDS_THUMBNAIL_LARGE'  => 'large',
);

$modversion['config'][17]['name']        = 'ss_url_random';
$modversion['config'][17]['title']       = '_MI_GAFEEDS_SS_URL_RANDOM';
$modversion['config'][17]['description'] = '_MI_GAFEEDS_SS_URL_RANDOM_DSC';
$modversion['config'][17]['formtype']    = 'yesno';
$modversion['config'][17]['valuetype']   = 'int';
$modversion['config'][17]['default']     = 1;

?>