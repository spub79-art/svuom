<article class="svuom-page svuom-page--articles">
    <h1><?php echo $lang === 'en' ? 'News' : 'Aktuality'; ?></h1>
    <?php if (empty($articles)) { ?>
        <p><?php echo $lang === 'en' ? 'No news yet.' : 'Zatím žádné aktuality.'; ?></p>
    <?php } else { ?>
        <ul class="svuom-articles-list">
            <?php foreach ($articles as $article) {
                $slug = SvuomInformaceRepository::slugFromTitle($article['title']);
                $url = SvuomUrl::article($lang, $article['iid'], $slug);
                $date = SvuomInformaceRepository::formatDate($article['issue_date']);
                ?>
                <li class="svuom-articles-list__item">
                    <time datetime="<?php echo SvuomView::e($article['issue_date']); ?>"><?php echo SvuomView::e($date); ?></time>
                    <h2><a href="<?php echo SvuomView::e($url); ?>"><?php echo SvuomView::e($article['title']); ?></a></h2>
                    <p><?php echo SvuomView::e(SvuomInformaceRepository::excerpt($article['topic'], 260)); ?></p>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>
</article>
