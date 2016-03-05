<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rpgmaker Version'), ['action' => 'edit', $rpgmakerVersion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rpgmaker Version'), ['action' => 'delete', $rpgmakerVersion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rpgmakerVersion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rpgmaker Versions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rpgmaker Version'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plugins'), ['controller' => 'Plugins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plugin'), ['controller' => 'Plugins', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rpgmakerVersions view large-9 medium-8 columns content">
    <h3><?= h($rpgmakerVersion->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($rpgmakerVersion->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($rpgmakerVersion->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($rpgmakerVersion->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($rpgmakerVersion->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Plugins') ?></h4>
        <?php if (!empty($rpgmakerVersion->plugins)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Author Id') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Namespace') ?></th>
                <th><?= __('Category Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Tags') ?></th>
                <th><?= __('Rpgmaker Version Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($rpgmakerVersion->plugins as $plugins): ?>
            <tr>
                <td><?= h($plugins->id) ?></td>
                <td><?= h($plugins->name) ?></td>
                <td><?= h($plugins->created) ?></td>
                <td><?= h($plugins->modified) ?></td>
                <td><?= h($plugins->author_id) ?></td>
                <td><?= h($plugins->description) ?></td>
                <td><?= h($plugins->namespace) ?></td>
                <td><?= h($plugins->category_id) ?></td>
                <td><?= h($plugins->user_id) ?></td>
                <td><?= h($plugins->tags) ?></td>
                <td><?= h($plugins->rpgmaker_version_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Plugins', 'action' => 'view', $plugins->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Plugins', 'action' => 'edit', $plugins->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Plugins', 'action' => 'delete', $plugins->id], ['confirm' => __('Are you sure you want to delete # {0}?', $plugins->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
