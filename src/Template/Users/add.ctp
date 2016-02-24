<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php
                echo $this->Form->create($user);
                    echo $this->Form->input('email');
                    echo $this->Form->input('username');
                    echo $this->Form->input('name');
                    echo $this->Form->input('password');
                    echo $this->Form->input('password_confirm', ['type' => 'password']);
                    echo $this->Form->button('Criar conta');
                echo $this->Form->end();
            ?>
        </div>
    </div>
</div>