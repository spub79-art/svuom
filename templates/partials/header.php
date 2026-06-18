<?php
$isHome = isset($layout) && $layout === 'home';
$pathForLangSwitch = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '/';
$pathForLangSwitch = preg_replace('#^/(cz|en)#', '', $pathForLangSwitch);
if ($pathForLangSwitch === '' || $pathForLangSwitch === false) {
    $pathForLangSwitch = '/';
}
?>
<header class="svuom-header<?php echo $isHome ? ' svuom-header--home' : ''; ?>">
    <div id="menutop"><div><?php menutop($lang); ?></div></div>
    <div id="<?php echo $isHome ? 'headerhome' : 'header'; ?>" class="<?php echo $isHome ? 'svuom-headerhome' : 'svuom-header-inner'; ?>">
        <div id="lang" class="svuom-lang">
            <a href="<?php echo SvuomView::e(SvuomUrl::path('en', $pathForLangSwitch)); ?>"><img src="/images/eng.png" alt="English" title="English"></a>
            <a href="<?php echo SvuomView::e(SvuomUrl::path('cz', $pathForLangSwitch)); ?>"><img src="/images/cze.png" alt="Česky" title="Česky"></a>
        </div>
        <div id="search" class="svuom-search">
            <form method="get" action="<?php echo SvuomView::e(SvuomUrl::path($lang, '/hledat')); ?>">
                <input class="inpt" type="search" name="q" value="" placeholder="<?php echo $lang === 'en' ? 'Search' : 'Hledat'; ?>" minlength="3">
                <button type="submit" class="svuom-search-btn"><?php echo $lang === 'en' ? 'Search' : 'Hledat'; ?></button>
            </form>
        </div>
        <div id="logo">
            <a href="<?php echo SvuomView::e(SvuomUrl::path($lang)); ?>" title="<?php echo $lang === 'en' ? 'Home' : 'Úvod'; ?>">
                <img src="/images/logo.png" alt="SVÚOM">
            </a>
        </div>
    </div>
</header>
