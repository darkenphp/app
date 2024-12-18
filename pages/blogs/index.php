<?php
use Build\components\Layout;
?>
<?php $layout = (new Layout('Home Page'))->openContent(); ?>

Blogs
<?= $layout->closeContent()->render(); ?>