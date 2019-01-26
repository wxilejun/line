<?php
/**
 * 这是一个typecho开源模板，由喜樂君开源并发布，持有MIT开源协议。<a href="https://wxilejun.github.io">开源程序</a>请遵守协议使用开源模板。
 * 
 * @package line
 * @author 喜樂君
 * @version 1.0
 * @link https://blog.rfq.fun
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<?php while($this->next()): ?>
    <div class="post" style="border: 5px solid #ddd; border-radius: 10px; margin-top: 10px; margin-bottom: 10px; margin-left: 5px; margin-right: 5px; padding: 5px; overflow : hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 10; -webkit-box-orient: vertical; text-overflow: ellipsis;">
	<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
	<div class="entry_data">
	    作者: <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> 日期: <?php $this->date('F j, Y'); ?> 分类: <?php $this->category(','); ?>.
	    <?php $this->commentsNum('%d Comments'); ?>.
	</div>
	<div class="entry_text">
	    <?php $this->content('Continue Reading...'); ?>
	</div>
    </div>
<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>
