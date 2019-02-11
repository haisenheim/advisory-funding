<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tclients'), ['controller' => 'Tclients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tclient'), ['controller' => 'Tclients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clients view large-9 medium-8 columns content">
    <h3><?= h($client->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($client->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($client->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($client->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($client->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tclient') ?></th>
            <td><?= $client->has('tclient') ? $this->Html->link($client->tclient->name, ['controller' => 'Tclients', 'action' => 'view', $client->tclient->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $client->has('user') ? $this->Html->link($client->user->id, ['controller' => 'Users', 'action' => 'view', $client->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ImageUri') ?></th>
            <td><?= h($client->imageUri) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($client->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bg Img') ?></th>
            <td><?= h($client->bg_img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title Color') ?></th>
            <td><?= h($client->title_color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Header Color') ?></th>
            <td><?= h($client->header_color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Footer Color') ?></th>
            <td><?= h($client->footer_color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slogan') ?></th>
            <td><?= h($client->slogan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rccm') ?></th>
            <td><?= h($client->rccm) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($client->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Count') ?></th>
            <td><?= $this->Number->format($client->user_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Id') ?></th>
            <td><?= $this->Number->format($client->client_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capital') ?></th>
            <td><?= $this->Number->format($client->capital) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $client->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Clients') ?></h4>
        <?php if (!empty($client->clients)): ?>
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
            <?php foreach ($client->clients as $clients): ?>
            <tr>
                <td><?= h($clients->id) ?></td>
                <td><?= h($clients->name) ?></td>
                <td><?= h($clients->address) ?></td>
                <td><?= h($clients->phone) ?></td>
                <td><?= h($clients->email) ?></td>
                <td><?= h($clients->tclient_id) ?></td>
                <td><?= h($clients->user_count) ?></td>
                <td><?= h($clients->user_id) ?></td>
                <td><?= h($clients->client_id) ?></td>
                <td><?= h($clients->imageUri) ?></td>
                <td><?= h($clients->code) ?></td>
                <td><?= h($clients->bg_img) ?></td>
                <td><?= h($clients->title_color) ?></td>
                <td><?= h($clients->header_color) ?></td>
                <td><?= h($clients->footer_color) ?></td>
                <td><?= h($clients->capital) ?></td>
                <td><?= h($clients->slogan) ?></td>
                <td><?= h($clients->rccm) ?></td>
                <td><?= h($clients->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Clients', 'action' => 'view', $clients->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Clients', 'action' => 'edit', $clients->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clients', 'action' => 'delete', $clients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clients->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
