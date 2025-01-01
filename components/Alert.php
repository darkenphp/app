<?php
$alert = new class {

    #[Darken\Attributes\ConstructorParam]
    public string $message;
}
?>
<div style="padding: 20px; background-color: green; color:white; border-radius: 20px;">
    <?= $alert->message ?>
</div>