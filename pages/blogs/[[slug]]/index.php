<?php
use Build\components\Layout;

$page = new class {
    #[Darken\Attributes\RouteParam('slug')]
    public string $slug;
};
?>
<?php $layout = (new Layout('Blog Detail ' . $page->slug))->openContent(); ?>
    <p>Fetching the Blogs from the API for slug <?= $page->slug ?></p>
    <div id="content" style="margin-top:20px; border:1px solid #ccc; padding:20px;">
        Loading...
    </div>
    <script>
        fetch('/blogs/<?= $page->slug ?>/api')
        .then(response => response.json())
        .then(data => {
            document.getElementById('content').innerHTML = `<h1>${data.title}<h1><hr style="margin-bottom:20px;" /><div class="blog-content">${data.content}</div>`;
        });
    </script>
<?= $layout->closeContent(); ?>