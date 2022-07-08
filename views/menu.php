
<nav>
    <?php
    echo $_SESSION['login-usuario']->getNome();
    ?>
    ?>
    <div class="nav-wrapper cyan">
        <a href="#" class="brand-logo">Delivery 2022</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="list-categoria.php">Lista de Categorias</a></li>
            <li><a href="list-usuario.php">Gerenciar Usuarios</a></li>
            <li><a href="list-produto.php">Lista de Produtos</a></li>
            <li><a href="#">Vendas</a></li>
            <li><a href="list-produto.php">Lista de Produtos</a></li>
        </ul>
    </div>
</nav>
