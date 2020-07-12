<?php
// $Id: modinfo.php,v 1.3 2007/07/20 11:36:15 ohwada Exp $

// 2007-07-19 K.OHWADA
// thumbnail_size

//=========================================================
// Google Ajax Feeds Module
// 2007-06-23 K.OHWADA
//=========================================================

// module name
define('_MI_GAFEEDS_NAME','Google Ajax Feeds');
define('_MI_GAFEEDS_DESC','Show RSS feeds using Google Ajax Feeds API');

// sub menu
define('_MI_GAFEEDS_SMNAME_FEEDS','RSS Feeds');
define('_MI_GAFEEDS_SMNAME_SLIDE_SHOW','Slide Show');

// module config
define('_MI_GAFEEDS_API_KEY','Google API Key');
define('_MI_GAFEEDS_API_KEY_DSC', 'Get the API key on <br/> <a href="http://code.google.com/apis//ajaxfeeds/signup.html" target="_blank">Sign up for the Google AJAX Feed API</a> <br />when you use Google Ajax Search <br /><br />For the details of the parameter, see the following <br /><a href="http://code.google.com/apis//ajaxfeeds/documentation/reference.html" target="_blank">Google AJAX Feed API Class Reference</a>');
define('_MI_GAFEEDS_URL', 'URL of URL');
define('_MI_GAFEEDS_URL_DSC',  'google.feeds.FeedControl - addFeed');
define('_MI_GAFEEDS_LABEL', 'Label');
define('_MI_GAFEEDS_LABEL_DSC',  'google.feeds.FeedControl - addFeed');
define('_MI_GAFEEDS_URL_1',   _MI_GAFEEDS_URL.' 1');
define('_MI_GAFEEDS_LABEL_1', _MI_GAFEEDS_LABEL.' 1');
define('_MI_GAFEEDS_URL_2',   _MI_GAFEEDS_URL.' 2');
define('_MI_GAFEEDS_LABEL_2', _MI_GAFEEDS_LABEL.' 2');
define('_MI_GAFEEDS_URL_3',   _MI_GAFEEDS_URL.' 3');
define('_MI_GAFEEDS_LABEL_3', _MI_GAFEEDS_LABEL.' 3');
define('_MI_GAFEEDS_DRAW_MODE','Draw Mode');
define('_MI_GAFEEDS_DRAW_MODE_DSC','google.feeds.FeedControl - draw');
define('_MI_GAFEEDS_DRAW_MODE_LINEAR','Linear');
define('_MI_GAFEEDS_DRAW_MODE_TABBED','Tabbed');
define('_MI_GAFEEDS_SS_URL', '[Slide Show] Url of RSSL');
define('_MI_GAFEEDS_SS_URL_DSC',  'GFslideShow');
define('_MI_GAFEEDS_SS_NUM', '[Slide Show] Number of Photos');
define('_MI_GAFEEDS_SS_NUM_DSC',  'GFslideShow - numResults');
define('_MI_GAFEEDS_SS_DISPLAY', '[Slide Show] Display Time (m sec)');
define('_MI_GAFEEDS_SS_DISPLAY_DSC',  'GFslideShow - displayTime');
define('_MI_GAFEEDS_SS_TRANSITION', '[Slide Show] Tansition Time (m sec)');
define('_MI_GAFEEDS_SS_TRANSITION_DSC',  'GFslideShow - transitionTime');
define('_MI_GAFEEDS_SS_SCALE', '[Slide Show] Scale Image');
define('_MI_GAFEEDS_SS_SCALE_DSC',  'GFslideShow - scaleImages');
define('_MI_GAFEEDS_SS_TARGET', '[Slide Show] Link Traget');
define('_MI_GAFEEDS_SS_TARGET_DSC',  'GFslideShow - LinkTarget');

// 2007-07-19
define('_MI_GAFEEDS_SS_TITLE', '[Slide Show] Titl');
define('_MI_GAFEEDS_SS_THUMBNAIL', '[Slide Show] Thumbnail Size');
define('_MI_GAFEEDS_SS_THUMBNAIL_DSC',  'GFslideShow - THUMBNAILS_xxx <br/>There are more thumbnail tags, assumes the small order, and chooses in turn.');
define('_MI_GAFEEDS_THUMBNAIL_SMALL',  'small');
define('_MI_GAFEEDS_THUMBNAIL_MEDIUM', 'medium');
define('_MI_GAFEEDS_THUMBNAIL_LARGE',  'large');
define('_MI_GAFEEDS_SS_URL_RANDOM', '[Slide Show] Add Random number in URL');
define('_MI_GAFEEDS_SS_URL_RANDOM_DSC',  'In GFslideShow, I guess the same photos are showing because images are cached.<br />When No, images are cached.<br />When Yes, add Random number in URL, by the purpose GFslideShow mistakes that another URL is specified and becomes invalid cached images.<br />There are some RSS which can not be used.');

?>