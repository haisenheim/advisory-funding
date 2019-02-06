<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Concurrent[]|\Cake\Collection\CollectionInterface $concurrents
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Concurrent'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="concurrents index large-9 medium-8 columns content">
    <h3><?= __('Concurrents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quoi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ou') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quand') ?></th>
                <th scope="col"><?= $this->Paginator->sort('combien') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pourquoi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cv') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marge_brute') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('va') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salaires') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ebe') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($concurrents as $concurrent): ?>
            <tr>
                <td><?= $this->Number->format($concurrent->id) ?></td>
                <td><?= h($concurrent->name) ?></td>
                <td><?= h($concurrent->quoi) ?></td>
                <td><?= h($concurrent->ou) ?></td>
                <td><?= h($concurrent->quand) ?></td>
                <td><?= h($concurrent->combien) ?></td>
                <td><?= h($concurrent->pourquoi) ?></td>
                <td><?= $this->Number->format($concurrent->ca) ?></td>
                <td><?= $this->Number->format($concurrent->cv) ?></td>
                <td><?= $this->Number->format($concurrent->marge_brute) ?></td>
                <td><?= $this->Number->format($concurrent->cf) ?></td>
                <td><?= $this->Number->format($concurrent->va) ?></td>
                <td><?= $this->Number->format($concurrent->salaires) ?></td>
                <td><?= $this->Number->format($concurrent->ebe) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $concurrent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $concurrent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $concurrent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $concurrent->id)]) ?>
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
