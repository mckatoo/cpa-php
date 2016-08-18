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
            <th>Avaliação</th>
            <th>Email</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $questao = new Acme\Models\QuestaoProfModel;
        $questaos = $questao->read();
            foreach($questaos as $questao):
        ?>
        <tr>
            <td><?php echo $questao->name; ?></td>
            <td><?php echo $questao->email; ?></td>
            <td><button class="ui green button"><i class="edit icon"></i>Editar</button></td>
             <td><button class="ui red button"><i class="remove icon"></i>Deletar</button></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
