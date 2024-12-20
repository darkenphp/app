<?php

use App\BlogsData;
use Build\components\Layout;

$page = new class {
    #[\Darken\Attributes\Inject]
    public BlogsData $blogs;
}
?>
<?php $layout = (new Layout('Blogs'))->openContent(); ?>
    <p>Welcome to the blogs page!</p>
    <?php foreach ($page->blogs->getItems() as $blog) : ?>
        <a style="padding:20px; border:1px solid #ccc; margin:20px 0px; display:block" href="blogs/<?= $blog['slug']; ?>">
            <h2><?= $blog['title']; ?></h2>
            <p><?= $blog['content']; ?></p>
        </a>
    <?php endforeach; ?>
<?= $layout->closeContent(); ?>