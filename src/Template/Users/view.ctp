<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nations'), ['controller' => 'Nations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nation'), ['controller' => 'Nations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sectors'), ['controller' => 'Sectors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sector'), ['controller' => 'Sectors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comptes'), ['controller' => 'Comptes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compte'), ['controller' => 'Comptes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($user->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($user->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ImageUri') ?></th>
            <td><?= h($user->imageUri) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ville') ?></th>
            <td><?= h($user->ville) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nation') ?></th>
            <td><?= $user->has('nation') ? $this->Html->link($user->nation->name, ['controller' => 'Nations', 'action' => 'view', $user->nation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sector') ?></th>
            <td><?= $user->has('sector') ? $this->Html->link($user->sector->name, ['controller' => 'Sectors', 'action' => 'view', $user->sector->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Id') ?></th>
            <td><?= $this->Number->format($user->client_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login Count') ?></th>
            <td><?= $this->Number->format($user->login_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Connexion') ?></th>
            <td><?= h($user->last_connexion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Recrut') ?></th>
            <td><?= h($user->date_recrut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $user->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Comptes') ?></h4>
        <?php if (!empty($user->comptes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Tclient Id') ?></th>
                <th scope="col"><?= __('User Count') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('ImageUri') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Bg Img') ?></th>
                <th scope="col"><?= __('Title Color') ?></th>
                <th scope="col"><?= __('Header Color') ?></th>
                <th scope="col"><?= __('Footer Color') ?></th>
                <th scope="col"><?= __('Capital') ?></th>
                <th scope="col"><?= __('Slogan') ?></th>
                <th scope="col"><?= __('Rccm') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->comptes as $comptes): ?>
            <tr>
                <td><?= h($comptes->id) ?></td>
                <td><?= h($comptes->name) ?></td>
                <td><?= h($comptes->address) ?></td>
                <td><?= h($comptes->phone) ?></td>
                <td><?= h($comptes->email) ?></td>
                <td><?= h($comptes->tclient_id) ?></td>
                <td><?= h($comptes->user_count) ?></td>
                <td><?= h($comptes->user_id) ?></td>
                <td><?= h($comptes->client_id) ?></td>
                <td><?= h($comptes->imageUri) ?></td>
                <td><?= h($comptes->code) ?></td>
                <td><?= h($comptes->bg_img) ?></td>
                <td><?= h($comptes->title_color) ?></td>
                <td><?= h($comptes->header_color) ?></td>
                <td><?= h($comptes->footer_color) ?></td>
                <td><?= h($comptes->capital) ?></td>
                <td><?= h($comptes->slogan) ?></td>
                <td><?= h($comptes->rccm) ?></td>
                <td><?= h($comptes->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Comptes', 'action' => 'view', $comptes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Comptes', 'action' => 'edit', $comptes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comptes', 'action' => 'delete', $comptes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comptes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
