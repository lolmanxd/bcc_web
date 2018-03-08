<?php
    echo $this->Form->create();
    ?>
    <div class="container">
    <?php
        echo $this->Form->input('login',['class' => 'form-control']);
        echo $this->Form->input('password',['class' => 'form-control']);
        echo $this->Form->button('Entrar',['class'=> 'btn btn-primary']);
        echo $this->Html->Link('Registrar',['controller' => 'users', 'action' => 'cadastro']); 
    ?> 
    </div>
    <?php
    echo $this->Form->end();

?>