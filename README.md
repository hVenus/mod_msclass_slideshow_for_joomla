mod_slideshow_joomla

这是一个用于joomla!的前台图片轮播模块

特点：
*XML配置文件
*可设置区块大小
*可设置图片链接
*轮播的控制按钮，可随意切换到不同的内容。
*鼠标事件,鼠标经过停止轮播。

System request: joomla 2.5 and up.

Install:
1，下载zip文件，到joomla的“扩展管理”里安装本模块。
2，到“模块管理”里配置本模块。该填的都填上。
3，编写XML文件，用于为模块提供显示所需的内容。
4，刷新前台页面，查看最终效果。

XML格式：
<?xml version="1.0" encoding="utf-8"?>
<slideshow>
	<items>
		<item>
			<image>slideshow/3.jpg</image>
			<url>http://www.zzzz.com/</url>
		</item>
		<item>
			<image>slideshow/1.jpg</image>
			<url>http://www.xxxx.com/</url>
		</item>
		<item>
			<image>slideshow/2.jpg</image>
			<url>http://www.yyyy.com/</url>
		</item>
	</items>
</slideshow>
这里的slideshow/3.jpg是相对路径。
例如网站地址是：http://www.yoursite.com/，那么实际的图片地址就是：http://www.yoursite.com/slideshow/3.jpg。


==END==
