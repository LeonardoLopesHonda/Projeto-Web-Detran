<div class="col-md-8 mx-auto p-5">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL ?>carros">Carros</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastrar</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header bg-secondary text-white">
            Cadastrar carros
        </div>
        <div class="card-body bg-light">

            <form name="carros" method="POST" action="<?= URL ?>carros/cadastrar" class="mt-4">

                <div class="form-group">
                    <label for="nome">Nome: <sup class="text-danger">*</sup></label>
                    <input type="text" name="nome" id="nome" value="<?= $dados['nome'] ?>" class="form-control <?= $dados['nome_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $dados['nome_erro'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="placa">Placa: <sup class="text-danger">*</sup></label>
                    <input type="text" name="placa" id="placa" value="<?= $dados['placa'] ?>" class="form-control <?= $dados['placa_erro'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?= $dados['placa_erro'] ?>
                    </div>
                </div>
               

                <input type="submit" value="Cadastrar Carro" class="btn btn-info btn-block">


            </form>
        </div>
    </div>
</div>