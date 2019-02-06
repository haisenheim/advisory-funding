<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Segment $segment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Segment'), ['action' => 'edit', $segment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Segment'), ['action' => 'delete', $segment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $segment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Segments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Segment'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="segments view large-9 medium-8 columns content">
    <h3><?= h($segment->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($segment->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quoi') ?></th>
            <td><?= h($segment->quoi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ou') ?></th>
            <td><?= h($segment->ou) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quand') ?></th>
            <td><?= h($segment->quand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($segment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Combien') ?></th>
            <td><?= $this->Number->format($segment->combien) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Pourquoi') ?></h4>
        <?= $this->Text->autoParagraph(h($segment->pourquoi)); ?>
    </div>
    <div class="row">
        <h4><?= __('Solutions') ?></h4>
        <?= $this->Text->autoParagraph(h($segment->solutions)); ?>
    </div>
</div>
