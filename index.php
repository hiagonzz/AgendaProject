<?php
include_once ("templates/header.php");
?>
<div class="conteiner">
    <?php if (isset ($printMsg) && $printMsg != ''): ?>
        <p id="msg">
            <?= $printMsg ?>
        </p>
    <?php endif; ?>
    <h1 id="main-title">Minha Agenda</h1>
    <?php if (count($contacts) > 0): ?>
       <table class="table" id="contacts-table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php  foreach($contacts as $contacts): ?>
                <tr>
                    <td scope="row" class="col-id"><?= $contacts["id"] ?></td>
                    <td scope="row"><?= $contacts["name"] ?></td>
                    <td scope="row"><?= $contacts["phone"] ?></td>
                    <td class="actions">
                        <a href="<?= $BASE_URL ?>show.php?id=<?= $contacts["id"] ?>"><i class="fas fa-eye chack-icon"></i></a>
                        <a href="<?= $BASE_URL ?>edit.php?id=<?= $contacts["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                        <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
       </table>
    <?php else: ?>
        <p id="emply-list-text">Ainda não há contatos na sua agenda <a href="<?= $BASE_URL ?>create.php"> Clique aqui para
                adicionar.</a></p>
    <?php endif; ?>
</div>

<?php
include_once ("templates/footer.php");
