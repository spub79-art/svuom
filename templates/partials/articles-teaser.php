<section class="svuom-articles-teaser">
    <h2 class="svuom-articles-teaser__title"><?php echo $lang === 'en' ? 'News' : 'Aktuality'; ?></h2>
    <?php if (empty($articles)) { ?>
        <p class="svuom-muted"><?php echo $lang === 'en' ? 'No news yet.' : 'Zatím žádné aktuality.'; ?></p>
    <?php } else { ?>
        <ul class="svuom-articles-teaser__list">
            <?php foreach ($articles as $article) {
                $slug = SvuomInformaceRepository::slugFromTitle($article['title']);
                $url = SvuomUrl::article($lang, $article['iid'], $slug);
                $date = SvuomInformaceRepository::formatDate($article['issue_date']);
                ?>
                <li class="svuom-articles-teaser__item">
                    <time datetime="<?php echo SvuomView::e($article['issue_date']); ?>"><?php echo SvuomView::e($date); ?></time>
                    <h3><a href="<?php echo SvuomView::e($url); ?>"><?php echo SvuomView::e($article['title']); ?></a></h3>
                    <p><?php echo SvuomView::e(SvuomInformaceRepository::excerpt($article['topic'])); ?></p>
                    <p><a href="<?php echo SvuomView::e($url); ?>"><?php echo $lang === 'en' ? 'Read more' : 'Číst dál'; ?> →</a></p>
                </li>
            <?php } ?>
        </ul>
        <p><a href="<?php echo SvuomView::e(SvuomUrl::path($lang, '/aktuality')); ?>"><?php echo $lang === 'en' ? 'All news' : 'Všechny aktuality'; ?> →</a></p>
    <?php } ?>
</section>
