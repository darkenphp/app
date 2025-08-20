<?php
$alert = new class {

    #[Darken\Attributes\ConstructorParam(name: 'message', order: 1)]
    public string $message;
}
?>
<div style="padding: 20px; background-color: green; color:white; border-radius: 20px;">
    <?= $alert->message ?>
</div>