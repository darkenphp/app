<?php

use App\BlogsData;
use Build\components\Layout;
use Darken\Debugbar\DebugBarConfig;

$page = new class {
    #[\Darken\Attributes\Inject]
    public BlogsData $blogs;

    #[\Darken\Attributes\Inject]
    public DebugBarConfig $debug;

    public function getBlogs()
    {
        $this->debug->message('Fetching blog list');

        $this->debug->start('fetch_blog_list', 'Retrieving blog list');
        $items = $this->blogs->getItems();
        $this->debug->stop('fetch_blog_list');

        return $items;
    }
}
?>
<?php $layout = (new Layout('Blogs'))->openContent(); ?>
    <p>Welcome to the blogs page!</p>
    <?php foreach ($page->getBlogs() as $blog) : ?>
        <a style="padding:20px; border:1px solid #ccc; margin:20px 0px; display:block" href="blogs/<?= $blog['slug']; ?>">
            <h2><?= $blog['title']; ?></h2>
            <p><?= $blog['content']; ?></p>
        </a>
    <?php endforeach; ?>
<?= $layout->closeContent(); ?>