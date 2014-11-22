<?php 
/*
* 阅读日志页面
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div class="g-doc box">
<div class="g-bd">
    <div class="g-bdc box"> 
        <div class="m-postlst">
            <div class="m-post  m-post-txt  ">
                <div class="postinner">
                    <div class="ct">
                        <div class="ctc box">
                        <h2 class="ttl"><?php topflg($value['top']); ?>
                        <a><?php echo $log_title; ?></a></h2>
                        <div class="txtcont">
                           <p><?php echo $log_content; ?></p><p>
                           <div class="tag"><?php blog_tag($logid); ?></div><div class="sort"><?php blog_sort($logid); ?></div>
                        </div>
                        </div>
                    </div>
                    <div class="infol info box">
                        <span class="icn  icn2  ">&nbsp;</span>
                        <div class="edit">
                        <?php editflg($logid,$author); ?>
                    	</div>
                    </div>
                    <div class="infor info box"> 
                            <a class="date"><?php echo gmdate('Y.n.j G:i', $date); ?></a>
                    </div>
                    </div>
                    <div class="m-pager m-pager-dtl box">
							<a class="next"><?php neighbor_log($neighborLog); ?></a>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
 include View::getView('footer');
?>
