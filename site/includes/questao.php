<h1 class="page-header">CPA 2016</h1>
<form class="ui form" method="post">

<div class="panel form-group">
    <label>Questão</label>
    <input class="form-control" type="text" name="name" placeholder="Digite um nome">
    <input type="hidden" name="cadastrar">
<div class="panel panel-footer panel-footer-m">
    <button class="btn btn-primary" type="submit"><i class="check green icon"></i>Cadastrar</button>
</div>
</div>
</form>

<div class="ui divider"></div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2><i class="fa fa-question-circle fa-fw"></i> Lista de questões cadastradas</h2>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>Questão</th>
                        <th>Ativo</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $questao = new Acme\Models\QuestaoModel;
                    $questaos = $questao->read();
                        foreach($questaos as $questao):
                    ?>
                    <tr class="odd gradeX">
                        <td><?php echo $questao->questao ?></td>
                        <td>
                            <?php if($questao->ativo == 1) {?>
                                <button type="button" name="btativo" class="btn btn-default btn-circle">
                                    <i class="fa fa-check"></i>
                                </button>
                            <?php }else{ ?>
                                <button type="button" name="btativo" class="btn btn-default btn-circle">
                                    <i class="fa fa-uncheck"></i>
                                </button>
                            <?php } ?>
                        </td>
                        <td><button class="btn btn-primary">Editar</button></td>
                        <td><button class="btn btn-danger">Deletar</button></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
