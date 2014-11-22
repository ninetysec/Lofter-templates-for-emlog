<?php 
/*
* 底部信息
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div class="g-doc box">
<div class="g-bd">	
<div class="m-cprt">
	<a>友情链接：</a>
	<?php {global $CACHE;$link_cache = $CACHE->readCache('link');?>
	<?php foreach($link_cache as $value): ?>
	<a href="<?php echo $value['url']; ?>" title="<?php echo $value['des']; ?>" target="_blank"><?php echo $value['link']; ?></a> 
	<?php endforeach; ?>
	<?php }?>
	</br>
	<span style="cursor:pointer;" title="Copyright">&copy;&nbsp;2014</span>
	<a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a>
	<a href="#" style="float:right" id="roll_top">Top</a>
	<?php echo $footer_info; ?> 
</div>
<script type="text/javascript">
$(function(){
	$(".active a").each(function(){	
		$(this).hover(
			function(){
				$(this).css("cursor","pointer");
				$(this).stop();
		   		$(this).animate({width:90},400,function(){$(this).children(".title").css("display","block");})},
			function(){
				$(this).stop();	
				$(this).children(".title").css("display","none");
				$(this).animate({width:20},400)})
	})
});
</script>
<?php echo $footer_info; ?>
<?php doAction('index_footer'); ?>
</div>
</div>
</div>
</body>
</html>
