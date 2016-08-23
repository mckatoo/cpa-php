<div id="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-question-circle fa-fw"></i> Cadastrar</h2>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <form method="post">
                        <div class="form-group">
                            <label>Questão</label>
                            <input class="form-control" type="text" name="name" placeholder="Digite um nome">
                            <input type="hidden" name="cadastrar">
                        </div>
                        <button class="btn btn-primary" type="submit">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
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
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
<!-- /#page-wrapper -->
