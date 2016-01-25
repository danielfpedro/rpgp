<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php
                echo $this->Form->create($user, ['type' => 'file']);
                    echo $this->Form->input('photo', ['type' => 'file']);
                    echo $this->Form->button('Atualizar foto');
                echo $this->Form->end();
            ?>
        </div>
    </div>
</div>