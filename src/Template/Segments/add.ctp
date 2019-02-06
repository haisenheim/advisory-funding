<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Segment $segment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Segments'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="segments form large-9 medium-8 columns content">
    <?= $this->Form->create($segment) ?>
    <fieldset>
        <legend><?= __('Add Segment') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('quoi');
            echo $this->Form->control('ou');
            echo $this->Form->control('quand');
            echo $this->Form->control('combien');
            echo $this->Form->control('pourquoi');
            echo $this->Form->control('solutions');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
