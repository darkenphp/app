<?php
$layout = new class {
    #[\Darken\Attributes\Param]
    public $title;

    #[\Darken\Attributes\Slot]
    public $content;

    public function getYear() : int
    {
        return date('Y');
    }
};
?>
<html>
    <head>
        <title><?= $layout->title ?></title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
        </style>
    </head>
    <body>
        <div style="padding: 10px; background-color: #f0f0f0;">
            <?= $layout->content ?>
        </div>
        <div style="padding: 10px; background-color: #f0f0f0; text-align: center;">
            &copy; <?= $layout->getYear() ?> Darken
        </div>
    </body>
</html>