<article class="svuom-page svuom-page--search">
    <h1><?php echo $lang === 'en' ? 'Search' : 'Hledání'; ?></h1>
    <form method="get" action="<?php echo SvuomView::e(SvuomUrl::path($lang, '/hledat')); ?>" class="svuom-search-form">
        <input type="search" name="q" value="<?php echo SvuomView::e($query); ?>" minlength="3" required>
        <button type="submit"><?php echo $lang === 'en' ? 'Search' : 'Hledat'; ?></button>
    </form>
    <p class="svuom-muted"><?php echo $lang === 'en'
        ? 'Full-text search will index pages, news and norms — coming in the next step.'
        : 'Plnotextové hledání přes stránky, aktuality a normy doplníme v dalším kroku.'; ?></p>
</article>
