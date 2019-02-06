<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscription $souscription
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Souscription'), ['action' => 'edit', $souscription->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Souscription'), ['action' => 'delete', $souscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscription->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Souscriptions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Souscription'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dossiers'), ['controller' => 'Dossiers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dossier'), ['controller' => 'Dossiers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="souscriptions view large-9 medium-8 columns content">
    <h3><?= h($souscription->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $souscription->has('user') ? $this->Html->link($souscription->user->id, ['controller' => 'Users', 'action' => 'view', $souscription->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dossier') ?></th>
            <td><?= $souscription->has('dossier') ? $this->Html->link($souscription->dossier->name, ['controller' => 'Dossiers', 'action' => 'view', $souscription->dossier->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($souscription->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Montant') ?></th>
            <td><?= $this->Number->format($souscription->montant) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($souscription->created) ?></td>
        </tr>
    </table>
</div>
