<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Curso</th>
            <th>Matricula</th>
            <th>Periodo</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        <?php 
        foreach ($alunos as $aluno ) {
        ?>
        <tr>
            <td><?= $aluno['nome'] ?></td>
            <td><?= $aluno['sobrenome'] ?></td>
            <td><?= $aluno['curso'] ?></td>
            <td><?= $aluno['matricula'] ?></td>
            <td><?= $aluno['periodo'] ?></td>
            <td><?php
            echo $this->html->link('Editar',['controller' =>'alunos','action' =>'editar', $aluno['matricula']]);
            echo $this->Form->postLink('Deletar',['controller' =>'alunos','action' =>'deletar', $aluno['matricula']],['confirm' =>'Voce deseja mesmo apagar o aluno '. $aluno['nome'] .' ?']);
            ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
   echo $this->Html->Link('Novo Aluno',['controller' => 'alunos', 'action' => 'cadastrarAluno']);
?>