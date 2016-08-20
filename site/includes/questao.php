<h1 class="page-header">CPA 2016</h1>
<form class="ui form" method="post">

<div class="filed">
    <label>Questão</label>
    <input type="text" name="name" placeholder="Digite um nome">
    <input type="hidden" name="cadastrar">
</div>

<div style="margin-top: 10px;">
    <button class="ui blue button" type="submit"><i class="check green icon"></i>Cadastrar</button>
</div>
</form>

<div class="ui divider"></div>
<h2 style="color: green;"><i class="question icon"></i>Lista de questões cadastradas</h2>

<table width="100%" class="ui table">
    <thead>
        <tr>
            <th>Questão</th>
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
        <tr>
            <td><?php echo $questao->questao ?></td>
            <td>
                <?php if($questao->questao == 0) ?>
                    <button type="button" name="btativo" class="btn btn-default btn-circle">
                        <i class="fa fa-uncheck"></i>
                    </button>
                <?php endif ?>
                <?php if($questao->questao == 1) ?>
                    <button type="button" name="btativo" class="btn btn-default btn-circle">
                        <i class="fa fa-check"></i>
                    </button>
                <?php endif ?>
            </td>
            <td><button class="btn btn-primary">Editar</button></td>
            <td><button class="btn btn-danger">Deletar</button></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
