<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teaser[]|\Cake\Collection\CollectionInterface $teasers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Teaser'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dossiers'), ['controller' => 'Dossiers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dossier'), ['controller' => 'Dossiers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teasers index large-9 medium-8 columns content">
    <h3><?= __('Teasers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dossier_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teasers as $teaser): ?>
            <tr>
                <td><?= $this->Number->format($teaser->id) ?></td>
                <td><?= h($teaser->name) ?></td>
                <td><?= $teaser->has('dossier') ? $this->Html->link($teaser->dossier->name, ['controller' => 'Dossiers', 'action' => 'view', $teaser->dossier->id]) : '' ?></td>
                <td><?= h($teaser->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $teaser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teaser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teaser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teaser->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
