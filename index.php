<?php
include_once("templates/header.php");
include_once("config/process.php");
?>

<h1>Minha Agenda</h1>

<table>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($contacts as $contact):
         ?>
         <tr>
        <td class="identification">  <?=$contact['id']?>  </td>
        <td>  <?=$contact['name']?>  </td>
        <td>  <?=$contact['phone']?>  </td>
        <td>
            <a href="<?=$base_url?>visualization.php?id=<?=$contact['id']?>">
                <span class="material-symbols-outlined" id="eye">
                visibility
                </span>
            </a>
            <a href="<?=$base_url?>edit.php?id=<?=$contact['id']?>">
                <span class="material-symbols-outlined" id="pencil">
                edit_note
                </span>
            </a>
            <span class="material-symbols-outlined" id="x">
            close
            </span>
        </td>
        </tr>
        <?php endforeach?>


    </tbody>
</table>

<?php
include_once("templates/footer.php");
?>