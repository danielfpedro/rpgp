<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?= $this->Form->create($plugin) ?>
                <?php
                    echo $this->Form->input('name');
                    echo $this->Form->input('namespace');
                    echo $this->Form->input('description');
                    echo $this->Form->input('tags');
                    echo $this->Form->input('category_id');
                ?>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>