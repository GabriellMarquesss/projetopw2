<?php
//singleton
//insert into cliente (nome, telefone, email, endereco) values ('renato', '64992481630', 'renato.abreu@ifg.edu.br', 'Rua x Ny')
$sucesso = false;
if (isset($_POST['enviar'])){

    $produto = new Produto();
    $produto->setNome($_POST['nome']);
    $produto->setDescricao($_POST['descricao']);
    $produto->setValor($_POST['valor']);
    $produto->setImagem(md5 ($_POST['imagem']));

    if (UsuarioController::getInstance()->inserir($produto)){
        $sucesso = true;
    }
}

if ($sucesso){
    ?>
    <div class="alert alert-primary" role="alert">
        Produto inserido com sucesso!
    </div>
    <?php
}
?>
