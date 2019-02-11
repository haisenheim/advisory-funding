
<div class="card">
    <div class="card-header">
        <h3>LISTE DES DOSSIERS</h3>
        <span class="pull-right"><a class="btn btn-sm btn-success btn-rounded" href="<?= $this->Url->build(['action'=>'add']) ?>"><i class="fa fa-plus-circle"></i> AJOUTER</a></span>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered second" style="width:100%">
    <thead>
    <tr>
        <th>CODE</th>
        <th>DATE</th>
        <th>COMPTE</th>

        <th>ACTIF</th>
        <th>ARCHIVE</th>
        <th >ACTIONS</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($dossiers as $dossier): ?>
        <tr>

            <td><?= $dossier->name ?></td>
            <td><?= $dossier->created ?></td>

            <td><?= $dossier->client?$dossier->client->name:'-' ?></td>

            <td><?= $dossier->active?"OUI":"NON" ?></td>
            <td><?= $dossier->archive?"OUI":"NON" ?></td>

            <td class="actions">
                <ul class="list-inline" style="margin-bottom: 0">
                    <li class="list-inline-item" title="afficher" >
                        <a class="btn btn-info btn-xs btn-rounded" href="<?= $this->Url->build(['action'=>'view', $dossier->id]) ?>" ><i class="fa fa-list-alt"></i></a>
                    </li>
                    <li class="list-inline-item" title="modifier" >
                        <a class="btn btn-success btn-xs btn-rounded" href="<?= $this->Url->build(['action'=>'edit', $dossier->id]) ?>" ><i class="fa fa-pencil-alt"></i></a>
                    </li>
                    <li class="list-inline-item" title="desactiver">
                        <a class="btn btn-default btn-xs btn-rounded" href="<?= $this->Url->build(['action'=>'disable', $dossier->id]) ?>" ><i class="fa fa-lock"></i></a>
                    </li>
                    <li class="list-inline-item" title="mettre en ligne">
                        <a class="btn btn-primary btn-xs btn-rounded" href="<?= $this->Url->build(['action'=>'enable', $dossier->id]) ?>" ><i class="fa fa-unlock"></i></a>
                    </li>
                </ul>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>

    </div>
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
