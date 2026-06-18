<?php

require_once __DIR__ . '/../legacy/load-home.php';

$pathForLangSwitch = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$pathForLangSwitch = preg_replace('#^/(cz|en)#', '', $pathForLangSwitch);
if ($pathForLangSwitch === '') {
    $pathForLangSwitch = '/';
}

?>
<!DOCTYPE html>
<html lang="<?php echo SvuomView::e($lang === 'en' ? 'en' : 'cs'); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo SvuomView::e($pageTitle); ?></title>
    <meta name="robots" content="<?php echo SvuomView::e(svuom_robots_meta_content()); ?>">
    <link rel="shortcut icon" href="https://www.svuom.cz/favicon/svuom.ico" type="image/x-icon">
    <link href="/css/layout.css" rel="stylesheet" type="text/css">
    <link href="/css/topic.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/site.css" rel="stylesheet" type="text/css">
</head>
<body class="svuom-site">
<?php include __DIR__ . '/../partials/staging-banner.php'; ?>
<div id="site" class="svuom-wrap">
    <?php include __DIR__ . '/../partials/header.php'; ?>
    <main id="colcontainer" class="svuom-main">
        <?php SvuomView::render($contentTemplate, get_defined_vars()); ?>
    </main>
    <?php include __DIR__ . '/../partials/footer.php'; ?>
</div>
</body>
</html>
