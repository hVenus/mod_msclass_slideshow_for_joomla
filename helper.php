<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

class ModSlideshowHelper
{
    public function getItems($_xml_data)
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
}