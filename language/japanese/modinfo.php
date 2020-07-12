<?php
// $Id: modinfo.php,v 1.3 2007/07/20 11:36:15 ohwada Exp $

// 2007-07-19 K.OHWADA
// thumbnail_size

//=========================================================
// Google Ajax Feeds Module
// 2007-06-23 K.OHWADA
// EUC-JP 有朋自遠方来
//=========================================================

// module name
define('_MI_GAFEEDS_NAME','Google Ajax Feeds');
define('_MI_GAFEEDS_DESC','Google Ajax Feeds API を利用して RSS を表示する');

// sub menu
define('_MI_GAFEEDS_SMNAME_FEEDS','RSS Feeds');
define('_MI_GAFEEDS_SMNAME_SLIDE_SHOW','スライドショー');

// module config
define('_MI_GAFEEDS_API_KEY','Google API Key');
define('_MI_GAFEEDS_API_KEY_DSC', 'Google Ajax  Feeds を利用する場合は <br /> <a href="http://code.google.com/apis/ajaxfeeds/signup.html" target="_blank">Sign up for the Google AJAX Feed API</a> <br /> にて <br /> API key を取得してください<br /><br />パラメータの詳細は下記をご覧ください<br /><a href="http://code.google.com/apis/ajaxfeeds/documentation/reference.html" target="_blank">Google AJAX Feed API Class Reference</a>');
define('_MI_GAFEEDS_URL', 'RSS の URL');
define('_MI_GAFEEDS_URL_DSC',  'google.feeds.FeedControl - addFeed');
define('_MI_GAFEEDS_LABEL', 'タイトル');
define('_MI_GAFEEDS_LABEL_DSC',  'google.feeds.FeedControl - addFeed');
define('_MI_GAFEEDS_URL_1',   _MI_GAFEEDS_URL.' 1');
define('_MI_GAFEEDS_LABEL_1', _MI_GAFEEDS_LABEL.' 1');
define('_MI_GAFEEDS_URL_2',   _MI_GAFEEDS_URL.' 2');
define('_MI_GAFEEDS_LABEL_2', _MI_GAFEEDS_LABEL.' 2');
define('_MI_GAFEEDS_URL_3',   _MI_GAFEEDS_URL.' 3');
define('_MI_GAFEEDS_LABEL_3', _MI_GAFEEDS_LABEL.' 3');
define('_MI_GAFEEDS_DRAW_MODE','表示形式');
define('_MI_GAFEEDS_DRAW_MODE_DSC','google.feeds.FeedControl - draw');
define('_MI_GAFEEDS_DRAW_MODE_LINEAR','縦形式: Linear');
define('_MI_GAFEEDS_DRAW_MODE_TABBED','タブ形式: Tabbed');

define('_MI_GAFEEDS_SS_URL', '[Slide Show] スライドショー の RSS の URL');
define('_MI_GAFEEDS_SS_URL_DSC',  'GFslideShow');
define('_MI_GAFEEDS_SS_NUM', '[Slide Show] 表示する枚数');
define('_MI_GAFEEDS_SS_NUM_DSC',  'GFslideShow - numResults');
define('_MI_GAFEEDS_SS_DISPLAY', '[Slide Show] 表示する時間 (ミリ秒)');
define('_MI_GAFEEDS_SS_DISPLAY_DSC',  'GFslideShow - displayTime');
define('_MI_GAFEEDS_SS_TRANSITION', '[Slide Show] 遷移する時間 (ミリ秒)');
define('_MI_GAFEEDS_SS_TRANSITION_DSC',  'GFslideShow - transitionTime');
define('_MI_GAFEEDS_SS_SCALE', '[Slide Show] 画像サイズの自動調整');
define('_MI_GAFEEDS_SS_SCALE_DSC',  'GFslideShow - scaleImages');
define('_MI_GAFEEDS_SS_TARGET', '[Slide Show] 画像へのリンク');
define('_MI_GAFEEDS_SS_TARGET_DSC',  'GFslideShow - LinkTarget');

// 2007-07-19
define('_MI_GAFEEDS_SS_TITLE', '[Slide Show] タイトル');
define('_MI_GAFEEDS_SS_THUMBNAIL', '[Slide Show] サムネイルのサイズ');
define('_MI_GAFEEDS_SS_THUMBNAIL_DSC',  'GFslideShow - THUMBNAILS_xxx <br/>サムネイルが複数ある場合、 小さい順から並んでいるとみなし、その順に選択する');
define('_MI_GAFEEDS_THUMBNAIL_SMALL',  '小: small');
define('_MI_GAFEEDS_THUMBNAIL_MEDIUM', '中: medium');
define('_MI_GAFEEDS_THUMBNAIL_LARGE',  '大: large');
define('_MI_GAFEEDS_SS_URL_RANDOM', '[Slide Show] URL に乱数を付加する');
define('_MI_GAFEEDS_SS_URL_RANDOM_DSC',  'GFslideShow では、画像がキャッシュされて同じ画像が表示されるようです<br />「いいえ」では、画像はキャッシュされます<br />「はい」では、URLに乱数を付加します。GFslideShow は別のURLが指定されたと思い、キャシュを無効にします<br />利用されるサービスによっては使用できません');

?>