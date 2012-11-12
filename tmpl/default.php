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
    #tab_id {FLOAT: right; BORDER-LEFT: #d6efc7 1px solid; WIDTH: 194px}
    #tab_id LI {height:21px;PADDING-RIGHT: 0px;line-height:25px; PADDING-LEFT: 29px; FONT-SIZE: 14px; PADDING-BOTTOM: 7px; CURSOR: pointer; COLOR: #327b00; PADDING-TOP: 8px; BORDER-BOTTOM: #d6efc7 1px solid; ZOOM: 1}
    #tab_id LI:hover {BACKGROUND-COLOR: #e6f4d0}
    #tab_id .active {PADDING-LEFT: 24px; BORDER-LEFT: #91d550 5px solid; BACKGROUND-COLOR: #e6f4d0;}

</style>
<div>
    <div id="<?php echo $_msclass_id;?>" class="msclass-wrap">
        <ul id="<?php echo $_content_id;?>" class="msclass-content">
            <?php foreach($items as $item):?>
            <!--li>
                <?php if($item->url!=''):?>
                <a href="<?php echo $item->url;?>" target="<?php echo $_target;?>"><img src="<?php echo $item->image;?>" alt="<?php $item->alt;?>" title="<?php $item->title;?>" /></a>
                <?php else: ?>
                <img src="<?php echo $item->image;?>" alt="<?php $item->alt;?>" title="<?php $item->title;?>" />
                <?php endif;?>
            </li-->
            <?php endforeach;?>
            <LI class=show>
                <DIV class=pic><A href="javascript:void(0)"><IMG height=170 src="http://joomla/images/wndjs/member/product/65/65_1345355249_6267.jpg" width=213></A></DIV>
                <DIV class=txt>
                    <DIV class=hd>
                        <H3>
                            <IMG height=17 alt=精彩推荐 src="images/recommand.png" width=59></H3><SPAN class=time>2011.05.11</SPAN> <A href="javascript:void(0)">更多</A>
                    </DIV>
                    <DL class=bd>
                        <DT><A class=title href="javascript:void(0)">食品添加剂，安全不安全</A>
                        <DD><A href="javascript:void(0)">食品中为什么要有添加剂？</A> <SPAN class=answerer>碚城饭桶 </SPAN>
                        <DD><A href="javascript:void(0)">常见的食品添加剂有哪些？</A> <SPAN class=answerer>hanchao171</SPAN>
                        <DD><A href="javascript:void(0)">卫生部明文规定不能添加的物质...</A> <SPAN class=answerer>dejinlm </SPAN>
                        <DD><A href="javascript:void(0)">食品添加剂超标的危害？</A> <SPAN class=answerer>5698707</SPAN></DD>
                    </DL>
                </DIV>
            </LI>
            <LI class=show>
                <DIV class=pic><A href="javascript:void(0)"><IMG height=170 src="http://joomla/images/wndjs/member/product/65/65_1345355299_5784.jpg" width=213></A></DIV>
                <DIV class=txt>
                    <DIV class=hd>
                        <H3>
                            <IMG height=17 alt=精彩推荐 src="images/recommand.png" width=59></H3><SPAN class=time>2011.05.10</SPAN> <A href="javascript:void(0)">更多</A>
                    </DIV>
                    <DL class=bd>
                        <DT><A class=title href="javascript:void(0)">悲情的紫金王朝</A>
                        <DD><A href="javascript:void(0)">湖人被横扫是历史上第一次吗？</A> <SPAN class=answerer>墨精武 </SPAN>
                        <DD><A href="javascript:void(0)">“紫金王朝”的称号从何而来？</A> <SPAN class=answerer>殘認的伤害你 </SPAN>
                        <DD><A href="javascript:void(0)">湖人队的历史战绩？</A> <SPAN class=answerer>泰山天魔神</SPAN>
                        <DD><A href="javascript:void(0)">畅聊：湖人怎样重组能再次夺冠...</A> <SPAN class=answerer>知识伯乐</SPAN></DD>
                    </DL>
                </DIV>
            </LI>
            <LI class=show>
                <DIV class=pic><A href="javascript:void(0)"><IMG height=170 src="http://joomla/images/wndjs/member/product/65/65_1345355337_7921.jpg" width=213></A></DIV>
                <DIV class=txt>
                    <DIV class=hd>
                        <H3>
                            <IMG height=17 alt=精彩推荐 src="images/recommand.png" width=59></H3><SPAN class=time>2011.05.09</SPAN> <A href="javascript:void(0)">更多</A>
                    </DIV>
                    <DL class=bd>
                        <DT><A class=title href="javascript:void(0)">嗨朋友，请笑一笑</A>
                        <DD><A href="javascript:void(0)">保持笑容对身体有什么好处？</A> <SPAN class=answerer>刘晓东1974 </SPAN>
                        <DD><A href="javascript:void(0)">标准的笑容是露几颗牙齿？</A> <SPAN class=answerer>凤蛮娘 </SPAN>
                        <DD><A href="javascript:void(0)">古代笑不露齿的传统从何而来？</A> <SPAN class=answerer>姜一尘 </SPAN>
                        <DD><A href="javascript:void(0)">在什么情况下不适宜大笑？</A> <SPAN class=answerer>疯狂答题手 </SPAN></DD>
                    </DL>
                </DIV>
            </LI>
            <LI class=show>
                <DIV class=pic><A href="javascript:void(0)"><IMG height=170 src="http://joomla/images/wndjs/member/product/65/65_1345355372_16727.jpg" width=213></A></DIV>
                <DIV class=txt>
                    <DIV class=hd>
                        <H3>
                            <IMG height=17 alt=精彩推荐 src="images/recommand.png" width=59></H3><SPAN class=time>2011.05.08</SPAN> <A href="javascript:void(0)">更多</A>
                    </DIV>
                    <DL class=bd>
                        <DT><A class=title href="javascript:void(0)">爱意浓浓母亲节</A>
                        <DD><A href="javascript:void(0)">世界上第一个母亲节是何时？</A> <SPAN class=answerer>雨点的声音 </SPAN>
                        <DD><A href="javascript:void(0)">世界各地母亲节都在同一天吗？</A> <SPAN class=answerer>热心网友</SPAN>
                        <DD><A href="javascript:void(0)">中国的母亲花是忘忧草吗？</A> <SPAN class=answerer>梦呓的鱼 </SPAN>
                        <DD><A href="javascript:void(0)">2011最温馨母亲节祝福短信</A> <SPAN class=answerer>yh961202 </SPAN></DD>
                    </DL>
                </DIV>
            </LI>
            <LI class=show>
                <DIV class=pic><A href="javascript:void(0)"><IMG height=170 src="http://joomla/images/wndjs/member/product/65/65_1345355372_19158.jpg" width=213></A></DIV>
                <DIV class=txt>
                    <DIV class=hd>
                        <H3>
                            <IMG height=17 alt=精彩推荐 src="images/recommand.png" width=59></H3><SPAN class=time>2011.05.07</SPAN> <A href="javascript:void(0)">更多</A>
                    </DIV>
                    <DL class=bd>
                        <DT><A class=title href="javascript:void(0)">黄埔军校的风云岁月</A>
                        <DD><A href="javascript:void(0)">黄埔军校是怎样建立的？</A> <SPAN class=answerer>沈连营</SPAN>
                        <DD><A href="javascript:void(0)">孙中山为什么要创建黄埔军校？</A> <SPAN class=answerer>冰火精灵1</SPAN>
                        <DD><A href="javascript:void(0)">为何苏联帮中国建立黄埔军校？</A> <SPAN class=answerer>帝国づ月长石</SPAN>
                        <DD><A href="javascript:void(0)">哪些著名将领毕业于黄埔？</A> <SPAN class=answerer>33867ty33867ty</SPAN></DD>
                    </DL>
                </DIV>
            </LI>

        </ul>
    </div>
    <UL id="tab_id">
        <LI class="active">食品添加剂，安全不安...</LI>
        <LI>悲情的紫金王朝</LI>
        <LI>嗨朋友，请笑一笑</LI>
        <LI>爱意浓浓母亲节</LI>
        <LI>黄埔军校的风云岁月</LI>
    </UL>

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
        SwitchType: <?php echo $switch_type?>,
		AutoStart : 1
	});
</script>
<?php endif;?>