<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dossier[]|\Cake\Collection\CollectionInterface $dossiers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dossier'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teasers'), ['controller' => 'Teasers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teaser'), ['controller' => 'Teasers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produits'), ['controller' => 'Produits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produit'), ['controller' => 'Produits', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dossiers index large-9 medium-8 columns content">
    <h3><?= __('Dossiers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('owner_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('autor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('produit_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ca1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ca2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ca3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cout1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cout2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cout3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delai') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apport_personnel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apport_associes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emprunt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('timmobilisation_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mfinancement_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('representant') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('archive') ?></th>
                <th scope="col"><?= $this->Paginator->sort('suivi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('expert_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('retard') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cv1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cv2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cv3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cf1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cf2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cf3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salaires1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salaires2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salaires3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dap1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dap2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dap3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pf1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pf2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pf3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cfi1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cfi2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cfi3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pe1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pe2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pe3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('impots1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('impots2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('impots3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ress_durable1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ress_durable2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ress_durable3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actifs_immo1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actifs_immo2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actifs_immo3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creances1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creances2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creances3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stocks1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stocks2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stocks3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dettes1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dettes2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dettes3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capitaux_propres1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capitaux_propres2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capitaux_propres3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ratio_auto_fin1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ratio_auto_fin2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ratio_auto_fin3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ratio_endettement_net1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ratio_endettement_net2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ratio_endettement_net3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ratio_liquidite_gen1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ratio_liquidite_gen2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ratio_liquidite_gen3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ratio_couv_emploi_stables1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ratio_couv_emploi_stables2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ratio_couv_emploi_stables3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ratio_vetuite_immo1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ratio_vetuite_immo2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ratio_vetuite_immo3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delais_paie_clients1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delais_paie_clients2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delais_paie_clients3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delais_paie_frn1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delais_paie_frn2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delais_paie_frn3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rentabilite_capitaux_propres1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rentabilite_capitaux_propres2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rentabilite_capitaux_propres3') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dossiers as $dossier): ?>
            <tr>
                <td><?= $this->Number->format($dossier->id) ?></td>
                <td><?= h($dossier->name) ?></td>
                <td><?= h($dossier->created) ?></td>
                <td><?= $this->Number->format($dossier->owner_id) ?></td>
                <td><?= $this->Number->format($dossier->client_id) ?></td>
                <td><?= $this->Number->format($dossier->autor_id) ?></td>
                <td><?= $this->Number->format($dossier->produit_id) ?></td>
                <td><?= $this->Number->format($dossier->ca1) ?></td>
                <td><?= $this->Number->format($dossier->ca2) ?></td>
                <td><?= $this->Number->format($dossier->ca3) ?></td>
                <td><?= $this->Number->format($dossier->cout1) ?></td>
                <td><?= $this->Number->format($dossier->cout2) ?></td>
                <td><?= $this->Number->format($dossier->cout3) ?></td>
                <td><?= $this->Number->format($dossier->delai) ?></td>
                <td><?= $this->Number->format($dossier->apport_personnel) ?></td>
                <td><?= $this->Number->format($dossier->apport_associes) ?></td>
                <td><?= $this->Number->format($dossier->emprunt) ?></td>
                <td><?= $this->Number->format($dossier->timmobilisation_id) ?></td>
                <td><?= $this->Number->format($dossier->mfinancement_id) ?></td>
                <td><?= h($dossier->telephone) ?></td>
                <td><?= h($dossier->mobile) ?></td>
                <td><?= h($dossier->email) ?></td>
                <td><?= h($dossier->adresse) ?></td>
                <td><?= h($dossier->representant) ?></td>
                <td><?= h($dossier->active) ?></td>
                <td><?= h($dossier->archive) ?></td>
                <td><?= $this->Number->format($dossier->suivi) ?></td>
                <td><?= $this->Number->format($dossier->expert_id) ?></td>
                <td><?= h($dossier->retard) ?></td>
                <td><?= $this->Number->format($dossier->cv1) ?></td>
                <td><?= $this->Number->format($dossier->cv2) ?></td>
                <td><?= $this->Number->format($dossier->cv3) ?></td>
                <td><?= $this->Number->format($dossier->cf1) ?></td>
                <td><?= $this->Number->format($dossier->cf2) ?></td>
                <td><?= $this->Number->format($dossier->cf3) ?></td>
                <td><?= $this->Number->format($dossier->salaires1) ?></td>
                <td><?= $this->Number->format($dossier->salaires2) ?></td>
                <td><?= $this->Number->format($dossier->salaires3) ?></td>
                <td><?= $this->Number->format($dossier->dap1) ?></td>
                <td><?= $this->Number->format($dossier->dap2) ?></td>
                <td><?= $this->Number->format($dossier->dap3) ?></td>
                <td><?= $this->Number->format($dossier->pf1) ?></td>
                <td><?= $this->Number->format($dossier->pf2) ?></td>
                <td><?= $this->Number->format($dossier->pf3) ?></td>
                <td><?= $this->Number->format($dossier->cfi1) ?></td>
                <td><?= $this->Number->format($dossier->cfi2) ?></td>
                <td><?= $this->Number->format($dossier->cfi3) ?></td>
                <td><?= $this->Number->format($dossier->pe1) ?></td>
                <td><?= $this->Number->format($dossier->pe2) ?></td>
                <td><?= $this->Number->format($dossier->pe3) ?></td>
                <td><?= $this->Number->format($dossier->impots1) ?></td>
                <td><?= $this->Number->format($dossier->impots2) ?></td>
                <td><?= $this->Number->format($dossier->impots3) ?></td>
                <td><?= $this->Number->format($dossier->ress_durable1) ?></td>
                <td><?= $this->Number->format($dossier->ress_durable2) ?></td>
                <td><?= $this->Number->format($dossier->ress_durable3) ?></td>
                <td><?= $this->Number->format($dossier->actifs_immo1) ?></td>
                <td><?= $this->Number->format($dossier->actifs_immo2) ?></td>
                <td><?= $this->Number->format($dossier->actifs_immo3) ?></td>
                <td><?= $this->Number->format($dossier->creances1) ?></td>
                <td><?= $this->Number->format($dossier->creances2) ?></td>
                <td><?= $this->Number->format($dossier->creances3) ?></td>
                <td><?= $this->Number->format($dossier->stocks1) ?></td>
                <td><?= $this->Number->format($dossier->stocks2) ?></td>
                <td><?= $this->Number->format($dossier->stocks3) ?></td>
                <td><?= $this->Number->format($dossier->dettes1) ?></td>
                <td><?= $this->Number->format($dossier->dettes2) ?></td>
                <td><?= $this->Number->format($dossier->dettes3) ?></td>
                <td><?= $this->Number->format($dossier->capitaux_propres1) ?></td>
                <td><?= $this->Number->format($dossier->capitaux_propres2) ?></td>
                <td><?= $this->Number->format($dossier->capitaux_propres3) ?></td>
                <td><?= $this->Number->format($dossier->ratio_auto_fin1) ?></td>
                <td><?= $this->Number->format($dossier->ratio_auto_fin2) ?></td>
                <td><?= $this->Number->format($dossier->ratio_auto_fin3) ?></td>
                <td><?= $this->Number->format($dossier->ratio_endettement_net1) ?></td>
                <td><?= $this->Number->format($dossier->ratio_endettement_net2) ?></td>
                <td><?= $this->Number->format($dossier->ratio_endettement_net3) ?></td>
                <td><?= $this->Number->format($dossier->ratio_liquidite_gen1) ?></td>
                <td><?= $this->Number->format($dossier->ratio_liquidite_gen2) ?></td>
                <td><?= $this->Number->format($dossier->ratio_liquidite_gen3) ?></td>
                <td><?= $this->Number->format($dossier->ratio_couv_emploi_stables1) ?></td>
                <td><?= $this->Number->format($dossier->ratio_couv_emploi_stables2) ?></td>
                <td><?= $this->Number->format($dossier->ratio_couv_emploi_stables3) ?></td>
                <td><?= $this->Number->format($dossier->ratio_vetuite_immo1) ?></td>
                <td><?= $this->Number->format($dossier->ratio_vetuite_immo2) ?></td>
                <td><?= $this->Number->format($dossier->ratio_vetuite_immo3) ?></td>
                <td><?= $this->Number->format($dossier->delais_paie_clients1) ?></td>
                <td><?= $this->Number->format($dossier->delais_paie_clients2) ?></td>
                <td><?= $this->Number->format($dossier->delais_paie_clients3) ?></td>
                <td><?= $this->Number->format($dossier->delais_paie_frn1) ?></td>
                <td><?= $this->Number->format($dossier->delais_paie_frn2) ?></td>
                <td><?= $this->Number->format($dossier->delais_paie_frn3) ?></td>
                <td><?= $this->Number->format($dossier->rentabilite_capitaux_propres1) ?></td>
                <td><?= $this->Number->format($dossier->rentabilite_capitaux_propres2) ?></td>
                <td><?= $this->Number->format($dossier->rentabilite_capitaux_propres3) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dossier->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dossier->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dossier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dossier->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
