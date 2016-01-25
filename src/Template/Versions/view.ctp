<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Version'), ['action' => 'edit', $version->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Version'), ['action' => 'delete', $version->id], ['confirm' => __('Are you sure you want to delete # {0}?', $version->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Versions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Version'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plugins'), ['controller' => 'Plugins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plugin'), ['controller' => 'Plugins', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="versions view large-9 medium-8 columns content">
    <h3><?= h($version->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($version->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Plugin') ?></th>
            <td><?= $version->has('plugin') ? $this->Html->link($version->plugin->name, ['controller' => 'Plugins', 'action' => 'view', $version->plugin->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($version->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($version->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($version->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($version->description)); ?>
    </div>
</div>
