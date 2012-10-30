<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

abstract class ModMsclaaHelper
{
    public static function getItems($_xml_data)
    {
        $return = array();
        $xml = new SimpleXMLElement($_xml_data);
        if($xml->items){
            $i = 0;
            foreach($xml->items->item as $v){
                $return[$i]['image'] = $v->image;
                $return[$i]['url'] = $v->url;
                $i++;
            }
        }
        return $return;
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
        $document->addStyleSheet( JURI::root(true). '/modules/'.$module->module.'/assets/style.css' );
    }
}