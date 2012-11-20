<?php if($_xml === false):?>
<div id="slideshow-container">
    <p>xml file (<?php echo $xml_file;?>) was not found.</p>
</div>
<?php elseif(!$items):?>
<div id="slideshow-container">
    <p>slideshow item was not found.</p>
</div>
<?php else:?>
<style type="text/css">

    .hot-banner{width:<?php echo $_width;?>px;height:<?php echo $_height;?>px;border-left:1px solid #d8d8d8;border-right:1px solid #d8d8d8;border-bottom:1px solid #d8d8d8;background-color:#f6f6f6;overflow:hidden;}
    .hot-banner .hot-banner-wrapper{margin-top:5px;margin-left:15px;}
    .hot-banner .hot-banner-wrapper a{float:left;display:block;overflow:hidden;width:<?php echo $logo_width;?>px;height:<?php echo $logo_height;?>px;margin-right:8px;}

</style>
<div  class="hot-banner">
    <div id="<?php echo $_msclass_id;?>" class="hot-banner-wrapper" style="overflow: hidden; width: <?php echo $wrapper_width;?>px; height: <?php echo $wrapper_height;?>px; position: static; visibility: visible; top: 0px;">
        <ul id="<?php echo $_content_id;?>" class="msclass-content" style="padding: 0px; border: 0px; font-size: 0px; line-height: 1.15; display: inline-block; margin: 0px; list-style: none; width: 936px; height: 30px;">
            <?php foreach($items as $item):?>
            <li class="show">
                <a href="<?php echo $item->url;?>" title="<?php echo $item->title;?>" target="<?php echo $_target;?>">
                    <img width="<?php echo $logo_width;?>" height="<?php echo $logo_height;?>" src="<?php echo $item->image;?>" />
                </a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>

<script type="text/javascript">
    new Marquee(
	{
		MSClassID :  "<?php echo $_msclass_id;?>",
		ContentID :  "<?php echo $_content_id;?>",
		Direction : <?php echo $direction;?>,
		Step : <?php echo $step;?>,
		Width : <?php echo $wrapper_width;?>,
		Height : <?php echo $wrapper_height;?>,
		Timer : <?php echo $timer;?>,
		DelayTime : <?php echo $delay_time;?>,
		WaitTime : <?php echo $wait_time;?>,
		ScrollStep: <?php echo $scroll_step;?>,
        SwitchType: <?php echo $switch_type;?>,
		AutoStart : <?php echo $auto_start;?>
	});
</script>
<?php endif;?>