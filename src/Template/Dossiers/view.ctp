<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dossier $dossier
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dossier'), ['action' => 'edit', $dossier->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dossier'), ['action' => 'delete', $dossier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dossier->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dossiers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dossier'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teasers'), ['controller' => 'Teasers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teaser'), ['controller' => 'Teasers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produits'), ['controller' => 'Produits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produit'), ['controller' => 'Produits', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dossiers view large-9 medium-8 columns content">
    <h3><?= h($dossier->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($dossier->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($dossier->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($dossier->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= h($dossier->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($dossier->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($dossier->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Representant') ?></th>
            <td><?= h($dossier->representant) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dossier->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner Id') ?></th>
            <td><?= $this->Number->format($dossier->owner_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Id') ?></th>
            <td><?= $this->Number->format($dossier->client_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Autor Id') ?></th>
            <td><?= $this->Number->format($dossier->autor_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Produit Id') ?></th>
            <td><?= $this->Number->format($dossier->produit_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ca1') ?></th>
            <td><?= $this->Number->format($dossier->ca1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ca2') ?></th>
            <td><?= $this->Number->format($dossier->ca2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ca3') ?></th>
            <td><?= $this->Number->format($dossier->ca3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cout1') ?></th>
            <td><?= $this->Number->format($dossier->cout1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cout2') ?></th>
            <td><?= $this->Number->format($dossier->cout2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cout3') ?></th>
            <td><?= $this->Number->format($dossier->cout3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delai') ?></th>
            <td><?= $this->Number->format($dossier->delai) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apport Personnel') ?></th>
            <td><?= $this->Number->format($dossier->apport_personnel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apport Associes') ?></th>
            <td><?= $this->Number->format($dossier->apport_associes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emprunt') ?></th>
            <td><?= $this->Number->format($dossier->emprunt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timmobilisation Id') ?></th>
            <td><?= $this->Number->format($dossier->timmobilisation_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mfinancement Id') ?></th>
            <td><?= $this->Number->format($dossier->mfinancement_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Suivi') ?></th>
            <td><?= $this->Number->format($dossier->suivi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expert Id') ?></th>
            <td><?= $this->Number->format($dossier->expert_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cv1') ?></th>
            <td><?= $this->Number->format($dossier->cv1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cv2') ?></th>
            <td><?= $this->Number->format($dossier->cv2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cv3') ?></th>
            <td><?= $this->Number->format($dossier->cv3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cf1') ?></th>
            <td><?= $this->Number->format($dossier->cf1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cf2') ?></th>
            <td><?= $this->Number->format($dossier->cf2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cf3') ?></th>
            <td><?= $this->Number->format($dossier->cf3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salaires1') ?></th>
            <td><?= $this->Number->format($dossier->salaires1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salaires2') ?></th>
            <td><?= $this->Number->format($dossier->salaires2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salaires3') ?></th>
            <td><?= $this->Number->format($dossier->salaires3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dap1') ?></th>
            <td><?= $this->Number->format($dossier->dap1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dap2') ?></th>
            <td><?= $this->Number->format($dossier->dap2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dap3') ?></th>
            <td><?= $this->Number->format($dossier->dap3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pf1') ?></th>
            <td><?= $this->Number->format($dossier->pf1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pf2') ?></th>
            <td><?= $this->Number->format($dossier->pf2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pf3') ?></th>
            <td><?= $this->Number->format($dossier->pf3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cfi1') ?></th>
            <td><?= $this->Number->format($dossier->cfi1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cfi2') ?></th>
            <td><?= $this->Number->format($dossier->cfi2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cfi3') ?></th>
            <td><?= $this->Number->format($dossier->cfi3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pe1') ?></th>
            <td><?= $this->Number->format($dossier->pe1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pe2') ?></th>
            <td><?= $this->Number->format($dossier->pe2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pe3') ?></th>
            <td><?= $this->Number->format($dossier->pe3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Impots1') ?></th>
            <td><?= $this->Number->format($dossier->impots1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Impots2') ?></th>
            <td><?= $this->Number->format($dossier->impots2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Impots3') ?></th>
            <td><?= $this->Number->format($dossier->impots3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ress Durable1') ?></th>
            <td><?= $this->Number->format($dossier->ress_durable1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ress Durable2') ?></th>
            <td><?= $this->Number->format($dossier->ress_durable2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ress Durable3') ?></th>
            <td><?= $this->Number->format($dossier->ress_durable3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actifs Immo1') ?></th>
            <td><?= $this->Number->format($dossier->actifs_immo1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actifs Immo2') ?></th>
            <td><?= $this->Number->format($dossier->actifs_immo2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actifs Immo3') ?></th>
            <td><?= $this->Number->format($dossier->actifs_immo3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creances1') ?></th>
            <td><?= $this->Number->format($dossier->creances1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creances2') ?></th>
            <td><?= $this->Number->format($dossier->creances2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creances3') ?></th>
            <td><?= $this->Number->format($dossier->creances3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stocks1') ?></th>
            <td><?= $this->Number->format($dossier->stocks1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stocks2') ?></th>
            <td><?= $this->Number->format($dossier->stocks2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stocks3') ?></th>
            <td><?= $this->Number->format($dossier->stocks3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dettes1') ?></th>
            <td><?= $this->Number->format($dossier->dettes1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dettes2') ?></th>
            <td><?= $this->Number->format($dossier->dettes2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dettes3') ?></th>
            <td><?= $this->Number->format($dossier->dettes3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capitaux Propres1') ?></th>
            <td><?= $this->Number->format($dossier->capitaux_propres1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capitaux Propres2') ?></th>
            <td><?= $this->Number->format($dossier->capitaux_propres2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capitaux Propres3') ?></th>
            <td><?= $this->Number->format($dossier->capitaux_propres3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ratio Auto Fin1') ?></th>
            <td><?= $this->Number->format($dossier->ratio_auto_fin1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ratio Auto Fin2') ?></th>
            <td><?= $this->Number->format($dossier->ratio_auto_fin2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ratio Auto Fin3') ?></th>
            <td><?= $this->Number->format($dossier->ratio_auto_fin3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ratio Endettement Net1') ?></th>
            <td><?= $this->Number->format($dossier->ratio_endettement_net1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ratio Endettement Net2') ?></th>
            <td><?= $this->Number->format($dossier->ratio_endettement_net2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ratio Endettement Net3') ?></th>
            <td><?= $this->Number->format($dossier->ratio_endettement_net3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ratio Liquidite Gen1') ?></th>
            <td><?= $this->Number->format($dossier->ratio_liquidite_gen1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ratio Liquidite Gen2') ?></th>
            <td><?= $this->Number->format($dossier->ratio_liquidite_gen2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ratio Liquidite Gen3') ?></th>
            <td><?= $this->Number->format($dossier->ratio_liquidite_gen3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ratio Couv Emploi Stables1') ?></th>
            <td><?= $this->Number->format($dossier->ratio_couv_emploi_stables1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ratio Couv Emploi Stables2') ?></th>
            <td><?= $this->Number->format($dossier->ratio_couv_emploi_stables2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ratio Couv Emploi Stables3') ?></th>
            <td><?= $this->Number->format($dossier->ratio_couv_emploi_stables3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ratio Vetuite Immo1') ?></th>
            <td><?= $this->Number->format($dossier->ratio_vetuite_immo1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ratio Vetuite Immo2') ?></th>
            <td><?= $this->Number->format($dossier->ratio_vetuite_immo2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ratio Vetuite Immo3') ?></th>
            <td><?= $this->Number->format($dossier->ratio_vetuite_immo3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delais Paie Clients1') ?></th>
            <td><?= $this->Number->format($dossier->delais_paie_clients1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delais Paie Clients2') ?></th>
            <td><?= $this->Number->format($dossier->delais_paie_clients2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delais Paie Clients3') ?></th>
            <td><?= $this->Number->format($dossier->delais_paie_clients3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delais Paie Frn1') ?></th>
            <td><?= $this->Number->format($dossier->delais_paie_frn1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delais Paie Frn2') ?></th>
            <td><?= $this->Number->format($dossier->delais_paie_frn2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delais Paie Frn3') ?></th>
            <td><?= $this->Number->format($dossier->delais_paie_frn3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rentabilite Capitaux Propres1') ?></th>
            <td><?= $this->Number->format($dossier->rentabilite_capitaux_propres1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rentabilite Capitaux Propres2') ?></th>
            <td><?= $this->Number->format($dossier->rentabilite_capitaux_propres2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rentabilite Capitaux Propres3') ?></th>
            <td><?= $this->Number->format($dossier->rentabilite_capitaux_propres3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $dossier->active ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Archive') ?></th>
            <td><?= $dossier->archive ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Retard') ?></th>
            <td><?= $dossier->retard ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Commentaire') ?></h4>
        <?= $this->Text->autoParagraph(h($dossier->commentaire)); ?>
    </div>
    <div class="row">
        <h4><?= __('Analyse Diag Interne') ?></h4>
        <?= $this->Text->autoParagraph(h($dossier->analyse_diag_interne)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Produits') ?></h4>
        <?php if (!empty($dossier->produits)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Sector Id') ?></th>
                <th scope="col"><?= __('Service') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($dossier->produits as $produits): ?>
            <tr>
                <td><?= h($produits->id) ?></td>
                <td><?= h($produits->name) ?></td>
                <td><?= h($produits->sector_id) ?></td>
                <td><?= h($produits->service) ?></td>
                <td><?= h($produits->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Produits', 'action' => 'view', $produits->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Produits', 'action' => 'edit', $produits->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Produits', 'action' => 'delete', $produits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produits->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Teasers') ?></h4>
        <?php if (!empty($dossier->teasers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Dossier Id') ?></th>
                <th scope="col"><?= __('Body') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Contexte') ?></th>
                <th scope="col"><?= __('Problematique') ?></th>
                <th scope="col"><?= __('Solution') ?></th>
                <th scope="col"><?= __('Marche') ?></th>
                <th scope="col"><?= __('Strategie') ?></th>
                <th scope="col"><?= __('Chiffres') ?></th>
                <th scope="col"><?= __('Focus Realisations') ?></th>
                <th scope="col"><?= __('Montant Levee Fonds') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($dossier->teasers as $teasers): ?>
            <tr>
                <td><?= h($teasers->id) ?></td>
                <td><?= h($teasers->name) ?></td>
                <td><?= h($teasers->dossier_id) ?></td>
                <td><?= h($teasers->body) ?></td>
                <td><?= h($teasers->created) ?></td>
                <td><?= h($teasers->contexte) ?></td>
                <td><?= h($teasers->problematique) ?></td>
                <td><?= h($teasers->solution) ?></td>
                <td><?= h($teasers->marche) ?></td>
                <td><?= h($teasers->strategie) ?></td>
                <td><?= h($teasers->chiffres) ?></td>
                <td><?= h($teasers->focus_realisations) ?></td>
                <td><?= h($teasers->montant_levee_fonds) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Teasers', 'action' => 'view', $teasers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Teasers', 'action' => 'edit', $teasers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Teasers', 'action' => 'delete', $teasers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teasers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
