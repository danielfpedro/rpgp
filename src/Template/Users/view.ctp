<div class="container container-page">
    <div class="row">
        <div class="col-md-8">
            <h3>
                <?= $this->Html->image('avatar.jpg', ['style' => 'width: 35px', 'class' => 'img-circle']) ?>
                <?= $user->username ?>
            </h3>
            <hr>
            <?php foreach ($plugins as $plugin): ?>
                <?= $this->element('box_plugin', ['plugin' => $plugin]) ?>
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