<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Nations'), ['controller' => 'Nations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nation'), ['controller' => 'Nations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sectors'), ['controller' => 'Sectors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sector'), ['controller' => 'Sectors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comptes'), ['controller' => 'Comptes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Compte'), ['controller' => 'Comptes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('role_id', ['options' => $roles]);
            echo $this->Form->control('last_name');
            echo $this->Form->control('first_name');
            echo $this->Form->control('address');
            echo $this->Form->control('phone');
            echo $this->Form->control('email');
            echo $this->Form->control('client_id');
            echo $this->Form->control('login_count');
            echo $this->Form->control('last_connexion');
            echo $this->Form->control('active');
            echo $this->Form->control('imageUri');
            echo $this->Form->control('ville');
            echo $this->Form->control('nation_id', ['options' => $nations]);
            echo $this->Form->control('sector_id', ['options' => $sectors]);
            echo $this->Form->control('date_recrut');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
