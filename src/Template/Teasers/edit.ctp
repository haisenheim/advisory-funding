<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teaser $teaser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $teaser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $teaser->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Teasers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Dossiers'), ['controller' => 'Dossiers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dossier'), ['controller' => 'Dossiers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teasers form large-9 medium-8 columns content">
    <?= $this->Form->create($teaser) ?>
    <fieldset>
        <legend><?= __('Edit Teaser') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('dossier_id', ['options' => $dossiers]);
            echo $this->Form->control('body');
            echo $this->Form->control('contexte');
            echo $this->Form->control('problematique');
            echo $this->Form->control('solution');
            echo $this->Form->control('marche');
            echo $this->Form->control('strategie');
            echo $this->Form->control('chiffres');
            echo $this->Form->control('focus_realisations');
            echo $this->Form->control('montant_levee_fonds');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
