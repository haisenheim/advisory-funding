<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client[]|\Cake\Collection\CollectionInterface $clients
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tclients'), ['controller' => 'Tclients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tclient'), ['controller' => 'Tclients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clients index large-9 medium-8 columns content">
    <h3><?= __('Clients') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tclient_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_count') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imageUri') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bg_img') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title_color') ?></th>
                <th scope="col"><?= $this->Paginator->sort('header_color') ?></th>
                <th scope="col"><?= $this->Paginator->sort('footer_color') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capital') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slogan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rccm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
            <tr>
                <td><?= $this->Number->format($client->id) ?></td>
                <td><?= h($client->name) ?></td>
                <td><?= h($client->address) ?></td>
                <td><?= h($client->phone) ?></td>
                <td><?= h($client->email) ?></td>
                <td><?= $client->has('tclient') ? $this->Html->link($client->tclient->name, ['controller' => 'Tclients', 'action' => 'view', $client->tclient->id]) : '' ?></td>
                <td><?= $this->Number->format($client->user_count) ?></td>
                <td><?= $client->has('user') ? $this->Html->link($client->user->id, ['controller' => 'Users', 'action' => 'view', $client->user->id]) : '' ?></td>
                <td><?= $this->Number->format($client->client_id) ?></td>
                <td><?= h($client->imageUri) ?></td>
                <td><?= h($client->code) ?></td>
                <td><?= h($client->bg_img) ?></td>
                <td><?= h($client->title_color) ?></td>
                <td><?= h($client->header_color) ?></td>
                <td><?= h($client->footer_color) ?></td>
                <td><?= $this->Number->format($client->capital) ?></td>
                <td><?= h($client->slogan) ?></td>
                <td><?= h($client->rccm) ?></td>
                <td><?= h($client->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $client->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?>
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
