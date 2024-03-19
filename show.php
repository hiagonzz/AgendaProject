<?php
include_once ("templates/header.php");
?>
<div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.html");?>
    <h1 id="main-title"><?= $contacts["name"] ?></h1>
    <p class="bold">Telefone:</p>
    <p><?= $contacts["phone"] ?></p>
    <p class="bold">Observações:</p>
    <p><?= $contacts["observations"] ?></p>
</div>

<?php
include_once ("templates/footer.php");
?>