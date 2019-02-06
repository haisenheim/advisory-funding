<div class="card">
    <input type="hidden" id="csrf" name="_csrfToken" value="<?= $token ?>"/>
    <input type="hidden" id="marketer_id" name="marketer_id" value="<?= $usr['id'] ?>"/>
    <div class="card-header">
        <h3>NOUVEAU DOSSIER</h3>
        <hr/>
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    <p>Infos generales</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <p>Ident. Risques</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <p>Diag. Fin.</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                    <p>Analyse Int.</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                    <p>Diag. Ext.</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                    <p>Analyse Ext.</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
                    <p>Diag & Obj. Strat.</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled">8</a>
                    <p>Plan. dev.</p>
                </div>

                <div class="stepwizard-step">
                    <a href="#step-9" type="button" class="btn btn-default btn-circle" disabled="disabled">9</a>
                    <p>Teaser</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="container">
            <form role="form" action="" method="post">

                <div class="setup-content" id="step-1">
                    <div class="card">

                        <div class="card-header">
                            <h2>INFORMATIONS GENERALES</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="form-group">
                                        <label class="control-label">CODE</label>
                                        <input id="name" name="name" maxlength="100" type="text" required="required" class="form-control" placeholder="Saisir le code du dossier">
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <h4 class="page-header">BESOINS DE FINANCEMENT</h4>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-md-4" >
                                    <label for="name">APPORT PERSONNEL</label>
                                    <input type="number" class="form-control" required="required" placeholder="Apport du porteur de projet" id="apport_personnel"/>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-md-4" >
                                    <label for="name">APPORT DES ASSOCIES</label>
                                    <input type="number" class="form-control" placeholder="L'apport des associes" id="apport_associes"/>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-md-4" >
                                    <label for="name">MONTANT DE LA LEVEE</label>
                                    <input type="number" required="required" class="form-control" placeholder="" id="montant"/>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div>
                                                <label for="sector_id">COMPTE DU CLIENT</label>
                                                <select name="compte_id" id="compte_id" class="form-control">
                                                    <option value="0">Selectionner un secteur d'activite</option>
                                                    <?php foreach($comptes as $p): ?>
                                                        <option value="<?= $p->id ?>"><?= $p->name ?></option>
                                                    <?php endforeach; ?>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div>
                                                <label for="sector_id">IMAGE DU PROJET</label>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="btn-div">
                            <button class="btn btn-primary nextBtn btn-sm pull-right btn-rounded" type="button"> SUIVANT <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>





                </div>


                <div class="setup-content" id="step-2">
                    <h3> Identification des risques</h3>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div>
                                    <label for="sector_id">Secteur d'activite</label>
                                    <select name="sector_id" id="sector_id" class="form-control">
                                        <option value="0">Selectionner un secteur d'activite</option>
                                        <?php foreach($sectors as $p): ?>
                                            <option value="<?= $p->id ?>"><?= $p->name ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div>
                                    <div>
                                        <label for="produit_id">Produit/Service</label>
                                        <select name="produit_id" id="produit_id" class="form-control">
                                            <option value="0">Selectionner un produit ou service</option>
                                            <?php foreach($produits as $p): ?>
                                                <option value="<?= $p->id ?>"><?= $p->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div>
                                        <ul class="list-inline" id="list-produit">

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div>
                        <div class="section" id="section-4">
                            <h4 class="page-header">IDENTIFICATION DES RISQUES</h4>
                        </div>
                    </div>
                    <button class="btn btn-primary prevBtn btn-sm pull-left btn-rounded" type="button"> <i class="fa fa-arrow-left"></i> Precedent</button>
                    <button class="btn btn-primary nextBtn btn-sm pull-right btn-rounded" type="button"> SUIVANT <i class="fa fa-arrow-right"></i></button>
                </div>

                <div class="setup-content" id="step-3">

                    <div class="">
                        <div class="section-block">
                            <h1 style="margin-top: 15px" class="section-title text-center">DIAGNOSTIC FINANCIER</h1>
                            <p></p>
                        </div>
                        <div class="tab-regular">
                            <ul class="nav nav-tabs " id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="compte-tab" data-toggle="tab" href="#compte" role="tab" aria-controls="compte" aria-selected="true">COMPTE D'EXPLOITATION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="equilibres-tab" data-toggle="tab" href="#equilibre" role="tab" aria-controls="equilibre" aria-selected="false">GRANDS EQUILIBRES FINANCIERS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="ratios-tab" data-toggle="tab" href="#ratios" role="tab" aria-controls="ratios" aria-selected="false">QUELQUES RATIOS</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="compte" role="tabpanel" aria-labelledby="compte-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>COMPTE D'EXPLOITATION</h3>
                                    </div>
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <legend>CHIFFRES D'AFFAIRE</legend>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee1</label>
                                                            <input id="ca1" name="ca1" maxlength="200" type="text" required="required" class="form-control" placeholder="Chiffre d'affaire Annee 1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee2</label>
                                                            <input id="ca2" name="ca2" maxlength="200" type="text" required="required" class="form-control" placeholder="Chiffre d'affaire Annee 2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee2</label>
                                                            <input id="ca3" name="ca3" maxlength="200" type="text" required="required" class="form-control" placeholder="Chiffre d'affaire Annee 3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <legend>CHARGES VARIABLES</legend>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 1</label>
                                                            <input id="cv1" name="cv1" maxlength="200" type="text" required="required" class="form-control" placeholder="Charges variables Annee 1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 2</label>
                                                            <input id="cv2" name="cv2" maxlength="200" type="text" required="required" class="form-control" placeholder="Charges variables Annee 2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 3</label>
                                                            <input id="cv3" name="cv3" maxlength="200" type="text" required="required" class="form-control" placeholder="Charges variables Annee 3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <fieldset>
                                                <legend>CHARGES FIXES</legend>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 1</label>
                                                            <input id="cf1" name="cf1" maxlength="200" type="text" required="required" class="form-control" placeholder="Charges fixes Annee 1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 2</label>
                                                            <input id="cf2" name="cf2" maxlength="200" type="text" required="required" class="form-control" placeholder="Charges fixes Annee 2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 3</label>
                                                            <input id="cf3" name="cf3" maxlength="200" type="text" required="required" class="form-control" placeholder="Charges fixes Annee 3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <fieldset>
                                                <legend>SALAIRES</legend>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 1</label>
                                                            <input id="salaires1" name="cf1" maxlength="200" type="text" required="required" class="form-control" placeholder="salaires Annee 1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 2</label>
                                                            <input id="salaires2" name="cf2" maxlength="200" type="text" required="required" class="form-control" placeholder="Salaires Annee 2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 3</label>
                                                            <input id="salaires3" name="cf3" maxlength="200" type="text" required="required" class="form-control" placeholder="Salaires Annee 3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <fieldset>
                                                <legend>Dotations aux amortissements et provisions</legend>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 1</label>
                                                            <input id="dap1" name="dap1" maxlength="200" type="number" required="required" class="form-control" placeholder="DAP Annee 1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 2</label>
                                                            <input id="dap2" name="dap2" maxlength="200" type="number" required="required" class="form-control" placeholder="DAP Annee 2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 3</label>
                                                            <input id="dap3" name="dap3" maxlength="200" type="number" required="required" class="form-control" placeholder="DAP Annee 3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <fieldset>
                                                <legend>PRODUITS FINANCIERS</legend>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 1</label>
                                                            <input id="pf1" name="pf1" maxlength="200" type="number" required="required" class="form-control" placeholder="PF. Annee 1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 2</label>
                                                            <input id="pf2" name="pf2" maxlength="200" type="number" required="required" class="form-control" placeholder="PF. Annee 2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 3</label>
                                                            <input id="pf3" name="pf3" maxlength="200" type="number" required="required" class="form-control" placeholder="PF. Annee 3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <fieldset>
                                                <legend>CHARGES FINANCIERES</legend>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 1</label>
                                                            <input id="cfi1" name="cfi1" maxlength="200" type="number" required="required" class="form-control" placeholder="CFi Annee 1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 2</label>
                                                            <input id="cfi2" name="cfi2" maxlength="200" type="number" required="required" class="form-control" placeholder="CFi Annee 2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 3</label>
                                                            <input id="cfi3" name="cfi3" maxlength="200" type="number" required="required" class="form-control" placeholder="CFi Annee 3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <fieldset>
                                                <legend>PRODUIT EXCEPTIONNEL</legend>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 1</label>
                                                            <input id="pe1" name="pe1" maxlength="200" type="number" required="required" class="form-control" placeholder="PE. Annee 1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 2</label>
                                                            <input id="pe2" name="pe2" maxlength="200" type="number" required="required" class="form-control" placeholder="PE. Annee 2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 3</label>
                                                            <input id="pe3" name="pe3" maxlength="200" type="number" required="required" class="form-control" placeholder="PE. Annee 3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <fieldset>
                                                <legend>CHARGES EXCEPTIONNELLES</legend>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 1</label>
                                                            <input id="ce1" name="ce1" maxlength="20" type="number" required="required" class="form-control" placeholder="CE Annee 1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 2</label>
                                                            <input id="ce2" name="ce2" maxlength="20" type="number" required="required" class="form-control" placeholder="CE Annee 2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 3</label>
                                                            <input id="ce3" name="ce3" maxlength="20" type="number" required="required" class="form-control" placeholder="CE Annee 3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <fieldset>
                                                <legend>IMPOTS</legend>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 1</label>
                                                            <input id="impots1" name="impots1" maxlength="20" type="number" required="required" class="form-control" placeholder="Impots Annee 1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 2</label>
                                                            <input id="impots2" name="impots2" maxlength="20" type="number" required="required" class="form-control" placeholder="Impots Annee 2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Annee 3</label>
                                                            <input id="impots3" name="impots3" maxlength="20" type="number" required="required" class="form-control" placeholder="Impots Annee 3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    </div>

                                </div>

                                </div>
                                <div class="tab-pane fade" id="equilibre" role="tabpanel" aria-labelledby="equilibres-tab">
                                    <div class="card">
                                        <div class="card-header"><h3> GRANDS EQUILIBRES FINANCIERS</h3></div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <fieldset>
                                                        <legend>RESSOURCES DURABLES</legend>
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Annee 1</label>
                                                                    <input id="ress_dur1" name="ress_dur1" maxlength="20" type="number" required="required" class="form-control" placeholder="Ress. Annee 1">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Annee 2</label>
                                                                    <input id="ress_dur2" name="ress_dur2" maxlength="20" type="number" required="required" class="form-control" placeholder="Ress. Annee 2">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Annee 3</label>
                                                                    <input id="ress_dur3" name="ress_dur3" maxlength="20" type="number" required="required" class="form-control" placeholder="Ress. Annee 3">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <fieldset>
                                                        <legend>ACTIFS IMMOBILISES</legend>
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Annee 1</label>
                                                                    <input id="actifs_immo1" name="actifs_immo1" maxlength="20" type="number" required="required" class="form-control" placeholder="Actifs Immo. Annee 1">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Annee 2</label>
                                                                    <input id="actifs_immo2" name="actifs_immo2" maxlength="20" type="number" required="required" class="form-control" placeholder="Actifs Immo. Annee 2">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Annee 3</label>
                                                                    <input id="actifs_immo3" name="actifs_immo3" maxlength="20" type="number" required="required" class="form-control" placeholder="Actifs Immo. Annee 3">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <fieldset>
                                                        <legend>CREANCES</legend>
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Annee 1</label>
                                                                    <input id="creances1" name="creances1" maxlength="20" type="number" required="required" class="form-control" placeholder="Creances Annee 1">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Annee 2</label>
                                                                    <input id="creances2" name="creances2" maxlength="20" type="number" required="required" class="form-control" placeholder="Creances Annee 2">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Annee 3</label>
                                                                    <input id="creances3" name="creances3" maxlength="20" type="number" required="required" class="form-control" placeholder="Creances Annee 3">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <fieldset>
                                                        <legend>STOCKS</legend>
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Annee 1</label>
                                                                    <input id="stocks1" name="stocks1" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Annee 2</label>
                                                                    <input id="stocks2" name="stocks2" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Annee 3</label>
                                                                    <input id="stocks3" name="stocks3" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <fieldset>
                                                        <legend>DETTES</legend>
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Annee 1</label>
                                                                    <input id="dettes1" name="dettes1" maxlength="20" type="number" required="required" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Annee 2</label>
                                                                    <input id="dettes2" name="dettes2" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Annee 3</label>
                                                                    <input id="dettes3" name="dettes3" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ratios" role="tabpanel" aria-labelledby="ratios-tab">
                                <div class="card">
                                <div class="card-header"><h4>QUELQUES RATIOS</h4></div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <fieldset>
                                        <legend>CAPITAUX PROPRES</legend>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 1</label>
                                                    <input id="capitaux_propres1" name="capitaux_propres1" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 2</label>
                                                    <input id="capitaux_propres2" name="capitaux_propres2" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 3</label>
                                                    <input id="capitaux_propres3" name="capitaux_propres3" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <fieldset>
                                        <legend>RATIO D'AUTONOMIE FINANCIERE</legend>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 1</label>
                                                    <input id="ratio_auto_fin1" name="ratio_auto_fin1" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 2</label>
                                                    <input id="ratio_auto_fin2" name="ratio_auto_fin2" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 3</label>
                                                    <input id="ratio_auto_fin3" name="ratio_auto_fin3" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <fieldset>
                                        <legend>RATIO D'ENDETTEMENT NET</legend>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 1</label>
                                                    <input id="ratio_endettement_net1" name="ratio_endettement_net1" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 2</label>
                                                    <input id="ratio_endettement_net2" name="ratio_endettement_net2" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 3</label>
                                                    <input id="ratio_endettement_net3" name="ratio_endettement_net3" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <fieldset>
                                        <legend>RATIO DE LIQUIDITE GENERALE</legend>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 1</label>
                                                    <input id="ratio_liquidite_gen1" name="ratio_liquidite_gen1" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 2</label>
                                                    <input id="ratio_liquidite_gen2" name="ratio_liquidite_gen2" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 3</label>
                                                    <input id="ratio_liquidite_gen3" name="ratio_liquidite_gen3" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <fieldset>
                                        <legend>RATIO DE COUVERTURE DES EMPLOIS STABLES</legend>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 1</label>
                                                    <input id="ratio_couv_emploi_stables1" name="ratio_couv_emploi_stables1" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 2</label>
                                                    <input id="ratio_couv_emploi_stables2" name="ratio_couv_emploi_stables2" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 3</label>
                                                    <input id="ratio_couv_emploi_stables3" name="ratio_couv_emploi_stables3" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <fieldset>
                                        <legend>RATIO DE VETUSTE DES IMMOBILISATIONS</legend>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 1</label>
                                                    <input id="ratio_vetuite_immo1" name="ratio_vetuite_immo1" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 2</label>
                                                    <input id="ratio_vetuite_immo2" name="ratio_vetuite_immo2" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 3</label>
                                                    <input id="ratio_vetuite_immo3" name="ratio_vetuite_immo3" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <fieldset>
                                        <legend>DELAIS DE PAIEMENT DES CLIENTS</legend>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 1</label>
                                                    <input id="delais_paie_clients1" name="delais_paie_clients1" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 2</label>
                                                    <input id="delais_paie_clients2" name="delais_paie_clients2" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 3</label>
                                                    <input id="delais_paie_clients3" name="delais_paie_clients3" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <fieldset>
                                        <legend>DELAIS DE PAIEMENT DES FOURNISSEURS</legend>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 1</label>
                                                    <input id="delais_paie_frn1" name="delais_paie_frn1" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 2</label>
                                                    <input id="delais_paie_frn2" name="delais_paie_frn2" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 3</label>
                                                    <input id="delais_paie_frn3" name="delais_paie_frn3" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>


                                <div class="col-sm-12 col-md-4">
                                    <fieldset>
                                        <legend>RENTABILITE DES CAPITAUX PROPRES</legend>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 1</label>
                                                    <input id="rentabilite_capitaux_propres1" name="rentabilite_capitaux_propres1" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 2</label>
                                                    <input id="rentabilite_capitaux_propres2" name="rentabilite_capitaux_propres2" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Annee 3</label>
                                                    <input id="rentabilite_capitaux_propres3" name="rentabilite_capitaux_propres3" maxlength="20" type="number" required="required" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                </div>
                                </div>
                                </div>
                                </div>
                            </div>
                            <button class="btn btn-primary prevBtn btn-sm pull-left btn-rounded" type="button"><i class="fa fa-arrow-left"></i> Precedent</button>
                            <button class="btn btn-primary nextBtn btn-sm pull-right btn-rounded" type="button"> SUIVANT <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>

                <div class="row setup-content" id="step-4">
                    <div class="card">
                        <div class="col-md-12">
                            <div class="card-header">
                                <h1 class="text-center">ANALYSE DU DIAGNOSTIC INTERNE</h1>
                            </div>
                            <div class="card-body">
                                <div class="email editor">
                                    <div class="p-0">
                                        <div class="form-group">
                                            <textarea class="form-control" id="summernote" name="editordata" rows="6" placeholder="Saisir le diagnostic interne ici."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary prevBtn btn-sm pull-left btn-rounded" type="button"><i class="fa fa-arrow-left"></i> Precedent</button>
                            <button class="btn btn-primary nextBtn btn-sm pull-right btn-rounded" type="button"> SUIVANT <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="setup-content" id="step-5">
                    <div class="card">
                        <div class="card-header">
                           <h1 class="text-center">DIAGNOSTIC EXTERNE</h1>
                        </div>
                        <div class="card-body">
                            <div class="tab-regular">
                                <ul class="nav nav-tabs " id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="segments-tab" data-toggle="tab" href="#segments" role="tab" aria-controls="segments" aria-selected="true">ANALYSE DE LA DEMANDE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="concurrents-tab" data-toggle="tab" href="#concurrents" role="tab" aria-controls="concurrents" aria-selected="false">ANALYSE DE L’OFFRE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="environnement-tab" data-toggle="tab" href="#environnement" role="tab" aria-controls="environnement" aria-selected="false">ANALYSE DE L'ENVIRONNEMENT</a>
                                    </li>

                                </ul>
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade show active" id="segments" role="tabpanel" aria-labelledby="segments-tab">
                                        <div class="row" style="border: 1px solid #ddddff; padding: 15px; border-radius: 5px">
                                            <div class="col-md-2 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label" title="Le nom du segment">QUI?</label>
                                                    <input id="qui" name="name" type="text" class="form-control de"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label" title="Le nom du segment">QUOI?</label>
                                                    <input id="quoi" name="quoi" type="text" class="form-control de" placeholder=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label" title="Où comblent-ils leur besoin actuellement">OU?</label>
                                                    <input id="ou" name="ou" type="text" class="form-control de" placeholder=""/>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label" title="À quel moment et à quelle fréquence procèdent-ils à un achat?">QUAND?</label>
                                                    <input id="quand" name="ou" type="text" class="form-control de" placeholder="À quel moment et à quelle fréquence procèdent-ils à un achat?"/>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label" title="Combien dépensent-ils pour obtenir la solution / Combien sont-ils à avoir ce besoin?">COMBIEN?</label>
                                                    <input id="combien" name="ou" type="text" class="form-control de" placeholder="Combien dépensent-ils pour obtenir la solution / Combien sont-ils à avoir se besoin?"/>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label" title="Pourquoi apprécient-ils la solution qu'ils utilisent ?">POURQUOI?</label>
                                                    <textarea id="pourquoi" name="ou" class="form-control de" placeholder="Pourquoi apprécient-ils la solution qu'ils utilisent ?"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <button class="btn btn-primary btn-sm btn-rounded" id="btn-seg-add"><i class="fa fa-plus-circle"></i></button>
                                            </div>
                                        </div>
                                            <h4 class="">TABLE DES SEGMENTS</h4>
                                            <table class="table table-bordered table-striped" id="table-segments">
                                                <thead>
                                                <tr>

                                                    <th>QUI</th>
                                                    <th>QUOI</th>
                                                    <th>OU</th>
                                                    <th>QUAND</th>
                                                    <th>COMBIEN</th>
                                                    <th>POURQUOI</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>

                                            </table>
                                    </div>

                                    <div class="tab-pane fade" id="concurrents" role="tabpanel" aria-labelledby="concurrents-tab">
                                        <div class="row" style="border: 1px solid #ddddff; padding: 15px; border-radius: 5px">
                                            <div class="col-md-2 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label" title="Le nom du segment">QUI?</label>
                                                    <input id="quic" name="name" type="text" class="form-control dec"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label" title="Le nom du segment">QUOI?</label>
                                                    <input id="quoic" name="quoi" type="text" class="form-control dec" placeholder=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label" title="Où comblent-ils leur besoin actuellement">OU?</label>
                                                    <input id="ouc" name="ou" type="text" class="form-control dec" placeholder=""/>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label" title="À quel moment et à quelle fréquence procèdent-ils à un achat?">QUAND?</label>
                                                    <input id="quandc" name="ou" type="text" class="form-control dec" placeholder="À quel moment et à quelle fréquence procèdent-ils à un achat?"/>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label" title="Combien dépensent-ils pour obtenir la solution / Combien sont-ils à avoir ce besoin?">COMBIEN?</label>
                                                    <input id="combienc" name="ou" type="text" class="form-control dec" placeholder="Combien dépensent-ils pour obtenir la solution / Combien sont-ils à avoir se besoin?"/>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label" title="Pourquoi apprécient-ils la solution qu'ils utilisent ?">POURQUOI?</label>
                                                    <textarea id="pourquoic" name="ou" class="form-control dec" placeholder="Pourquoi apprécient-ils la solution qu'ils utilisent ?"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label">CHIFFRE D'AFFAIRE</label>
                                                    <input id="ca" name="ou" type="number" class="form-control dec"/>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label">CHARGES VARIABLES</label>
                                                    <input id="cv" name="ou" type="number" class="form-control dec"/>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label">MARGE BRUTE</label>
                                                    <input id="mb" name="ou" type="number" class="form-control dec"/>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label">CHARGES FIXES</label>
                                                    <input id="cf" name="ou" type="number" class="form-control dec"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label">VALEUR AJOUTEE</label>
                                                    <input id="va" name="ou" type="number" class="form-control dec"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label">SALAIRES</label>
                                                    <input id="sal" name="ou" type="number" class="form-control dec"/>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="" class="control-label">EX. BRUT D'EXP.</label>
                                                    <input id="ebe" name="ou" type="number" class="form-control dec"/>
                                                </div>
                                            </div>



                                            <div class="col-md-4 col-sm-12">
                                                <button class="btn btn-primary btn-sm btn-rounded" id="btn-con-add"><i class="fa fa-plus-circle"></i></button>
                                            </div>
                                        </div>

                                        <div style="border:1px solid #dddddd; padding: 10px 0; border-radius: 5px; margin-top: 10px">

                                            <h4 class="page-header">TABLE DES CONCURRENTS</h4>
                                            <table class="table table-bordered table-striped table-condensed" id="table-concurrents">
                                                <thead>
                                                <tr>

                                                    <th>QUI</th>
                                                    <th>QUOI</th>
                                                    <th>OU</th>
                                                    <th>QUAND</th>
                                                    <th>COMBIEN</th>
                                                    <th>POURQUOI</th>
                                                    <th>CA</th>
                                                    <th>CV</th>
                                                    <th>MB</th>
                                                    <th>CF</th>
                                                    <th>VA</th>
                                                    <th>SAL</th>
                                                    <th>EBE</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>

                                            </table>

                                        </div>
                                    </div>

                                    <div class="tab-pane fane" id="environnement" role="tabpanel" aria-labelledby="environnement-tab">
                                        <div class="" style="border: 1px solid #ddddff; padding: 15px; border-radius: 5px">
                                            <h4 class="page-header">ANALYSE DE L'ENVIRONNEMENT</h4>

                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr >
                                                        <th style="width: 25%"></th>
                                                        <th>OPPORTUNUITES</th>
                                                        <th>MENACES</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id="ps">
                                                        <th style="width: 25%" >POLITIQUE SECTORIELLE</th>
                                                        <td contenteditable="true"></td>
                                                        <td contenteditable="true"></td>
                                                    </tr>
                                                    <tr id="cmep">
                                                        <th style="width: 25%">CADRE MACRO ECONOMIQUE DU PROJET</th>
                                                        <td contenteditable="true"></td>
                                                        <td contenteditable="true"></td>
                                                    </tr>
                                                    <tr id="asc">
                                                        <th style="width: 25%">ASPECTS SOCIO-CULTURELS</th>
                                                        <td contenteditable="true"></td>
                                                        <td contenteditable="true"></td>
                                                    </tr>
                                                    <tr id="et">
                                                        <th style="width: 25%">ENVIRONNEMENT TECHNOLOGIQUES</th>
                                                        <td contenteditable="true"></td>
                                                        <td contenteditable="true"></td>
                                                    </tr>
                                                    <tr id="iep">
                                                        <th style="width: 25%">IMPACT ENVIRONNEMENTAL DU PROJET</th>
                                                        <td contenteditable="true"></td>
                                                        <td contenteditable="true"></td>
                                                    </tr>
                                                    <tr id="crp">
                                                        <th style="width: 25%">CADRE REGLEMENTAIRE DU PROJET</th>
                                                        <td contenteditable="true"></td>
                                                        <td contenteditable="true"></td>
                                                    </tr>
                                                    <tr id="pnf">
                                                        <th style="width: 25%">POUVOIR DE NEGOCIATION DES FOURNISSEURS</th>
                                                        <td contenteditable="true"></td>
                                                        <td contenteditable="true"></td>
                                                    </tr>
                                                    <tr id="pnc">
                                                        <th style="width: 25%">POUVOIR DE NEGOCIATION DES CLIENTS</th>
                                                        <td contenteditable="true"></td>
                                                        <td contenteditable="true"></td>
                                                    </tr>
                                                    <tr id="pps">
                                                        <th style="width: 25%">PERFORMANCES  DES PRODUITS DE SUBSTITUTION </th>
                                                        <td contenteditable="true"></td>
                                                        <td contenteditable="true"></td>
                                                    </tr>
                                                    <tr id="ic">
                                                        <th style="width: 25%">INTENSITE CONCURRENTIELLE</th>
                                                        <td contenteditable="true"></td>
                                                        <td contenteditable="true"></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 15px">
                                <button class="btn btn-primary prevBtn btn-sm pull-left btn-rounded" type="button"><i class="fa fa-arrow-left"></i> Precedent</button>
                                <button class="btn btn-primary nextBtn btn-sm pull-right btn-rounded" type="button"> SUIVANT <i class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-6">
                    <div class="card">
                        <div class="col-md-12">
                            <div class="card-header">
                                <h1 class="text-center">ANALYSE DU DIAGNOSTIC EXTERNE</h1>
                            </div>
                            <div class="card-body">
                                <div class="email editor">
                                    <div class="p-0">
                                        <div class="form-group">
                                            <textarea class="form-control" id="summernote2" name="editordata" rows="6" placeholder="Saisir le diagnostic externe ici."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary prevBtn btn-sm pull-left btn-rounded" type="button"><i class="fa fa-arrow-left"></i> Precedent</button>
                            <button class="btn btn-primary nextBtn btn-sm pull-right btn-rounded" type="button"> SUIVANT <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="setup-content" id="step-7">
                    <div class="card">
                        <div class="card-body">
                            <h3>DIAGNOSTIC ET OBJECTIFS STRATEGIQUE </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <label for="">SYNTHESE DES OPPORTUNITES</label>
                                    <input type="text" placeholder="" class="form-control" id="synop"/>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="">SYNTHESE DES MENACES</label>
                                    <input type="text" placeholder="" class="form-control" id="synmen"/>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="">SYNTHESE DES FORCES DE L’ENTREPRISE</label>
                                    <input type="text" placeholder="" class="form-control" id="synfore"/>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="">SYNTHESE DES FAIBLESSES DE L’ENTREPRISE</label>
                                    <input type="text" placeholder="" class="form-control" id="synfaibe"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="email editor">
                                        <div class="p-0">
                                            <div class="form-group" style="margin-top: 10px">
                                                <label for="">Définition des objectifs stratégiques à long, moyen et court terme</label>
                                                <textarea class="form-control" id="summernote3" name="editordata" rows="6" placeholder=""></textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-div">
                                <button class="btn btn-primary prevBtn btn-sm pull-left btn-rounded" type="button"><i class="fa fa-arrow-left"></i> PRECEDENT</button>
                                <button class="btn btn-primary nextBtn btn-sm pull-right btn-rounded" type="button"> SUIVANT <i class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-8">
                    <div class="card">
                        <div class="card-header">
                            <h2>PLAN DE DEVELOPPEMENT STRATEGIQUE</h2>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" id="summernote4" name="editordata" rows="6" placeholder=""></textarea>

                            <div class="btn-div">
                                <button class="btn btn-primary prevBtn btn-sm pull-left btn-rounded" type="button"><i class="fa fa-arrow-left"></i> PRECEDENT</button>
                                <button class="btn btn-primary nextBtn btn-sm pull-right btn-rounded" type="button"> SUIVANT <i class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="setup-content" id="step-9">
                    <div class="card">
                        <div class="card-header">
                            <h3>TEASER</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label for="">CONTEXTE</label>
                                    <textarea class="form-control" id="contexte"></textarea>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="">PROBLEMATIQUE</label>
                                    <textarea class="form-control telt" id="problematique"></textarea>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="">MARCHE</label>
                                    <textarea type="text" class="form-control telt" id="marche"></textarea>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="">STRATEGIE</label>
                                    <textarea class="form-control telt" id="strategie"></textarea>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="">CHIFFRES CLES</label>
                                    <textarea class="form-control telt" id="chiffres" placeholder=""></textarea>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="">FOCUS SUR LES REALISATIONS DE L'ENTREPRISE</label>
                                    <textarea class="form-control telt" id="focus_realisations" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <textarea class="form-control" id="summernote5" name="editordata" rows="6" placeholder=""></textarea>
                                </div>
                            </div>

                            <div class="btn-div">
                                <button class="btn btn-primary prevBtn btn-sm pull-left btn-rounded" type="button"><i class="fa fa-arrow-left"></i> Precedent</button>
                                <button id="btn-save" class="btn btn-success btn-sm pull-right btn-rounded" type="submit"><i class="fa fa-save"></i> Enregister</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>


    <?= $this->Html->script('../concept/vendor/select2/js/select2.min.js') ?>
