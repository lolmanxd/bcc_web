<?php
    echo $this->Form->create();
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <?= $this->Form->input('login',['class' => 'form-control']); ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('password',['class' => 'form-control']); ?>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <?= $this->Form->button('Entrar',['class'=> 'btn btn-primary']); ?>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    echo $this->Form->end();

?>