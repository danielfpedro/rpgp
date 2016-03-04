<?= $this->Html->css('../lib/lightbox2/dist/css/lightbox') ?>
<?= $this->Html->script('../lib/lightbox2/dist/js/lightbox') ?>

<input type="hidden" value="<?= $this->Url->build(['controller' => 'PluginsPhotos', 'action' => 'upload']) ?>" id="upload-url">

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <ul class="list-inline">
                <li>
                    <?= $this->Html->link('Releases', ['controller' => 'Versions', 'action' => 'index', $plugin->id]) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-8">
                    <h3><?= $plugin->name ?> <small><span class="glyphicon glyphicon-star-empty"></span></small></h3>
                    <?php if ($lastestVersion): ?>
                        <p class="text-muted"><span class="label label-success">Latest Release</span> <?= $lastestVersion->name ?> | <?= $this->Time->timeAgoInWords($lastestVersion->created) ?></p>    
                    <?php endif ?>
                </div>
                <div class="col-md-4 text-right">
                    <div class="btn-group">
                        <?= $this->Html->link('Baixar última versão', [], ['class' => 'btn btn-danger']) ?>
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                            <ul class="dropdown-menu">
                            <li>
                                <?= $this->Html->link('Ver todas as versions', ['controller' => 'Versions', 'action' => 'index', $plugin->id]) ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php foreach ($plugin->plugins_photos as $photo): ?>
                        <a href="<?= $this->request->webroot . 'files/plugins/photos/d/' . $photo->name ?>" data-lightbox="gallery">
                            <?= $this->Html->image($photo->photoFullPath, ['width' => '80px']) ?>
                        </a>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
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
                    </div>
                </div>
<!--                 <div class="col-md-4 text-right">
                    <?php if ($authUser && $authUser['id'] == $plugin_user_id): ?>
                        <?= $this->Html->link('Edit', ['controller' => 'Plugins', 'action' => 'edit', $plugin->id], ['class' => 'btn btn-default btn-sm']) ?>    
                    <?php endif ?>
                </div> -->
                <div class="col-md-12">
                    <?php if (!$lastestVersion): ?>
                        <div class="alert alert-danger">
                            Este plugin ainda não foi publicado pois não tem nenhum release.
                        </div>
                    <?php endif ?>
                </div>
            </div>

            <?php if ($authData && $authData['id'] == $plugin->user_id): ?>
                <div class="row">
                    <div class="col-md-12">
                        <?= $this->Html->link('Edit Photos', ['controller' => 'Plugins', 'action' => 'photosSettings', $plugin->namespace]) ?>
                    </div>
                </div>
            <?php endif ?>

            <hr>
            <p class="text-muted">
                <?= $plugin->description ?>
            </p>
        </div>
        <div class="col-md-4">
            <?= $this->cell('mainSideMenu') ?>
        </div>
    </div>
</div>