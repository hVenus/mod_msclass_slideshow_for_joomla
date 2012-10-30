<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

require_once(dirname(__FILE__).DS.'helper.php');

// get params
$_target = $params->get('url_target');
$_width = (int)$params->get('slideshow_width');
$_height = (int)$params->get('slideshow_height');
$xml_file = $params->get('path_to_xml');
$path_to_xml = JPATH_BASE.DS.$xml_file;
if(is_file($path_to_xml)){
    $_xml = file_get_contents($path_to_xml);
    // get slide show images
    $items = ModMsclassHelper::getItems($_xml);
}else{
    $_xml = false;
    $items = false;
}


ModMsclassHelper::loadMediaFiles( $params, $module );

require JModuleHelper::getLayoutPath('mod_msclass', $params->get('layout', 'default'));
