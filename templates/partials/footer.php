<footer class="svuom-footer">
    <div class="svuom-footer__inner">
        &copy; SVÚOM s.r.o.
        <?php if ($lang === 'cz') { ?>
            | <a href="<?php echo SvuomView::e(SvuomUrl::path('cz', '/')); ?>">úvod</a>
        <?php } else { ?>
            | <a href="<?php echo SvuomView::e(SvuomUrl::path('en', '/')); ?>">home</a>
        <?php } ?>
    </div>
</footer>
