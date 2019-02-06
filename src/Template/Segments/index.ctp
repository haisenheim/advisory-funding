<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Segment[]|\Cake\Collection\CollectionInterface $segments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Segment'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="segments index large-9 medium-8 columns content">
    <h3><?= __('Segments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quoi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ou') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quand') ?></th>
                <th scope="col"><?= $this->Paginator->sort('combien') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($segments as $segment): ?>
            <tr>
                <td><?= $this->Number->format($segment->id) ?></td>
                <td><?= h($segment->name) ?></td>
                <td><?= h($segment->quoi) ?></td>
                <td><?= h($segment->ou) ?></td>
                <td><?= h($segment->quand) ?></td>
                <td><?= $this->Number->format($segment->combien) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $segment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $segment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $segment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $segment->id)]) ?>
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
