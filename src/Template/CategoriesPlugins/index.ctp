<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Categories Plugin'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plugins'), ['controller' => 'Plugins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plugin'), ['controller' => 'Plugins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoriesPlugins index large-9 medium-8 columns content">
    <h3><?= __('Categories Plugins') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('category_id') ?></th>
                <th><?= $this->Paginator->sort('plugin_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoriesPlugins as $categoriesPlugin): ?>
            <tr>
                <td><?= $categoriesPlugin->has('category') ? $this->Html->link($categoriesPlugin->category->name, ['controller' => 'Categories', 'action' => 'view', $categoriesPlugin->category->id]) : '' ?></td>
                <td><?= $categoriesPlugin->has('plugin') ? $this->Html->link($categoriesPlugin->plugin->name, ['controller' => 'Plugins', 'action' => 'view', $categoriesPlugin->plugin->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $categoriesPlugin->category_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoriesPlugin->category_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoriesPlugin->category_id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriesPlugin->category_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
