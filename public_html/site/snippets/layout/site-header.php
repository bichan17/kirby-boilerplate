<header class="site-header">
    <a href="<?= $site->url(); ?>"><?= $site->title(); ?></a>
    <nav class="menu">
        <?php foreach ($site->children()->listed() as $subpage): ?>
            <a href="<?= $subpage->url(); ?>"><?= $subpage->title(); ?></a>
        <?php endforeach; ?>
    </nav>
</header>