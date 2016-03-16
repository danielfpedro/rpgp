<?= $this->Html->css('../lib/lightbox2/dist/css/lightbox') ?>
<?= $this->Html->script('../lib/lightbox2/dist/js/lightbox') ?>

<input type="hidden" value="<?= $this->Url->build(['controller' => 'PluginsPhotos', 'action' => 'upload']) ?>" id="upload-url">

<div class="container container-page">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12 text-right">
                    <?= $this->Html->link('Stars 312', ['controller' => 'versions', 'action' => 'index', $plugin->id], ['class' => 'btn btn-default']) ?>
                    <div class="btn-group">
                        <?= $this->Html->link('Releases', ['controller' => 'versions', 'action' => 'index', $plugin->id], ['class' => 'btn btn-default']) ?>
                        <?= $this->Html->link('Download v1.0', [], ['class' => 'btn btn-default']) ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3>
                        <?= $this->Html->image('avatar.jpg', ['style' => 'width: 35px', 'class' => 'img-circle']) ?>
                        <?= $this->Html->link($plugin->user->username, [
                            'controller' => 'Users',
                            'action' => 'view',
                            $plugin->user->username
                        ]) ?> / <?= $plugin->name ?>
                        &nbsp;
                        <?= $this->Form->dropdownButton($this->Html->glIcon('pencil') . '&nbsp;Edit', [
                            $this->Html->link('Plugin', '#'),
                            'divider',
                            $this->Html->link('Screenshots', [
                                'controller' => 'PluginsPhotos',
                                'action' => 'edit',
                                $plugin->id
                                ]),
                            ]);
                        ?>
                    </h3>
                    <p class="text-muted">
                        <em><?= $plugin->description ?></em>
                    </p>                    
                </div>
            </div>
            <hr>

            <div class="plugin-thumbs-container">
                <?php foreach ($plugin->plugins_photos as $photo): ?>
                    <a
                        href="<?= $this->request->webroot . $photo->fullPath ?>"
                        data-lightbox="gallery">
                        <img
                            src="<?= $this->request->webroot . $photo->fullPath ?>"
                            class="plugin-thumb">
                    </a>
                <?php endforeach ?>
            </div>

            <hr>

            <p>Readme</p>
        </div>
        <div class="col-md-3">
            <?= $this->element('plugin_menu') ?>
        </div>
    </div>
</div>