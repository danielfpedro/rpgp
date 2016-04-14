<?= $this->Html->css('../lib/lightbox2/dist/css/lightbox') ?>
<?= $this->Html->script('../lib/lightbox2/dist/js/lightbox') ?>

<input type="hidden" value="<?= $this->Url->build(['controller' => 'PluginsPhotos', 'action' => 'upload']) ?>" id="upload-url">

<div class="container container-page">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <h4 style="margin-bottom: 0;">Core</h4>        
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-10">
                    <!-- avatar picture of the vendor -->
                    <?= $this->Html->image('avatar.jpg', ['style' => 'width: 35px', 'class' => 'img-circle']) ?>
                    <!-- vendor name -->
                    <?= $this->Html->link($plugin->user->username, [
                        'controller' => 'Users',
                        'action' => 'view',
                        $plugin->user->username
                    ]) ?>
                    /
                    <!-- name -->
                    <?= $plugin->name ?>
                </div>
                <div class="col-md-2">
                    <?= $this->Html->link($this->Html->icon('star') . ' Stars 312', [
                        'controller' => 'versions',
                        'action' => 'index',
                        $plugin->id
                    ], [
                        'class' => 'btn btn-default btn-block',
                        'escape' => false
                    ]) ?>
                </div>
            </div>

<!--             <hr>

            <div class="row">
                <div class="col-md-6 text-center">
                    <?= $this->Html->faicon('tree') ?> For <strong>RPG Maker MV</strong>
                </div>
                <div class="col-md-6 text-center">
                    <?= $this->Html->faicon('list-ul')?> Category <strong>Core</strong>
                </div>
            </div>
            
            <hr>
 -->

            <hr>
            <div class="row">
                <div class="col-md-12">
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
        <div class="col-md-3 text-center">
            <?= $this->element('plugin_menu') ?>
        </div>
    </div>
</div>