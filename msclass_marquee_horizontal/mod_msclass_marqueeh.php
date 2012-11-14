<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

require_once(dirname(__FILE__).DS.'helper.php');

// get params
$_target = $params->get('url_target');
$_width = (int)$params->get('slideshow_width');
$_height = (int)$params->get('slideshow_height');
$_msclass_id = $params->get('MSClassID');
$_content_id = $params->get('ContentID');
$_tab_id = $params->get('TabID');
$direction = $params->get('direction');
$step = $params->get('step');
$timer = $params->get('timer');
$delay_time = $params->get('delayTime');
$wait_time = $params->get('waitTime');
$scroll_step = $params->get('scrollStep');
$auto_start = $params->get('AutoStart');
$tab_event = $params->get('TabEvent');
$switch_type = $params->get('switchType');
$limit_desc = $params->get('limit_desc');
$limit_keywords = $params->get('limit_keywords');

$items = ModMsclassMarqueehHelper::getItems($params);

if(!defined("MSCLASS_LIB")){
    ModMsclassMarqueehHelper::loadMediaFiles( $params, $module );
    define('MSCLASS_LIB', true);
}

require JModuleHelper::getLayoutPath('mod_msclass_marqueeh', $params->get('layout', 'default'));
