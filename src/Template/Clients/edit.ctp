<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $client->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tclients'), ['controller' => 'Tclients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tclient'), ['controller' => 'Tclients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clients form large-9 medium-8 columns content">
    <?= $this->Form->create($client) ?>
    <fieldset>
        <legend><?= __('Edit Client') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('address');
            echo $this->Form->control('phone');
            echo $this->Form->control('email');
            echo $this->Form->control('tclient_id', ['options' => $tclients, 'empty' => true]);
            echo $this->Form->control('user_count');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('client_id');
            echo $this->Form->control('imageUri');
            echo $this->Form->control('code');
            echo $this->Form->control('bg_img');
            echo $this->Form->control('title_color');
            echo $this->Form->control('header_color');
            echo $this->Form->control('footer_color');
            echo $this->Form->control('capital');
            echo $this->Form->control('slogan');
            echo $this->Form->control('rccm');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
