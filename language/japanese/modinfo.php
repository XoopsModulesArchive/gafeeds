<?php
// $Id: modinfo.php,v 1.3 2007/07/20 11:36:15 ohwada Exp $

// 2007-07-19 K.OHWADA
// thumbnail_size

//=========================================================
// Google Ajax Feeds Module
// 2007-06-23 K.OHWADA
// EUC-JP ͭ����������
//=========================================================

// module name
define('_MI_GAFEEDS_NAME','Google Ajax Feeds');
define('_MI_GAFEEDS_DESC','Google Ajax Feeds API �����Ѥ��� RSS ��ɽ������');

// sub menu
define('_MI_GAFEEDS_SMNAME_FEEDS','RSS Feeds');
define('_MI_GAFEEDS_SMNAME_SLIDE_SHOW','���饤�ɥ��硼');

// module config
define('_MI_GAFEEDS_API_KEY','Google API Key');
define('_MI_GAFEEDS_API_KEY_DSC', 'Google Ajax  Feeds �����Ѥ������ <br /> <a href="http://code.google.com/apis/ajaxfeeds/signup.html" target="_blank">Sign up for the Google AJAX Feed API</a> <br /> �ˤ� <br /> API key ��������Ƥ�������<br /><br />�ѥ�᡼���ξܺ٤ϲ���������������<br /><a href="http://code.google.com/apis/ajaxfeeds/documentation/reference.html" target="_blank">Google AJAX Feed API Class Reference</a>');
define('_MI_GAFEEDS_URL', 'RSS �� URL');
define('_MI_GAFEEDS_URL_DSC',  'google.feeds.FeedControl - addFeed');
define('_MI_GAFEEDS_LABEL', '�����ȥ�');
define('_MI_GAFEEDS_LABEL_DSC',  'google.feeds.FeedControl - addFeed');
define('_MI_GAFEEDS_URL_1',   _MI_GAFEEDS_URL.' 1');
define('_MI_GAFEEDS_LABEL_1', _MI_GAFEEDS_LABEL.' 1');
define('_MI_GAFEEDS_URL_2',   _MI_GAFEEDS_URL.' 2');
define('_MI_GAFEEDS_LABEL_2', _MI_GAFEEDS_LABEL.' 2');
define('_MI_GAFEEDS_URL_3',   _MI_GAFEEDS_URL.' 3');
define('_MI_GAFEEDS_LABEL_3', _MI_GAFEEDS_LABEL.' 3');
define('_MI_GAFEEDS_DRAW_MODE','ɽ������');
define('_MI_GAFEEDS_DRAW_MODE_DSC','google.feeds.FeedControl - draw');
define('_MI_GAFEEDS_DRAW_MODE_LINEAR','�ķ���: Linear');
define('_MI_GAFEEDS_DRAW_MODE_TABBED','���ַ���: Tabbed');

define('_MI_GAFEEDS_SS_URL', '[Slide Show] ���饤�ɥ��硼 �� RSS �� URL');
define('_MI_GAFEEDS_SS_URL_DSC',  'GFslideShow');
define('_MI_GAFEEDS_SS_NUM', '[Slide Show] ɽ���������');
define('_MI_GAFEEDS_SS_NUM_DSC',  'GFslideShow - numResults');
define('_MI_GAFEEDS_SS_DISPLAY', '[Slide Show] ɽ��������� (�ߥ���)');
define('_MI_GAFEEDS_SS_DISPLAY_DSC',  'GFslideShow - displayTime');
define('_MI_GAFEEDS_SS_TRANSITION', '[Slide Show] ���ܤ������ (�ߥ���)');
define('_MI_GAFEEDS_SS_TRANSITION_DSC',  'GFslideShow - transitionTime');
define('_MI_GAFEEDS_SS_SCALE', '[Slide Show] �����������μ�ưĴ��');
define('_MI_GAFEEDS_SS_SCALE_DSC',  'GFslideShow - scaleImages');
define('_MI_GAFEEDS_SS_TARGET', '[Slide Show] �����ؤΥ��');
define('_MI_GAFEEDS_SS_TARGET_DSC',  'GFslideShow - LinkTarget');

// 2007-07-19
define('_MI_GAFEEDS_SS_TITLE', '[Slide Show] �����ȥ�');
define('_MI_GAFEEDS_SS_THUMBNAIL', '[Slide Show] ����ͥ���Υ�����');
define('_MI_GAFEEDS_SS_THUMBNAIL_DSC',  'GFslideShow - THUMBNAILS_xxx <br/>����ͥ��뤬ʣ�������硢 �������礫���¤�Ǥ���Ȥߤʤ������ν�����򤹤�');
define('_MI_GAFEEDS_THUMBNAIL_SMALL',  '��: small');
define('_MI_GAFEEDS_THUMBNAIL_MEDIUM', '��: medium');
define('_MI_GAFEEDS_THUMBNAIL_LARGE',  '��: large');
define('_MI_GAFEEDS_SS_URL_RANDOM', '[Slide Show] URL ��������ղä���');
define('_MI_GAFEEDS_SS_URL_RANDOM_DSC',  'GFslideShow �Ǥϡ�����������å��夵���Ʊ��������ɽ�������褦�Ǥ�<br />�֤������פǤϡ������ϥ���å��夵��ޤ�<br />�֤Ϥ��פǤϡ�URL��������ղä��ޤ���GFslideShow ���̤�URL�����ꤵ�줿�Ȼפ������㥷���̵���ˤ��ޤ�<br />���Ѥ���륵���ӥ��ˤ�äƤϻ��ѤǤ��ޤ���');

?>