<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produit $produit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Produit'), ['action' => 'edit', $produit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produit'), ['action' => 'delete', $produit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Produits'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sectors'), ['controller' => 'Sectors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sector'), ['controller' => 'Sectors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dossiers'), ['controller' => 'Dossiers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dossier'), ['controller' => 'Dossiers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produits view large-9 medium-8 columns content">
    <h3><?= h($produit->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($produit->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sector') ?></th>
            <td><?= $produit->has('sector') ? $this->Html->link($produit->sector->name, ['controller' => 'Sectors', 'action' => 'view', $produit->sector->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($produit->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service') ?></th>
            <td><?= $produit->service ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $produit->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Dossiers') ?></h4>
        <?php if (!empty($produit->dossiers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Compte Id') ?></th>
                <th scope="col"><?= __('Autor Id') ?></th>
                <th scope="col"><?= __('Ca1') ?></th>
                <th scope="col"><?= __('Ca2') ?></th>
                <th scope="col"><?= __('Ca3') ?></th>
                <th scope="col"><?= __('Cout1') ?></th>
                <th scope="col"><?= __('Cout2') ?></th>
                <th scope="col"><?= __('Cout3') ?></th>
                <th scope="col"><?= __('Delai') ?></th>
                <th scope="col"><?= __('Apport Personnel') ?></th>
                <th scope="col"><?= __('Apport Associes') ?></th>
                <th scope="col"><?= __('Emprunt') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Archive') ?></th>
                <th scope="col"><?= __('Suivi') ?></th>
                <th scope="col"><?= __('Expert Id') ?></th>
                <th scope="col"><?= __('Retard') ?></th>
                <th scope="col"><?= __('Cv1') ?></th>
                <th scope="col"><?= __('Cv2') ?></th>
                <th scope="col"><?= __('Cv3') ?></th>
                <th scope="col"><?= __('Cf1') ?></th>
                <th scope="col"><?= __('Cf2') ?></th>
                <th scope="col"><?= __('Cf3') ?></th>
                <th scope="col"><?= __('Salaires1') ?></th>
                <th scope="col"><?= __('Salaires2') ?></th>
                <th scope="col"><?= __('Salaires3') ?></th>
                <th scope="col"><?= __('Dap1') ?></th>
                <th scope="col"><?= __('Dap2') ?></th>
                <th scope="col"><?= __('Dap3') ?></th>
                <th scope="col"><?= __('Pf1') ?></th>
                <th scope="col"><?= __('Pf2') ?></th>
                <th scope="col"><?= __('Pf3') ?></th>
                <th scope="col"><?= __('Cfi1') ?></th>
                <th scope="col"><?= __('Cfi2') ?></th>
                <th scope="col"><?= __('Cfi3') ?></th>
                <th scope="col"><?= __('Pe1') ?></th>
                <th scope="col"><?= __('Pe2') ?></th>
                <th scope="col"><?= __('Pe3') ?></th>
                <th scope="col"><?= __('Impots1') ?></th>
                <th scope="col"><?= __('Impots2') ?></th>
                <th scope="col"><?= __('Impots3') ?></th>
                <th scope="col"><?= __('Ress Durable1') ?></th>
                <th scope="col"><?= __('Ress Durable2') ?></th>
                <th scope="col"><?= __('Ress Durable3') ?></th>
                <th scope="col"><?= __('Actifs Immo1') ?></th>
                <th scope="col"><?= __('Actifs Immo2') ?></th>
                <th scope="col"><?= __('Actifs Immo3') ?></th>
                <th scope="col"><?= __('Creances1') ?></th>
                <th scope="col"><?= __('Creances2') ?></th>
                <th scope="col"><?= __('Creances3') ?></th>
                <th scope="col"><?= __('Stocks1') ?></th>
                <th scope="col"><?= __('Stocks2') ?></th>
                <th scope="col"><?= __('Stocks3') ?></th>
                <th scope="col"><?= __('Dettes1') ?></th>
                <th scope="col"><?= __('Dettes2') ?></th>
                <th scope="col"><?= __('Dettes3') ?></th>
                <th scope="col"><?= __('Capitaux Propres1') ?></th>
                <th scope="col"><?= __('Capitaux Propres2') ?></th>
                <th scope="col"><?= __('Capitaux Propres3') ?></th>
                <th scope="col"><?= __('Ratio Auto Fin1') ?></th>
                <th scope="col"><?= __('Ratio Auto Fin2') ?></th>
                <th scope="col"><?= __('Ratio Auto Fin3') ?></th>
                <th scope="col"><?= __('Ratio Endettement Net1') ?></th>
                <th scope="col"><?= __('Ratio Endettement Net2') ?></th>
                <th scope="col"><?= __('Ratio Endettement Net3') ?></th>
                <th scope="col"><?= __('Ratio Liquidite Gen1') ?></th>
                <th scope="col"><?= __('Ratio Liquidite Gen2') ?></th>
                <th scope="col"><?= __('Ratio Liquidite Gen3') ?></th>
                <th scope="col"><?= __('Ratio Couv Emploi Stables1') ?></th>
                <th scope="col"><?= __('Ratio Couv Emploi Stables2') ?></th>
                <th scope="col"><?= __('Ratio Couv Emploi Stables3') ?></th>
                <th scope="col"><?= __('Ratio Vetuite Immo1') ?></th>
                <th scope="col"><?= __('Ratio Vetuite Immo2') ?></th>
                <th scope="col"><?= __('Ratio Vetuite Immo3') ?></th>
                <th scope="col"><?= __('Delais Paie Clients1') ?></th>
                <th scope="col"><?= __('Delais Paie Clients2') ?></th>
                <th scope="col"><?= __('Delais Paie Clients3') ?></th>
                <th scope="col"><?= __('Delais Paie Frn1') ?></th>
                <th scope="col"><?= __('Delais Paie Frn2') ?></th>
                <th scope="col"><?= __('Delais Paie Frn3') ?></th>
                <th scope="col"><?= __('Rentabilite Capitaux Propres1') ?></th>
                <th scope="col"><?= __('Rentabilite Capitaux Propres2') ?></th>
                <th scope="col"><?= __('Rentabilite Capitaux Propres3') ?></th>
                <th scope="col"><?= __('Analyse Diag Interne') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($produit->dossiers as $dossiers): ?>
            <tr>
                <td><?= h($dossiers->id) ?></td>
                <td><?= h($dossiers->name) ?></td>
                <td><?= h($dossiers->created) ?></td>
                <td><?= h($dossiers->compte_id) ?></td>
                <td><?= h($dossiers->autor_id) ?></td>
                <td><?= h($dossiers->ca1) ?></td>
                <td><?= h($dossiers->ca2) ?></td>
                <td><?= h($dossiers->ca3) ?></td>
                <td><?= h($dossiers->cout1) ?></td>
                <td><?= h($dossiers->cout2) ?></td>
                <td><?= h($dossiers->cout3) ?></td>
                <td><?= h($dossiers->delai) ?></td>
                <td><?= h($dossiers->apport_personnel) ?></td>
                <td><?= h($dossiers->apport_associes) ?></td>
                <td><?= h($dossiers->emprunt) ?></td>
                <td><?= h($dossiers->active) ?></td>
                <td><?= h($dossiers->archive) ?></td>
                <td><?= h($dossiers->suivi) ?></td>
                <td><?= h($dossiers->expert_id) ?></td>
                <td><?= h($dossiers->retard) ?></td>
                <td><?= h($dossiers->cv1) ?></td>
                <td><?= h($dossiers->cv2) ?></td>
                <td><?= h($dossiers->cv3) ?></td>
                <td><?= h($dossiers->cf1) ?></td>
                <td><?= h($dossiers->cf2) ?></td>
                <td><?= h($dossiers->cf3) ?></td>
                <td><?= h($dossiers->salaires1) ?></td>
                <td><?= h($dossiers->salaires2) ?></td>
                <td><?= h($dossiers->salaires3) ?></td>
                <td><?= h($dossiers->dap1) ?></td>
                <td><?= h($dossiers->dap2) ?></td>
                <td><?= h($dossiers->dap3) ?></td>
                <td><?= h($dossiers->pf1) ?></td>
                <td><?= h($dossiers->pf2) ?></td>
                <td><?= h($dossiers->pf3) ?></td>
                <td><?= h($dossiers->cfi1) ?></td>
                <td><?= h($dossiers->cfi2) ?></td>
                <td><?= h($dossiers->cfi3) ?></td>
                <td><?= h($dossiers->pe1) ?></td>
                <td><?= h($dossiers->pe2) ?></td>
                <td><?= h($dossiers->pe3) ?></td>
                <td><?= h($dossiers->impots1) ?></td>
                <td><?= h($dossiers->impots2) ?></td>
                <td><?= h($dossiers->impots3) ?></td>
                <td><?= h($dossiers->ress_durable1) ?></td>
                <td><?= h($dossiers->ress_durable2) ?></td>
                <td><?= h($dossiers->ress_durable3) ?></td>
                <td><?= h($dossiers->actifs_immo1) ?></td>
                <td><?= h($dossiers->actifs_immo2) ?></td>
                <td><?= h($dossiers->actifs_immo3) ?></td>
                <td><?= h($dossiers->creances1) ?></td>
                <td><?= h($dossiers->creances2) ?></td>
                <td><?= h($dossiers->creances3) ?></td>
                <td><?= h($dossiers->stocks1) ?></td>
                <td><?= h($dossiers->stocks2) ?></td>
                <td><?= h($dossiers->stocks3) ?></td>
                <td><?= h($dossiers->dettes1) ?></td>
                <td><?= h($dossiers->dettes2) ?></td>
                <td><?= h($dossiers->dettes3) ?></td>
                <td><?= h($dossiers->capitaux_propres1) ?></td>
                <td><?= h($dossiers->capitaux_propres2) ?></td>
                <td><?= h($dossiers->capitaux_propres3) ?></td>
                <td><?= h($dossiers->ratio_auto_fin1) ?></td>
                <td><?= h($dossiers->ratio_auto_fin2) ?></td>
                <td><?= h($dossiers->ratio_auto_fin3) ?></td>
                <td><?= h($dossiers->ratio_endettement_net1) ?></td>
                <td><?= h($dossiers->ratio_endettement_net2) ?></td>
                <td><?= h($dossiers->ratio_endettement_net3) ?></td>
                <td><?= h($dossiers->ratio_liquidite_gen1) ?></td>
                <td><?= h($dossiers->ratio_liquidite_gen2) ?></td>
                <td><?= h($dossiers->ratio_liquidite_gen3) ?></td>
                <td><?= h($dossiers->ratio_couv_emploi_stables1) ?></td>
                <td><?= h($dossiers->ratio_couv_emploi_stables2) ?></td>
                <td><?= h($dossiers->ratio_couv_emploi_stables3) ?></td>
                <td><?= h($dossiers->ratio_vetuite_immo1) ?></td>
                <td><?= h($dossiers->ratio_vetuite_immo2) ?></td>
                <td><?= h($dossiers->ratio_vetuite_immo3) ?></td>
                <td><?= h($dossiers->delais_paie_clients1) ?></td>
                <td><?= h($dossiers->delais_paie_clients2) ?></td>
                <td><?= h($dossiers->delais_paie_clients3) ?></td>
                <td><?= h($dossiers->delais_paie_frn1) ?></td>
                <td><?= h($dossiers->delais_paie_frn2) ?></td>
                <td><?= h($dossiers->delais_paie_frn3) ?></td>
                <td><?= h($dossiers->rentabilite_capitaux_propres1) ?></td>
                <td><?= h($dossiers->rentabilite_capitaux_propres2) ?></td>
                <td><?= h($dossiers->rentabilite_capitaux_propres3) ?></td>
                <td><?= h($dossiers->analyse_diag_interne) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Dossiers', 'action' => 'view', $dossiers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Dossiers', 'action' => 'edit', $dossiers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dossiers', 'action' => 'delete', $dossiers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dossiers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
