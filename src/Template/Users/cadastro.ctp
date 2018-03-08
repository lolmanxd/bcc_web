<?php
    echo $this->Form->create($user,['url'=>['controller' => 'users','action' => 'salvar']]);
    echo $this->Form->input('id');
    echo $this->Form->input('login');
    echo $this->Form->input('password');
    echo $this->Form->button('Salvar');
    echo $this->Form->end();

?>