<?php
$sucesso = false;
if (isset($_POST['enviar'])) {

    $categoria = new Categoria();
    $categoria->setId($_POST['id']);
}
if (CategoriaController::getInstance()->gravar($categoria)){
    $sucesso = true;
}


if ($sucesso){
    ?>
    <div class="alert alert-primary" role="alert">
        Categoria inserida com sucesso!
    </div>
    <?php
}
?>