<?= $this->Html->script('../concept/vendor/summernote/js/summernote-bs4.js') ?>
    <?= $this->Html->script('../concept/vendor/slimscroll/jquery.slimscroll.js') ?>
<?= $this->Html->script('../concept/libs/js/main-js.js') ?>


    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300

            });

            $('#summernote2').summernote({
                height: 300
            });
            $('#summernote3').summernote({
                height: 300
            });
            $('#summernote4').summernote({
                height: 300
            });
            $('#summernote5').summernote({
                height: 300
            });

        });
    </script>

<script>

    var url = "<?= $this->Url->build(['controller'=>'Produits', 'action'=>'getByIdJson']) ?>";
    var qurl = "<?= $this->Url->build(['controller'=>'Produits', 'action'=>'getQuestionsByIdJson']) ?>";


    $("#sector_id").on('change',function(){
        // console.log($("#sector_id").val());
        $.ajax({
            url:url,
            type:'Post',
            dataType:'Json',
            data:{_csrf:$('#csrf').val(), id:$("#sector_id").val()},
            beforeSend:function(xhr){
                xhr.setRequestHeader('X-CSRF-Token',$('#csrf').val())
            },
            success: function(data){
                $("#produit_id").html("");

                var option = '<option value="0">Selectionner un produit</option>';
                var dat =data.produits;
                var quest = data.questions;
                for(var i=0; i<dat.length;i++ ){

                    option=option+'<option value='+ dat[i].id +'>'+ dat[i].name +'</option>';

                    $("#produit_id").html(option);
                }

            }
        });
    });



    $("#produit_id").on('change', function(){

        var list = $('#list-produit');
        var idp = $("#produit_id").val();
        var pn = $("#produit_id option:selected").text();
        list.prepend('<li class="list-item badge remove-item" data-id='+ idp+'>'+ pn +'</li>');

        $.ajax({
            url:qurl,
            type:'Post',
            dataType:'Json',
            data:{_csrf:$('#csrf').val(), id:$("#produit_id").val()},
            beforeSend:function(xhr){
                xhr.setRequestHeader('X-CSRF-Token',$('#csrf').val())
            },
            success: function(qt){

                var html='<div id="sect'+idp+'"'+' style="padding: 15px; border: solid 0.6px #cccccc; border-radius: 4px"> <h6 class="page-header" style="font-weight: 700">'+$("#produit_id option:selected").text()+'</h6><div class="">';
                var qt =Object.entries(qt);

                for(var i=0; i<qt.length;i++){

                    //console.log(qt[i]);

                    var risque=qt[i][0];
                    var prs = qt[i][1];

                    //  console.log(prs);
                    html+='<h6 class="page-header">'+risque+'</h6><div class="questionnaire row">';
                    for(var j=0; j<prs.length; j++){
                        console.log(prs[j].question);
                        //console()
                        if(prs[j].question!=null){
                            html+='<div class="col-lg-4 col-md-4 col-sm-12"><h6>'+prs[j].question.name+'</h6><div class="choices">';
                            var choices = prs[j].question.choices;
                            // console.log(choices);
                            html+='<ul class="list-unstyled">';
                            for(var k=0; k<choices.length; k++){
                                //console.log(choices[k]);
                                html+='<li class=""><input data-id='+ choices[k].taux +' value='+ choices[k].id +' type="radio" name='+ prs[j].question.id +'>'+choices[k].name+'</li>';
                            }
                            html+='</ul></div></div>';
                        }

                    }
                    html+='</div>';

                }

                html+='</div></div>';

                $("#section-4").append(html);


            }
        });

        $('.remove-item').click(function(){
            $('#sect'+$(this).data('id')).remove();
            $(this).remove();
        });
    });

    $('#btn-seg-add').click(function(e){
        e.preventDefault();
        var qui=$('#qui').val();
        var quoi=$('#quoi').val();
        var quand=$('#quand').val();
        var ou = $('#ou').val();
        var pourquoi=$('#pourquoi').val();
        var combien = $('#combien').val();
        var table= $('#table-segments').find('tbody');
        var tr = '<tr data-qui="'+ qui +'" data-quoi="'+ quoi +'" data-quand= "'+ quand +'" data-combien= "'+ combien +'" data-ou="'+ ou +'" data-pourquoi="'+ pourquoi +'"><td>'+qui+'</td><td>'+quoi+'</td><td>'+ou+'</td><td>'+quand+'</td><td>'+combien+'</td><td>'+pourquoi+'</td><td class="remove"><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></td></tr>';
        console.log(tr);
        table.append(tr);
        $('.de').val('');

        $('.remove').click(function(e){
            $(this).parent().remove();
        });
    });

    $('#btn-con-add').click(function(e){
        e.preventDefault();
        var qui=$('#quic').val();
        var quoi=$('#quoic').val();
        var quand=$('#quandc').val();
        var ou = $('#ouc').val();
        var pourquoi=$('#pourquoic').val();
        var combien = $('#combienc').val();
        var va = $('#va').val();
        var sal = $('#sal').val();
        var cv = $('#cv').val();
        var cf = $('#cf').val();
        var mb = $('#mb').val();
        var ca = $('#ca').val();
        var ebe = $('#ebe').val();

        var table= $('#table-concurrents').find('tbody');
        var tr = '<tr data-qui="'+ qui +'" data-quoi="'+ quoi +'" data-quand= "'+ quand +'" data-combien= "'+ combien
            +'" data-ou="'+ ou +'" data-pourquoi="'+ pourquoi +'" data-ca="'+ ca +'" data-cv="'+ cv +'" data-mb="'+ mb +'" data-cf="'+ cf +'" data-va="'+ va +'" data-sal="'+ sal +'" data-ebe="'+ ebe
            +'"><td>'+qui+'</td><td>'+quoi+'</td><td>'+ou+'</td><td>'+quand+'</td>' +
            '<td>'+combien+'</td><td>'+pourquoi+'</td><td>'+ca+'</td><td>'+cv+'</td><td>'+mb+'</td><td>'+cf+'</td><td>'+va+'</td><td>'+sal+'</td><td>'+ebe+'</td><td class="removec"><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></td></tr>';
        console.log(tr);
        table.append(tr);
        $('.dec').val('');

        $('.removec').click(function(e){
            $(this).parent().remove();
        });
    });

    var url = '<?= $this->Url->build(['controller'=>'Dossiers','action'=>'saveJson']) ?>';
    var redirectUrl = '<?= $this->Url->build(['controller'=>'Dossiers','action'=>'view']) ?>';
    $('#btn-save').click(function(e){
        e.preventDefault();
        var table_conc = $('#table-concurrents').find('tbody');
        var table_seg= $('#table-segments').find('tbody');

        var trss=table_seg.find('tr');

        var segments = [];
            trss.each(function(){
            var elt={};
                elt.qui=$(this).data('qui');
                elt.quoi=$(this).data('quoi');
                elt.ou=$(this).data('ou');
                elt.quand=$(this).data('quand');
                elt.combien=$(this).data('combien');
                elt.pourquoi=$(this).data('pourqoui');
                segments.push(elt);
        });

        var trs=table_conc.find('tr');
        var concurrents = [];

        trs.each(function(){
            var elt={};
            elt.qui=$(this).data('qui');
            elt.quoi=$(this).data('quoi');
            elt.ou=$(this).data('ou');
            elt.quand=$(this).data('quand');
            elt.combien=$(this).data('combien');
            elt.pourquoi=$(this).data('pourqoui');
            elt.ca=$(this).data('ca');
            elt.cv=$(this).data('cv');
            elt.cf=$(this).data('cf');
            elt.mb=$(this).data('mb');
            elt.va=$(this).data('va');
            elt.sal=$(this).data('sal');
            elt.ebe=$(this).data('ebe');
            concurrents.push(elt);
        });

        var teaser={};
        teaser.contexte=$('#contexte').val();
        teaser.problematique=$('#problematique').val();
        teaser.marche=$('#marche').val();
        teaser.strategie=$('#strategie').val();
        teaser.chiffres=$('#chiffres').val();
        teaser.focus_realisations=$('#focus_realisations').val();
        teaser.body=$('#summernote5').val();
        var plan_dev_strat=$('#summernote4').val();
        var diag_obj_strat={};
        diag_obj_strat.synop=$('#synop').val();
        diag_obj_strat.synmen=$('#synmen').val();
        diag_obj_strat.synfor=$('#synfore').val();
        diag_obj_strat.synfaib=$('#synfaibe').val();
        diag_obj_strat.def_obj_strat=$('#summernote3').val();
        var ana_diag_exter = $('#summernote2').val();

        var analyse_env={};
        analyse_env.ps_op=$("#ps").find('td').first().text();
        analyse_env.ps_men=$("#ps").find('td').last().text();
        analyse_env.cmep_op=$("#cmep").find('td').first().text();
        analyse_env.cmep_men=$("#cmep").find('td').last().text();
        analyse_env.asc_op=$("#asc").find('td').first().text();
        analyse_env.asc_men=$("#asc").find('td').last().text();
        analyse_env.et_op=$("#et").find('td').first().text();
        analyse_env.et_men=$("#et").find('td').last().text();
        analyse_env.iep_op=$("#iep").find('td').first().text();
        analyse_env.iep_men=$("#iep").find('td').last().text();
        analyse_env.crp_op=$("#crp").find('td').first().text();
        analyse_env.crp_men=$("#crp").find('td').last().text();
        analyse_env.pnf_op=$("#pnf").find('td').first().text();
        analyse_env.pnf_men=$("#pnf").find('td').last().text();
        analyse_env.pnc_op=$("#pnc").find('td').first().text();
        analyse_env.pnc_men=$("#pnc").find('td').last().text();
        analyse_env.pps_op=$("#pps").find('td').first().text();
        analyse_env.pps_men=$("#pps").find('td').last().text();
        analyse_env.ic_op=$("#ic").find('td').first().text();
        analyse_env.ic_men=$("#ic").find('td').last().text();
        var ana_diag_int = $("#summernote").val();


        var ratios = {};
        ratios.capitaux_propres1=$("#capitaux_propres1").val();
        ratios.capitaux_propres2=$("#capitaux_propres2").val();
        ratios.capitaux_propres3=$("#capitaux_propres3").val();
        ratios.ratio_auto_fin1=$("#ratio_auto_fin1").val();
        ratios.ratio_auto_fin2=$("#ratio_auto_fin2").val();
        ratios.ratio_auto_fin3=$("#ratio_auto_fin3").val();
        ratios.ratio_endettement_net1=$("#ratio_endettement_net1").val();
        ratios.ratio_endettement_net2=$("#ratio_endettement_net2").val();
        ratios.ratio_endettement_net3=$("#ratio_endettement_net3").val();
        ratios.ratio_liquidite_gen1=$("#ratio_liquidite_gen1").val();
        ratios.ratio_liquidite_gen2=$("#ratio_liquidite_gen2").val();
        ratios.ratio_liquidite_gen3=$("#ratio_liquidite_gen3").val();
        ratios.ratio_couv_emploi_stables1=$("#ratio_couv_emploi_stables1").val();
        ratios.ratio_couv_emploi_stables2=$("#ratio_couv_emploi_stables2").val();
        ratios.ratio_couv_emploi_stables3=$("#ratio_couv_emploi_stables3").val();
        ratios.ratio_vetuite_immo1=$("#ratio_vetuite_immo1").val();
        ratios.ratio_vetuite_immo2=$("#ratio_vetuite_immo2").val();
        ratios.ratio_vetuite_immo3=$("#ratio_vetuite_immo3").val();
        ratios.delais_paie_clients1=$("#delais_paie_clients1").val();
        ratios.delais_paie_clients2=$("#delais_paie_clients2").val();
        ratios.delais_paie_clients3=$("#delais_paie_clients3").val();
        ratios.delais_paie_frn1=$("#delais_paie_frn1").val();
        ratios.delais_paie_frn2=$("#delais_paie_frn2").val();
        ratios.delais_paie_frn3=$("#delais_paie_frn3").val();
        ratios.rentabilite_capitaux_propres1=$("#rentabilite_capitaux_propres1").val();
        ratios.rentabilite_capitaux_propres2=$("#rentabilite_capitaux_propres2").val();
        ratios.rentabilite_capitaux_propres3=$("#rentabilite_capitaux_propres3").val();

        var grd_eq_fin={};
        grd_eq_fin.ress_dur1=$("#ress_dur1").val();
        grd_eq_fin.ress_dur2=$("#ress_dur2").val();
        grd_eq_fin.ress_dur3=$("#ress_dur3").val();
        grd_eq_fin.actifs_immo1=$("#actifs_immo1").val();
        grd_eq_fin.actifs_immo2=$("#actifs_immo2").val();
        grd_eq_fin.actifs_immo3=$("#actifs_immo3").val();
        grd_eq_fin.creances1=$("#creances1").val();
        grd_eq_fin.creances2=$("#creances2").val();
        grd_eq_fin.creances3=$("#creances3").val();
        grd_eq_fin.stocks1=$("#stocks1").val();
        grd_eq_fin.stocks2=$("#stocks2").val();
        grd_eq_fin.stocks3=$("#stocks3").val();
        grd_eq_fin.dettes1=$("#dettes1").val();
        grd_eq_fin.dettes2=$("#dettes2").val();
        grd_eq_fin.dettes3=$("#dettes3").val();

        var compte_expl={};
        compte_expl.ca1=$('#ca1').val();
        compte_expl.ca2=$('#ca2').val();
        compte_expl.ca3=$('#ca3').val();
        compte_expl.cv1=$('#cv1').val();
        compte_expl.cv2=$('#cv2').val();
        compte_expl.cv3=$('#cv3').val();
        compte_expl.cf1=$('#cf1').val();
        compte_expl.cf2=$('#cf2').val();
        compte_expl.cf3=$('#cf3').val();
        compte_expl.salaires1=$('#salaires1').val();
        compte_expl.salaires2=$('#salaires2').val();
        compte_expl.salaires3=$('#salaires3').val();
        compte_expl.dap1=$('#dap1').val();
        compte_expl.dap2=$('#dap2').val();
        compte_expl.dap3=$('#dap3').val();

        compte_expl.pf1=$('#pf1').val();
        compte_expl.pf2=$('#pf2').val();
        compte_expl.pf3=$('#pf3').val();

        compte_expl.cfi1=$('#cfi1').val();
        compte_expl.cfi2=$('#cfi2').val();
        compte_expl.cfi3=$('#cfi3').val();

        compte_expl.pe1=$('#pe1').val();
        compte_expl.pe2=$('#pe2').val();
        compte_expl.pe3=$('#pe3').val();

        compte_expl.ce1=$('#ce1').val();
        compte_expl.ce2=$('#ce2').val();
        compte_expl.ce3=$('#ce3').val();

        compte_expl.impots1=$('#impots1').val();
        compte_expl.impots2=$('#impots2').val();
        compte_expl.impots3=$('#impots3').val();

        var dossier={};
        dossier.name = $('#name').val();
        dossier.montant=$('#montant').val();
        dossier.apport_personnel=$('#apport_personnel').val();
        dossier.apport_associes=$('#apport_associes').val();
        dossier.compte_id=$('#compte_id').val();


        var reponses=[];

        $('.questionnaire').find('ul').find('li').find('input:checked').each(function(){
            var elt = {};
            elt.choice_id=$(this).val();
            elt.question_id=$(this).prop('name');
            reponses.push(elt);
             console.log($(this).data('id') +'---- name: '+$(this).prop('name')+'------------value: '+$(this).val());
        });
        var produits=[];
        $('#list-produit').find('li').each(function(){
            produits.push($(this).data('id'));
        });

        /*console.log(teaser);
        console.log(reponses);
        console.log('dossier : '+ dossier);
        console.log('compte exploitation: '+ compte_expl);
        console.log('concurrents: '+concurrents);
        console.log('segments: '+segments);
        console.log('grd eq fin: '+grd_eq_fin);
        console.log('analyse envir :'+analyse_env);
        console.log('analyse diag inter: '+ana_diag_int);
        console.log('analyse diag exter: '+ana_diag_exter);
        console.log('ratios: '+ ratios);*/


        $.ajax({
            url:url,
            type:'Post',
            dataType:'JSON',
            data:{_csrf:$('#csrf').val(), answers:reponses, dossier:dossier,produits:produits,teaser:teaser,compte_expl:compte_expl,
                concurrents:concurrents,segments:segments,grd_eq_fin:grd_eq_fin,analyse_env:analyse_env,analyse_diag_int:ana_diag_int,analyse_diag_ext:ana_diag_exter,
                ratios:ratios,plan_dev_strat:plan_dev_strat,diag_obj_strat:diag_obj_strat},
            beforeSend:function(xhr){
                xhr.setRequestHeader('X-CSRF-Token',$('#csrf').val());
                console.log("requete declenchee!!!!");
                // $('#btn-save').hide();
            },
            success: function(data){
               // $('#btn-save').show();
               // window.location.replace(redirectUrl+"/"+data);
                console.log(data);
            },
            Error:function(){
               // $('#btn-save').show();
            }
        });


    });
</script>