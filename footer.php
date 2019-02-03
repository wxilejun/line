<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('theme &nbsp; <a href="https://blog.yloli.cn">line</a><br><a href="http://www.typecho.org">Typecho</a>'); ?>.
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>
</html>
