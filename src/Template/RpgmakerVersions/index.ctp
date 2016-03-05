<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rpgmaker Version'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plugins'), ['controller' => 'Plugins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plugin'), ['controller' => 'Plugins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rpgmakerVersions index large-9 medium-8 columns content">
    <h3><?= __('Rpgmaker Versions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rpgmakerVersions as $rpgmakerVersion): ?>
            <tr>
                <td><?= $this->Number->format($rpgmakerVersion->id) ?></td>
                <td><?= h($rpgmakerVersion->name) ?></td>
                <td><?= h($rpgmakerVersion->created) ?></td>
                <td><?= h($rpgmakerVersion->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rpgmakerVersion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rpgmakerVersion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rpgmakerVersion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rpgmakerVersion->id)]) ?>
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
