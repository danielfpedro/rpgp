<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?= $this->Form->create($version) ?>
                <?php
                    echo $this->Form->input('name');
                    echo $this->Form->input('description');
                    echo $this->Form->input('plugin_id', ['type' => 'hidden']);
                ?>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>