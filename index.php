<?php
/**
 * 简约而行，持续于你们的支持。
 * 
 * @package line
 * @author 喜樂君
 * @version 1.0
 * @link https://blog.yloli.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<!-- 输出文章 -->
<?php while($this->next()): ?>
    <div class="padding">
	<p><a href="<?php $this->permalink() ?>" class="hs hstitle"><?php $this->title() ?> &nbsp; - &nbsp;<?php $this->date('Y / m / d'); ?></a></p>
    </div>
<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>
