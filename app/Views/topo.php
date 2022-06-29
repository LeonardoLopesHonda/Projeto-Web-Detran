<header class="bg-dark top-0" id="topo">
    <div class="ml-8">
        <nav class="navbar navbar-expand-sm navbar-dark" id="logo">
            <a class="navbar-brand" href="<?=URL?>">WEB 2</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" id="direcionadores">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>" data-tooltip="tooltip" title="Página Inicial">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>" data-tooltip="tooltip" title="Sobre nós">Sobre nós</a>
                    </li>
                
                
                <?php if (isset($_SESSION['usuario_id'])) : ?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>carros/cadastrar" data-tooltip="tooltip" title="Carros">Carros</a>
                    </li>
                </ul>

                    <span class="navbar-text span ">
                    <p>Olá, <?= $_SESSION['usuario_nome'] ?>, Seja bem-vindo!!</p> 
                    <a class="btn btn-sm btn-danger" href="<?= URL ?>usuarios/sair" data-tooltip="tooltip" title="Sair do Sistema">Sair</a>
                    </span>
                <?php else : ?>
                </ul>
                    <span class="navbar-text span2">
                        <a class="btn btn-info" href="<?= URL ?>usuarios/cadastrar" data-tooltip="tooltip" title="Não tem uma conta? Cadastre-se">Cadastre-se</a>
                        <a class="btn btn-info" href="<?= URL ?>usuarios/login" data-tooltip="tooltip" title="Tem uma conta? Faça login">Entrar</a>
                    </span>
                <?php endif; ?>

            </div>
        </nav>
    </div>
</header>