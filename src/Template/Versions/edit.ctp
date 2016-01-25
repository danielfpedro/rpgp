<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $version->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $version->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Versions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Plugins'), ['controller' => 'Plugins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plugin'), ['controller' => 'Plugins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="versions form large-9 medium-8 columns content">
    <?= $this->Form->create($version) ?>
    <fieldset>
        <legend><?= __('Edit Version') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('plugin_id', ['options' => $plugins]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
