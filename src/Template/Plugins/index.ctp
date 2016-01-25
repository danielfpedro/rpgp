<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Plugin'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Authors'), ['controller' => 'Authors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Authors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="plugins index large-9 medium-8 columns content">
    <h3><?= __('Plugins') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('author_id') ?></th>
                <th><?= $this->Paginator->sort('namespace') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($plugins as $plugin): ?>
            <tr>
                <td><?= $this->Number->format($plugin->id) ?></td>
                <td><?= h($plugin->name) ?></td>
                <td><?= h($plugin->created) ?></td>
                <td><?= h($plugin->modified) ?></td>
                <td><?= $plugin->has('author') ? $this->Html->link($plugin->author->name, ['controller' => 'Authors', 'action' => 'view', $plugin->author->id]) : '' ?></td>
                <td><?= h($plugin->namespace) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $plugin->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $plugin->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $plugin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $plugin->id)]) ?>
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
