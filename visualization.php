<?php
include_once("templates/header.php");
include_once("config/process.php");
?>

<div class="show-container">
<?php include_once("templates/backbtn.php"); ?>

<h1>
    <?=getName($conn,$_GET['id']);?>
</h1>

<p class="default">Telefone:</p>
<p>
    <?=getPhone($conn,$_GET['id']);?>
</p>

<p class="default">Observações</p>
<p>
    <?=getObs($conn,$_GET['id']);?>
</p>

</div>


<?php
include_once("templates/footer.php");
?>