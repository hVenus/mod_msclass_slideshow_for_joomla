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
    DL,DT,DD,UL{margin:0;padding:0;}

    A:link {VERTICAL-ALIGN: baseline; TEXT-DECORATION: none}
    A:visited {VERTICAL-ALIGN: baseline; TEXT-DECORATION: none}
    A:hover {TEXT-DECORATION: underline}
    A:link {COLOR: #133db6}
    A:visited {COLOR: #133db6}
    A:hover {COLOR: #133db6}


    #<?php echo $_msclass_id;?> {FLOAT: left; OVERFLOW: hidden; WIDTH: 570px}
    #<?php echo $_content_id;?> .show {FLOAT: left; WIDTH: 570px; HEIGHT:172px;overflow:hidden;PADDING-TOP: 6px}
    #<?php echo $_content_id;?> .pic {PADDING-LEFT: 6px; FLOAT: left}
    #<?php echo $_content_id;?> .pic IMG {BORDER-RIGHT: #e4e4e4 1px solid; BORDER-TOP: #e4e4e4 1px solid; BORDER-LEFT: #e4e4e4 1px solid; WIDTH: 213px; BORDER-BOTTOM: #e4e4e4 1px solid; HEIGHT: 170px}
    #<?php echo $_content_id;?> .txt {PADDING-LEFT: 17px; FLOAT: left; WIDTH: 330px; COLOR: #444}
    #<?php echo $_content_id;?> .hd H3 {FONT-SIZE: 0px; FLOAT: left; PADDING-TOP: 5px}
    #<?php echo $_content_id;?> .hd A {FLOAT: right;font-size:14px;}
    #<?php echo $_content_id;?> .hd .time {PADDING-LEFT: 7px; FLOAT: left; COLOR: #888; PADDING-TOP: 5px;font-size:12px;}
    #<?php echo $_content_id;?> .bd {CLEAR: both; PADDING-TOP: 4px}
    #<?php echo $_content_id;?> .bd DT {PADDING-BOTTOM: 5px}
    #<?php echo $_content_id;?> .bd DD {PADDING-LEFT: 10px; FONT-SIZE: 14px;BACKGROUND: url(images/bg.gif) no-repeat -85px -251px; LINE-HEIGHT: 25px}
    #<?php echo $_content_id;?> .bd A.title {FONT-SIZE: 20px; COLOR: #333; FONT-FAMILY: '黑体'}
    #<?php echo $_content_id;?> .answerer {PADDING-LEFT: 10px; FONT-SIZE: 12px; COLOR: #666}

    #<?php echo $_tab_id;?> {FLOAT: right; BORDER-LEFT: #d6efc7 1px solid; WIDTH: 194px}
    #<?php echo $_tab_id;?> LI {height:21px;PADDING-RIGHT: 0px;line-height:25px; PADDING-LEFT: 29px; FONT-SIZE: 14px; PADDING-BOTTOM: 7px; CURSOR: pointer; COLOR: #327b00; PADDING-TOP: 8px; BORDER-BOTTOM: #d6efc7 1px solid; ZOOM: 1}
    #<?php echo $_tab_id;?> LI:hover {BACKGROUND-COLOR: #e6f4d0}
    #<?php echo $_tab_id;?> .active {PADDING-LEFT: 24px; BORDER-LEFT: #91d550 5px solid; BACKGROUND-COLOR: #e6f4d0;}

</style>
<div style="height:182px;width:790px;border:5px solid #91d550;PADDING-RIGHT: 0px; PADDING-LEFT: 3px; BACKGROUND: #ffffff; PADDING-BOTTOM: 3px; PADDING-TOP: 0px;">
    <div id="<?php echo $_msclass_id;?>" class="msclass-wrap">
        <ul id="<?php echo $_content_id;?>" class="msclass-content">
            <?php foreach($items as $item):?>
            <li class="show">
                <div class="pic">
                    <a href="javascript:void(0)">
                        <img height="170" src="<?php echo $item->image;?>" width="213">
                    </a>
                </div>
                <div class="txt">
                    <div class="hd">
                        <h3>
                            <img height="17" alt="精彩推荐" src="<?php echo JURI::root(true). '/modules/'.$module->module.'/assets/recommand.png';?>" width="59">
                        </h3>
                        <span class="time">2011.05.11</span>
                        <a href="<?php echo $item->url;?>">更多</a>
                    </div>
                    <dl class="bd">
                        <dt><A class="title" href="javascript:void(0)"><?php $item->title;?></A></dt>
                        <dd>
                            <div class="tab-li-desc"><?php $item->desc;?></div>
                            <div class="tab-li-keywords"><?php $item->keywords;?></div>
                        </dd>
                    </dl>
                </div>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
    <ul id="<?php echo $_tab_id;?>">
        <?php foreach($items as $item):?>
        <li><?php echo $item->title;?></li>
        <?php endforeach;?>
    </ul>

</div>

<script type="text/javascript">
    new Marquee(
	{
		MSClassID :  "<?php echo $_msclass_id;?>",
		ContentID :  "<?php echo $_content_id;?>",
		TabID :  "<?php echo $_tab_id;?>",
        TabEvent : "<?php echo $tab_event;?>",
		Direction : <?php echo $direction;?>,
		Step : <?php echo $step;?>,
		Width : <?php echo $_width;?>,
		Height : <?php echo $_height;?>,
		Timer : <?php echo $timer;?>,
		DelayTime : <?php echo $delay_time;?>,
		WaitTime : <?php echo $wait_time;?>,
		ScrollStep: <?php echo $scroll_step;?>,
        SwitchType: <?php echo $switch_type;?>,
		AutoStart : 1
	});
</script>
<?php endif;?>