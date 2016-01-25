<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categories Plugin'), ['action' => 'edit', $categoriesPlugin->category_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categories Plugin'), ['action' => 'delete', $categoriesPlugin->category_id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriesPlugin->category_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories Plugins'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categories Plugin'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plugins'), ['controller' => 'Plugins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plugin'), ['controller' => 'Plugins', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoriesPlugins view large-9 medium-8 columns content">
    <h3><?= h($categoriesPlugin->category_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Category') ?></th>
            <td><?= $categoriesPlugin->has('category') ? $this->Html->link($categoriesPlugin->category->name, ['controller' => 'Categories', 'action' => 'view', $categoriesPlugin->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Plugin') ?></th>
            <td><?= $categoriesPlugin->has('plugin') ? $this->Html->link($categoriesPlugin->plugin->name, ['controller' => 'Plugins', 'action' => 'view', $categoriesPlugin->plugin->id]) : '' ?></td>
        </tr>
    </table>
</div>
