<div class="card">
    <div class="card-header">
        <h3 class="page-header text-center"><?= $produit->name ?></h3>
        <div class="card-default card" style="font-size: 1.5rem">
            <div class="card-header">
                <h5 class="card-title"><?= $produit->name ?></h5>
            </div>
            <div class="card-body" style="font-size: 1.5rem">
                SECTEUR : <span class="value"><?= $produit->has('sector') ? $this->Html->link($produit->sector->name, ['controller' => 'Sectors', 'action' => 'view', $produit->sector->id]) : '' ?></span>
                <br/>
                SERVICE ? : <span class="value"><?= $produit->service ? "OUI" : "NON"; ?></span>
            </div>
        </div>
    </div>
    <div class="card-body">
        <h6 class="page-header"><i class="fa fa-thumbs-down"></i> &nbsp;DEFAILLANCES </h6>
        <?php if (!empty($produit->risques)): ?>

            <table class="table table-bordered table-condensed table-responsive table-hover table-striped">
                <tr>

                    <th scope="col">RISQUE</th>
                    <th>Defaillance</th>
                    <th>Causes</th>
                    <th>Consequences</th>
                    <th>FREQUENCE</th>
                    <th>GRAVITE</th>
                    <th>CRITICITE BRUTE</th>
                    <th></th>

                </tr>
                <?php foreach ($produit->risques as $risques): ?>
                    <tr>
                        <?php
                        $criticite = $risques->_joinData->frequence * $risques->_joinData->gravite;
                        if($criticite >= 13){
                            $color='red';
                        }else{
                            if($criticite >=4 & $criticite <= 12){
                                $color='yellow';
                            }else{
                                $color = 'green';
                            }
                        }
                        ?>
                        <td><?= h($risques->name) ?></td>
                        <td><?= $risques->_joinData->name ?></td>
                        <td><?= $risques->_joinData->causes ?></td>
                        <td><?= $risques->_joinData->consequences ?></td>
                        <td><?= $risques->_joinData->frequence ?></td>
                        <td><?= $risques->_joinData->gravite ?></td>
                        <td style="background-color: <?= $color ?>"><?= $risques->_joinData->frequence * $risques->_joinData->gravite ?></td>
                        <td>
                            <ul class="list-unstyled" style="margin-bottom: 0;">
                                <li class="" style="" title="afficher le questionnaire" >
                                    <a class="btn btn-sm btn-dark" style="padding: 5px" href="<?= $this->Url->build(['controller'=>'Questions','action'=>'browse', $risques->_joinData->id]) ?>" ><i class="fa fa-question-circle"></i></a>
                                </li>

                            </ul>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

        <hr class=""/>

        <h6 class="page-header">DOSSIERS LIES</h6>
        <?php if (!empty($produit->dossiers)): ?>
            <table id="example" class="dataTable table table-bordered table-condensed second" style="width:100%">
                <thead>
                <tr>

                    <th >&numero;</th>
                    <th scope="col">DATE DE CREATION</th>
                    <th scope="col">CLIENT</th>
                    <th scope="col">ETABLISSEMENT FINANCIER</th>
                    <th scope="col">MONTANT DE L'EMPRUNT</th>
                    <th></th>


                </tr>
                </thead>
                <tbody>
                <?php foreach ($produit->dossiers as $dossiers): ?>
                    <tr>

                        <td><?= h($dossiers->name) ?></td>
                        <td><?= date_format(date_create($dossiers->created),'d-m-Y') ?></td>
                        <td><?= $dossiers->owner?$dossiers->owner->name:'-' ?></td>

                        <td><?= $dossiers->autor?$dossiers->author->client?$dossiers->author->client->name:'-':'-' ?></td>

                        <td><?= h($dossiers->emprunt) ?></td>
                        <td>
                            <ul class="list-inline" style="margin-bottom: 0; text-align: center">
                                <li class="" style="" title="afficher" >
                                    <a class="btn btn-sm btn-primary btn-rounded" style="padding: 5px" href="<?= $this->Url->build(['controller'=>'Dossiers','action'=>'view', $dossiers->id]) ?>" ><i class="fa fa-eye"></i></a>
                                </li>

                            </ul>
                        </td>


                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
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