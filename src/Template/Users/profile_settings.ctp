<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul>
                <li>
                    <?= $this->Html->link('Configurações do perfil', ['controller' => 'User', 'action' => 'profileSettings']) ?>
                </li>
                <li>
                    <?= $this->Html->link('Configurações do perfil', ['controller' => 'User', 'action' => 'accountSettings']) ?>
                </li>
                <li>
                    <?= $this->Html->link('Configurações do perfil', ['controller' => 'User', 'action' => 'passwordSettings']) ?>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <?php
                echo $this->Form->create($user, ['type' => 'file']);
                    echo $this->Form->input('photo', ['type' => 'file']);
                    echo $this->Form->input('name');
                    echo $this->Form->button('Salvar alterações');
                echo $this->Form->end();
            ?>
        </div>
    </div>
</div>