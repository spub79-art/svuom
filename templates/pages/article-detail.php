<?php
$slug = SvuomInformaceRepository::slugFromTitle($article['title']);
$date = SvuomInformaceRepository::formatDate($article['issue_date']);
$upload = './prilohy/';
?>
<article class="svuom-page svuom-page--article">
    <p class="svuom-back"><a href="<?php echo SvuomView::e(SvuomUrl::path($lang, '/aktuality')); ?>">← <?php echo $lang === 'en' ? 'All news' : 'Všechny aktuality'; ?></a></p>
    <header>
        <time datetime="<?php echo SvuomView::e($article['issue_date']); ?>"><?php echo SvuomView::e($date); ?></time>
        <h1><?php echo SvuomView::e($article['title']); ?></h1>
    </header>
    <div class="svuom-article-body">
        <?php echo SvuomTopicFormatter::toHtml($article['topic']); ?>
    </div>
    <?php if (!empty($article['pdf']) || !empty($article['pic'])) { ?>
        <div class="svuom-article-attachments">
            <?php if (!empty($article['pdf'])) { ?>
                <a href="<?php echo SvuomView::e($upload . $article['pdf'] . '.pdf'); ?>" target="_blank" rel="noopener">
                    <img src="/images/picpdftr.png" alt="PDF">
                </a>
            <?php } ?>
            <?php if (!empty($article['pic'])) { ?>
                <a href="<?php echo SvuomView::e($upload . $article['pic'] . 'n.jpg'); ?>" target="_blank" rel="noopener">
                    <img src="<?php echo SvuomView::e($upload . $article['pic'] . 's.jpg'); ?>" alt="">
                </a>
            <?php } ?>
        </div>
    <?php } ?>
</article>
