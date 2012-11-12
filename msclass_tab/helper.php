<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

abstract class ModMsclassTabHelper
{
    public static function getItems(&$params)
    {
        $source = JURI::root().$params->get('path_to_xml');
        $result = file_get_contents($source);
        $json = json_decode($result);
        return $json;
    }

    /**
     * load css - javascript file.
     *
     * @param JParameter $params;
     * @param JModule $module
     * @return void.
     */
    public static function loadMediaFiles( $params, $module ){
        $document = &JFactory::getDocument();
        $document->addScript( JURI::root(true). '/modules/'.$module->module.'/assets/MSClass.js' );
        $document->addStyleSheet( JURI::root(true). '/modules/'.$module->module.'/assets/msclass.css' );
    }
}