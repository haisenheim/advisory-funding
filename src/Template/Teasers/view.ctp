<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teaser $teaser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Teaser'), ['action' => 'edit', $teaser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Teaser'), ['action' => 'delete', $teaser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teaser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Teasers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teaser'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dossiers'), ['controller' => 'Dossiers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dossier'), ['controller' => 'Dossiers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teasers view large-9 medium-8 columns content">
    <h3><?= h($teaser->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($teaser->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dossier') ?></th>
            <td><?= $teaser->has('dossier') ? $this->Html->link($teaser->dossier->name, ['controller' => 'Dossiers', 'action' => 'view', $teaser->dossier->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($teaser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($teaser->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($teaser->body)); ?>
    </div>
    <div class="row">
        <h4><?= __('Contexte') ?></h4>
        <?= $this->Text->autoParagraph(h($teaser->contexte)); ?>
    </div>
    <div class="row">
        <h4><?= __('Problematique') ?></h4>
        <?= $this->Text->autoParagraph(h($teaser->problematique)); ?>
    </div>
    <div class="row">
        <h4><?= __('Solution') ?></h4>
        <?= $this->Text->autoParagraph(h($teaser->solution)); ?>
    </div>
    <div class="row">
        <h4><?= __('Marche') ?></h4>
        <?= $this->Text->autoParagraph(h($teaser->marche)); ?>
    </div>
    <div class="row">
        <h4><?= __('Strategie') ?></h4>
        <?= $this->Text->autoParagraph(h($teaser->strategie)); ?>
    </div>
    <div class="row">
        <h4><?= __('Chiffres') ?></h4>
        <?= $this->Text->autoParagraph(h($teaser->chiffres)); ?>
    </div>
    <div class="row">
        <h4><?= __('Focus Realisations') ?></h4>
        <?= $this->Text->autoParagraph(h($teaser->focus_realisations)); ?>
    </div>
    <div class="row">
        <h4><?= __('Montant Levee Fonds') ?></h4>
        <?= $this->Text->autoParagraph(h($teaser->montant_levee_fonds)); ?>
    </div>
</div>
