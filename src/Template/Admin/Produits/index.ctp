<div class="card">
    <div class="card-header">
        <h3 class="page-header text-center">PRODUITS ET SERVICES</h3>
        <a style="margin-bottom: 20px" href="<?= $this->Url->build(['action'=>'add']) ?>" class="btn btn-sm btn-success btn-rounded"><i class="fa fa-plus-circle"></i>AJOUTER</a>
    </div>
    <div class="card-body">
        <table id="example" class="dataTable table table-bordered table-condensed second" style="width:100%">
            <thead>
            <tr>
                <th >NOM</th>
                <th>SECTEUR D'ACTIVITE</th>
                <th>Est-ce un service?</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($produits as $produit): ?>
                <tr>
                    <td><?= h($produit->name) ?></td>
                    <td><?= $produit->has('sector') ? $this->Html->link($produit->sector->name, ['controller' => 'Sectors', 'action' => 'view', $produit->sector->id]) : '' ?></td>
                    <td><?= $produit->service?"OUI":"NON"?></td>
                    <td >
                        <ul class="list-inline" style="margin-bottom: 0;">
                            <li class="list-inline-item" style="" title="afficher" >
                                <a class="btn btn-sm btn-info" style="padding: 5px" href="<?= $this->Url->build(['action'=>'view', $produit->id]) ?>" ><i class="fa fa-list-alt"></i></a>
                            </li>
                            <li class="list-inline-item" style="" title="Modifier" >
                                <a class="btn btn-sm btn-success" style="padding: 5px" href="<?= $this->Url->build(['action'=>'edit', $produit->id]) ?>" ><i class="fa fa-edit"></i></a>
                            </li>
                            <?php if($produit->active): ?>
                                <li class="list-inline-item" style="" title="desactiver" >
                                    <a class="btn btn-sm btn-default" style="padding: 5px" href="<?= $this->Url->build(['action'=>'disable', $produit->id]) ?>" ><i class="fa fa-lock"></i></a>
                                </li>
                            <?php else: ?>
                                <li class="list-inline-item" style="" title="activer" >
                                    <a class="btn btn-sm btn-primary" style="padding: 5px" href="<?= $this->Url->build(['action'=>'enable', $produit->id]) ?>" ><i class="fa fa-unlock"></i></a>
                                </li>
                            <?php endif ?>
                            <li class="list-inline-item" style="" title="Supprimer" >
                                <a class="btn btn-sm btn-danger" style="padding: 5px" href="<?= $this->Url->build(['action'=>'delete', $produit->id]) ?>" ><i class="fa fa-trash"></i></a>
                            </li>
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
