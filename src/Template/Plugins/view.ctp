<?= $this->Html->css('../lib/lightbox2/dist/css/lightbox') ?>
<?= $this->Html->script('../lib/lightbox2/dist/js/lightbox') ?>



<input type="hidden" value="<?= $this->Url->build(['controller' => 'PluginsPhotos', 'action' => 'upload']) ?>" id="upload-url">

<div class="container container-page">
    <div class="row">
        <div class="col-md-7">
            <h3>
                <?= $this->Html->link($plugin->user->username, []) ?>/<?= $plugin->name ?> <small><span class="glyphicon glyphicon-star-empty"></span></small>
            </h3>
        </div>
        <div class="col-md-2" style="margin-top: 25px;">
            <div class="btn-group">
                <?= $this->Html->link('Download v 3.4', [], ['class' => 'btn btn-primary']) ?>
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <div class="col-md-9">
            <hr>
            <p class="text-muted">
                <em><?= $plugin->description ?></em>
            </p>

            <hr>

            <p>Fotos</p>

            <hr>

            <p>Readme</p>

        </div>
        <div class="col-md-3">
            <br>
            <div class="row">
                <div class="col-md-12">
                    <?= $this->Html->image('avatar.jpg', ['style' => 'width: 30%', 'class' => 'img-rounded']) ?>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-unstyled">
                        <li>
                            <?= $this->Html->link('Homepage', [])?>
                        </li>
                        <li>
                            <?= $this->Html->link('Youtube', [])?>
                        </li>
                        <li>
                            <?= $this->Html->link('Homepage', [])?>
                        </li>
                    </ul>
                    <hr>
                    <h5><span class="glyphicon glyphicon-link"></span> Dependencies</h5>
                    <ul class="list-unstyled">
                        <li>
                            <?= $this->Html->link('yanfly/core', [])?>
                        </li>
                        <li>
                            <?= $this->Html->link('orange/timestamp', [])?>
                        </li>
                    </ul>
                    <hr>
                    <h5><span class="glyphicon glyphicon-tags"></span> Tags</h5>
                    <ul class="list-unstyled">
                        <li>
                            <?= $this->Html->link('Core', [])?>
                        </li>
                        <li>
                            <?= $this->Html->link('Message', [])?>
                        </li>
                    </ul>
                    <hr>
                    <h5><span class="glyphicon glyphicon-copyright-mark"></span> License</h5>
                    <ul class="list-unstyled">
                        <li>
                            <?= $this->Html->link('MIT', [])?>
                        </li>
                    </ul>
                    <!-- <hr>
                    <?= $this->Html->link('Baixar última versão', [], ['class' => 'btn btn-primary btn-block'])?> -->
                </div>
            </div>
        </div>
    </div>
</div>