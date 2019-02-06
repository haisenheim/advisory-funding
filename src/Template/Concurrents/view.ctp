<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Concurrent $concurrent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Concurrent'), ['action' => 'edit', $concurrent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Concurrent'), ['action' => 'delete', $concurrent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $concurrent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Concurrents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Concurrent'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="concurrents view large-9 medium-8 columns content">
    <h3><?= h($concurrent->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($concurrent->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quoi') ?></th>
            <td><?= h($concurrent->quoi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ou') ?></th>
            <td><?= h($concurrent->ou) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quand') ?></th>
            <td><?= h($concurrent->quand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Combien') ?></th>
            <td><?= h($concurrent->combien) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pourquoi') ?></th>
            <td><?= h($concurrent->pourquoi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($concurrent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ca') ?></th>
            <td><?= $this->Number->format($concurrent->ca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cv') ?></th>
            <td><?= $this->Number->format($concurrent->cv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marge Brute') ?></th>
            <td><?= $this->Number->format($concurrent->marge_brute) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cf') ?></th>
            <td><?= $this->Number->format($concurrent->cf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Va') ?></th>
            <td><?= $this->Number->format($concurrent->va) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salaires') ?></th>
            <td><?= $this->Number->format($concurrent->salaires) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ebe') ?></th>
            <td><?= $this->Number->format($concurrent->ebe) ?></td>
        </tr>
    </table>
</div>
