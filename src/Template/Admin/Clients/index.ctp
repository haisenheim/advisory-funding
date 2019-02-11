
<div class="card">
    <div class="card-header">
        <h3>LISTE DES CLIENTS</h3>
        <span class="pull-right"><a class="btn btn-sm btn-success" href="<?= $this->Url->build(['action'=>'add']) ?>"><i class="fa fa-plus-circle"></i> AJOUTER</a></span>
    </div>
    <div class="card-body">
        <table id="example" class="dataTable table table-bordered table-condensed second" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th scope="col">NOM</th>
                <th scope="col">ADRESSE</th>
                <th scope="col">TELEPHONE</th>
                <th scope="col">EMAIL</th>
                <th scope="col">TYPE DE CLIENT</th>
                <th scope="col" class="actions"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
            <tr>
                <th><?= $client->code ?></th>
                <td><?= h($client->name) ?></td>
                <td><?= h($client->address) ?></td>
                <td><?= h($client->phone) ?></td>
                <td><?= h($client->email) ?></td>
                <td><?= $client->has('tclient') ? $this->Html->link($client->tclient->name, ['controller' => 'Tclients', 'action' => 'view', $client->tclient->id]) : '' ?></td>

                <td class="actions">
                    <ul class="list-inline" style="margin-bottom: 0; text-align: center">
                        <li class="list-inline-item" style="" title="afficher" >
                            <a class="btn btn-sm btn-dark" style="padding: 5px" href="<?= $this->Url->build(['action'=>'view', $client->id]) ?>" ><i class="fa fa-list-alt"></i></a>
                        </li>
                        <?php if($client->active): ?>
                        <li class="list-inline-item" style="" title="desactiver" >
                            <a class="btn btn-sm btn-danger" style="padding: 5px" href="<?= $this->Url->build(['action'=>'disable', $client->id]) ?>" ><i class="fa fa-lock"></i></a>
                        </li>
                        <?php else: ?>
                            <li class="list-inline-item" style="" title="activer" >
                                <a class="btn btn-sm btn-success" style="padding: 5px" href="<?= $this->Url->build(['action'=>'enable', $client->id]) ?>" ><i class="fa fa-unlock"></i></a>
                            </li>
                        <?php endif; ?>
                    </ul>
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