<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categoriesPlugin->category_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categoriesPlugin->category_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Categories Plugins'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plugins'), ['controller' => 'Plugins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plugin'), ['controller' => 'Plugins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoriesPlugins form large-9 medium-8 columns content">
    <?= $this->Form->create($categoriesPlugin) ?>
    <fieldset>
        <legend><?= __('Edit Categories Plugin') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
