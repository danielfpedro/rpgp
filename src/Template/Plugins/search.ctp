<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3>'<?= h($this->request->query('q')) ?>'</h3>

            <hr>
            
            <?php foreach ($plugins as $plugin): ?>
                <div>
                    <h4>
                        <?= $this->Html->link($plugin->name, ['controller' => 'Plugins', 'action' => 'view', $plugin->slug]) ?>
                    </h4>
                    <?= $this->Html->link($plugin->user->name, ['controller' => 'Users', 'action' => 'view', $plugin->user->username]) ?>
                    <p class="muted"><?= $plugin->description ?></p>
                    <hr>
                </div>
            <?php endforeach ?>
            
            <?php if ($this->Paginator->hasPage()): ?>
                <?= $this->Paginator->numbers() ?>    
            <?php endif ?>
            
        </div>
        <div class="col-md-4">
            <?= $this->cell('mainSideMenu') ?>
        </div>
    </div>
</div>