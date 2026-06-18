<article class="svuom-page svuom-page--404">
    <h1><?php echo $lang === 'en' ? 'Page not found' : 'Stránka nenalezena'; ?></h1>
    <p><a href="<?php echo SvuomView::e(SvuomUrl::path($lang)); ?>"><?php echo $lang === 'en' ? 'Back to home' : 'Zpět na úvod'; ?></a></p>
</article>
