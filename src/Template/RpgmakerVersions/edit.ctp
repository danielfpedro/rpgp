<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rpgmakerVersion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rpgmakerVersion->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rpgmaker Versions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Plugins'), ['controller' => 'Plugins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plugin'), ['controller' => 'Plugins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rpgmakerVersions form large-9 medium-8 columns content">
    <?= $this->Form->create($rpgmakerVersion) ?>
    <fieldset>
        <legend><?= __('Edit Rpgmaker Version') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
