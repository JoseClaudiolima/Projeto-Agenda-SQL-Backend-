<?php
include_once("config/url.php");
include_once("config/process.php");
include_once("templates/header.php");
?>

<div class="show-container">
    <?php include_once("templates/backbtn.php"); ?>

    <h1>Criar Contato</h1>

    <form action="<?=$base_url?>config/process.php" method="POST">
        <input type="hidden" name="type" value="insert">
        <div>
            <label for="name" class="label-create-edit">Nome do contato:</label>
            <input type="text" name="name" id="nome" class="input-create-edit" placeholder="Digite o nome" required>
        </div>
        <div>
            <label for="phone" class="label-create-edit">Telefone do contato:</label>
            <input type="number" name="phone" id="phone" class="input-create-edit" placeholder="Digite o telefone" required>
        </div>
        <div>
            <label for="obs" class="label-create-edit">Obervações do contato:</label>
            <textarea name="obs" class="obs-create-edit" placeholder="Digite as observações"></textarea>
        </div>
        <input type="submit" value="Cadastrar" class="submit-create-edit">
    </form>
</div>



<?php
include_once("templates/footer.php");
?>