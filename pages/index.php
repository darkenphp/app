<?php
use Build\components\Alert;
use Build\components\Layout;
?>
<?php $layout = (new Layout('Home Page'))->openContent(); ?>
    <h1>Welcome to Darken</h1>
    <p style="margin-bottom: 20px;">
        Darken is a PHP framework that allows you to build web applications using components.
    </p>
    <?= new Alert('Wow, this is amazing?!'); ?>
<?= $layout->closeContent(); ?>