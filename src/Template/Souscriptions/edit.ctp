<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscription $souscription
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $souscription->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $souscription->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Souscriptions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dossiers'), ['controller' => 'Dossiers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dossier'), ['controller' => 'Dossiers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="souscriptions form large-9 medium-8 columns content">
    <?= $this->Form->create($souscription) ?>
    <fieldset>
        <legend><?= __('Edit Souscription') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('montant');
            echo $this->Form->control('dossier_id', ['options' => $dossiers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
