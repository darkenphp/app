<?php
$layout = new class {
    
    #[\Darken\Attributes\ConstructorParam]
    public $title;

    #[\Darken\Attributes\Slot]
    public $content;

    public function getYear() : int
    {
        return date('Y');
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $layout->title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
    <div class="container">
        <nav>
            <div class="logo">Darken</div>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/blogs">Blogs</a></li>
            </ul>
        </nav>
        <div class="content">
            <?= $layout->content; ?>
        </div>
        <footer style="padding: 15px 40px; text-align: center; color: #cccccc; font-size: 0.9rem;">
            &copy; <?= $layout->getYear(); ?> Darken. All rights reserved.
        </footer>
    </div>
</body>
</html>
