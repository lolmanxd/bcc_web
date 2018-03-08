<?php
    echo $this->form->create($aluno, ['url'=>['controller' => 'alunos', 'action' => 'salva']]);
    echo $this->form->input('nome');
    echo $this->form->input('sobrenome');
    echo $this->form->input('curso');
    echo $this->form->input('matricula');
    echo $this->form->input('periodo');
    echo $this->form->button('Salvar');
    echo $this->form->end();
?>