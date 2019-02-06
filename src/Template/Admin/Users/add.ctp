
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
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
