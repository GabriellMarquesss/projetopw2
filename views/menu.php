<nav>

    <div class="nav-wrapper cyan">
        <a href="#" class="brand-logo">Delivery 2022</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="list-categoria.php">Gerenciar Categorias</a></li>
            <li><a href="list-usuario.php">Gerenciar Usuários</a></li>
            <li><a href="list-produto.php">Gerenciar de Produtos</a></li>
            <li><a href="#">Vendas</a></li>
            <li class="nav-item dropdown">
                <a class="nav-li
                nk dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                    echo $_SESSION['login-usuario']->getNome();
                    ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="verifica-sessao.php?logout=true">Sair</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>