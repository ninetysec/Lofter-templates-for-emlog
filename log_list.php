<?php 
/*
* 首页日志列表部分
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<?php doAction('index_loglist_top'); ?>
<?php foreach($logs as $value): ?>
<div class="g-doc box">
<div class="g-bd">
    <div class="g-bdc box"> 
        <div class="m-postlst">
            <div class="m-post  m-post-txt  ">
                <div class="postinner">
                    <div class="ct">
                        <div class="ctc box">
                        <h2 class="ttl"><?php topflg($value['top']); ?>
                        <a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h2>
                        <div class="txtcont">
                           <p><?php echo $value['log_description']; ?></p>
                        </div>
                        </div>
                    </div>
                    <div class="infol info box">
                        <span class="icn  icn2  ">&nbsp;</span>
                    </div>
                    <div class="infor info box">
                            <a class="date" href="<?php echo $value['log_url']; ?>"><?php echo gmdate('n.j l', $value['date']); ?></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<div class="g-doc box">
  <div class="g-bd">
    <div class="g-bdc box"> 
		<div class="middle">
			<?php echo $page_url;?>
		</div>
    </div>
  </div>
</div>
<?php
 include View::getView('footer');
?>
