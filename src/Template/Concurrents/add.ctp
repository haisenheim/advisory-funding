<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Concurrent $concurrent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Concurrents'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="concurrents form large-9 medium-8 columns content">
    <?= $this->Form->create($concurrent) ?>
    <fieldset>
        <legend><?= __('Add Concurrent') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('quoi');
            echo $this->Form->control('ou');
            echo $this->Form->control('quand');
            echo $this->Form->control('combien');
            echo $this->Form->control('pourquoi');
            echo $this->Form->control('ca');
            echo $this->Form->control('cv');
            echo $this->Form->control('marge_brute');
            echo $this->Form->control('cf');
            echo $this->Form->control('va');
            echo $this->Form->control('salaires');
            echo $this->Form->control('ebe');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
