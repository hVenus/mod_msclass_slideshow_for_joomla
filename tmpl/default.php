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
    #slideshow-container { width:<?php echo $_width;?>px; height:<?php echo $_height;?>px; position:relative; }
    #slideshow-container img { width:<?php echo $_width;?>px; height:<?php echo $_height;?>px; display:block; position:absolute; top:0; left:0; z-index:1; }
    .toc { position:absolute; left:0; bottom:20px; z-index:2; display:block; width:20px; background:#6D84B4; color:#fff; text-align:center; padding:3px; text-decoration:none; }
    .toc-active{ background:#fff; color:#6D84B4; }
    #next{ position:absolute; bottom:20px; right:20px; z-index:2; display:block; width:20px; background:#6D84B4; color:#fff; text-align:center; padding:3px; text-decoration:none; }
    #previous{ position:absolute; bottom:20px; right:60px; z-index:2; display:block; width:20px; background:#6D84B4; color:#fff; text-align:center; padding:3px; text-decoration:none; }

</style>
<div id="slideshow-container">
    <?php foreach($items as $item):?>
    <?php if($item['url']!=''):?>
    <a href="<?php echo $item['url'];?>" target="<?php echo $_target;?>"><img src="<?php echo $item['image'];?>" alt="" /></a>
    <?php else: ?>
    <img src="<?php echo $item['image'];?>" alt="" />
    <?php endif;?>
    <?php endforeach;?>
</div>
<script type="text/javascript">
    window.addEvent('domready',function() {
        /* settings */
        var showDuration = 3000;
        var container = $('slideshow-container');
        var images = container.getElements('img');
        var currentIndex = 0;
        var interval;
        var toc = [];
        var tocWidth = 20;
        var tocActive = 'toc-active';

        /* new: starts the show */
        var start = function() { interval = show.periodical(showDuration); };
        var stop = function() { $clear(interval); };
        /* worker */
        var show = function(to) {
            images[currentIndex].fade('out');
            toc[currentIndex].removeClass(tocActive);
            images[currentIndex = ($defined(to) ? to : (currentIndex < images.length - 1 ? currentIndex+1 : 0))].fade('in');
            toc[currentIndex].addClass(tocActive);
        };

        /* new: control: table of contents */
        var controlDiv = new Element('div', {
            // 在这里设置元素的所有属性
            'id': 'slideshow_controller',
            'styles': {

            }
        });
        controlDiv.inject(container);
        images.each(function(img,i){
            toc.push(new Element('a',{
                text: i+1,
                href: '#',
                'class': 'toc' + (i == 0 ? ' ' + tocActive : ''),
                events: {
                    click: function(e) {
                        if(e) e.stop();
                        stop();
                        show(i);
                    }
                },
                styles: {
                    left: ((i + 1) * (tocWidth + 10))
                }
            }).inject(controlDiv));
            if(i > 0) { img.set('opacity',0); }
        });

        /* new: control: start/stop on mouseover/mouseout */
        container.addEvents({
            mouseenter: function() { stop(); },
            mouseleave: function() { start(); }
        });

        /* start once the page is finished loading */
        window.addEvent('load',function(){
            start();
        });
    });
</script>
<?php endif;?>