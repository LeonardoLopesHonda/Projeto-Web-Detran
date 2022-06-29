<div class="container py-5">
<?= Sessao::mensagem('carro') ?>
<div class="card">
    <div class="card-header bg-info text-white">
        POSTAGENS  DE CARROS
        <div class="float-right">
            <a href="<?=URL?>carros/cadastrar" class="btn btn-light">Cadastrar</a>
        </div>
    </div>
    <div class="card-body">
        <p>Listagem de carros</p>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="scope="col"">Id</th>
                        <th class="scope="col"">Id usuario</th>
                        <th class="scope="col"">nome</th>
                        <th class="scope="col"">placa</th>
                    </tr>
                </thead>

                <?php if (isset($_SESSION['usuario_id'])) : ?>
                    <?php
                        $data = new Database();
                        $data->query("SELECT * FROM tb_carro");
                        $data->resultado();
                        foreach($data->resultados() as $carro){ ?>
                    <tbody>
                        <tr>
                            <td><?php echo $carro->idtb_carro ?></td>
                            <td><?php echo $carro->usuario_id ?></td>
                            <td><?php echo $carro->nome ?></td>
                            <td><?php echo $carro->placa ?></td>
                        </tr>
                        <?php } ?>
                    <?php else: ?>

                <?php endif; ?>
                </tbody>
            </table>
    </div>
</div>


</div>