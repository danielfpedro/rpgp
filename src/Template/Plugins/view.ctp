<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php if ($authUser): ?>
                <ul class="list-inline">
                    <li>
                        <?= $this->Html->link('Releases', ['controller' => 'Versions', 'action' => 'index', $plugin->id]) ?>
                    </li>
                </ul>
            <?php endif ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-8">
                    <h3><?= $plugin->name ?></h3>
                    <?php if ($lastestVersion): ?>
                        <p class="text-muted"><span class="label label-success">Latest Release</span> <?= $lastestVersion->name ?> | <?= $this->Time->timeAgoInWords($lastestVersion->created) ?></p>    
                    <?php endif ?>
                </div>
                <div class="col-md-4 text-right">
                    <?= $this->Html->link('Edit', ['controller' => 'Plugins', 'action' => 'edit', $plugin->id], ['class' => 'btn btn-default btn-sm']) ?>
                </div>
                <div class="col-md-12">
                    <?php if (!$lastestVersion): ?>
                        <div class="alert alert-danger">
                            Este plugin ainda não foi publicado pois não tem nenhum release.
                        </div>
                    <?php endif ?>
                </div>
            </div>

            <hr>
            <p class="text-muted">
                <?= $plugin->description ?>
            </p>

            <hr>

            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object img-circle" src="<?= $this->request->webroot . $plugin->user->imageFullPath ?>" width="35">
                    </a>
                </div>
                <div class="media-body">
                    <h5 class="media-heading" style="margin-top: 10px;">
                        <?= $this->Html->link($plugin->user->name, ['controller' => 'Users', 'action' => 'view', $plugin->user->username]) ?>
                    </h5>
                </div>
            </div>  
            
        </div>
        <div class="col-md-4">
            <?= $this->cell('mainSideMenu') ?>
        </div>
    </div>
</div>