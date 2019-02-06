<div class="card">
    <div class="card-header">
        <h3>LISTE DES UTILISATEURS</h3>
        <span class="pull-right"><a class="btn btn-sm btn-success" href="<?= $this->Url->build(['action'=>'add']) ?>"><i class="fa fa-plus-circle"></i> AJOUTER</a></span>
    </div>
    <div class="card-body">
        <table id="example" class="dataTable table table-bordered table-condensed second" style="width:100%">
            <thead>
                <tr>
                    <th>PRENOM</th>
                    <th>NOM</th>
                    <th>EMAIL</th>
                    <th>TELEPHONE</th>
                    <th>ROLE</th>
                    <th>ACTIF?</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= h($user->last_name) ?></td>
                    <td><?= h($user->first_name) ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->phone ?></td>
                    <td><?= $user->role ? $user->role->name : '-' ?></td>
                    <td><?= $user->active?"OUI":"NON" ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?= $this->Html->css('../concept/vendor/datatables/css/dataTables.bootstrap4.css') ?>
<?= $this->Html->css('../concept/vendor/datatables/css/buttons.bootstrap4.css') ?>
<?= $this->Html->css('../concept/vendor/datatables/css/select.bootstrap4.css') ?>
<?= $this->Html->css('../concept/vendor/datatables/css/fixedHeader.bootstrap4.css') ?>


<?= $this->Html->script('../concept/vendor/jquery/jquery-3.3.1.min.js') ?>
<?= $this->Html->script('../concept/vendor/bootstrap/js/bootstrap.bundle.js') ?>
<?= $this->Html->script('../concept/vendor/slimscroll/jquery.slimscroll.js') ?>
<?= $this->Html->script('../concept/vendor/multi-select/js/jquery.multi-select.js') ?>
<?= $this->Html->script('../concept/libs/js/main-js.js') ?>

<?= $this->Html->script('../concept/vendor/datatables/js/jquery.dataTables.min.js') ?>
<?= $this->Html->script('../concept/vendor/datatables/js/dataTables.bootstrap4.min.js') ?>
<?= $this->Html->script('../concept/vendor/datatables/js/dataTables.buttons.min.js') ?>
<?= $this->Html->script('../concept/vendor/datatables/js/buttons.bootstrap4.min.js') ?>
<?= $this->Html->script('../concept/vendor/datatables/js/buttons.bootstrap4.min.js') ?>
<?= $this->Html->script('../concept/vendor/datatables/js/data-table.js') ?>

<?= $this->Html->script('../concept/vendor/datatables/js/jszip.min.js') ?>
<?= $this->Html->script('../concept/vendor/datatables/js/pdfmake.min.js') ?>
<?= $this->Html->script('../concept/vendor/datatables/js/vfs_fonts.js') ?>

<?= $this->Html->script('../concept/vendor/datatables/js/buttons.html5.min.js') ?>
<?= $this->Html->script('../concept/vendor/datatables/js/buttons.print.min.js') ?>
<?= $this->Html->script('../concept/vendor/datatables/js/buttons.colVis.min.js') ?>
<?= $this->Html->script('../concept/vendor/datatables/js/dataTables.rowGroup.min.js') ?>
<?= $this->Html->script('../concept/vendor/datatables/js/dataTables.select.min.js') ?>
<?= $this->Html->script('../concept/vendor/datatables/js/dataTables.fixedHeader.min.js') ?>
