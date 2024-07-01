<?php
include_once("templates/header.php");
include_once("config/process.php");
?>

<div class="show-container">
    <?php
    include_once("templates/backbtn.php");
    ?>

    <h1>Editar contato</h1>

    <form action="<?=$base_url?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <div class="edit div">
            <label for="name" class="label-create-edit">Nome do contato:</label>
            <input type="text" name="name" id="edit-name" placeholder="Digite o nome" required class="input-create-edit" value="<?=getName($conn,$_GET['id'])?>">
        </div>
        <div class="edit div">
            <label for="phone" class="label-create-edit">Telefone do contato:</label>
            <input type="number" name="phone" id="edit-phone" class="input-create-edit" value="<?=getPhone($conn,$_GET['id'])?>" placeholder="Digite o telefone" required>
        </div>
        <div class="edit div">
            <label for="obs" class="label-create-edit">Observações do contato:</label>
            <textarea name="obs" class="obs-create-edit" placeholder="Digite as observações"><?=getObs($conn,$_GET['id'])?></textarea>
        </div>
        <input type="submit" value="Atualizar" class="submit-create-edit">
    </form>

<?php
include_once("templates/footer.php");
?>