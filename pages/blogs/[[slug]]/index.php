<?php
$page = new class {
    #[Darken\Attributes\RouteParam('slug')]
    public string $slug;
};
?>

<h1>Resolved Slug: <?= $page->slug ?></h1>
<div id="content">
    loading blogs from api
</div>

<script>
    document.getElementById('content').innerText = 'Loading...';
    fetch('/blogs/<?= $page->slug ?>/api')
        .then(response => response.json())
        .then(data => {
            document.getElementById('content').innerText = `Async from the Api: ${data.slug} with time ${data.time}`;
        });
</script>