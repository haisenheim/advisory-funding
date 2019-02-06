<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dossier $dossier
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dossiers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Teasers'), ['controller' => 'Teasers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teaser'), ['controller' => 'Teasers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produits'), ['controller' => 'Produits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produit'), ['controller' => 'Produits', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dossiers form large-9 medium-8 columns content">
    <?= $this->Form->create($dossier) ?>
    <fieldset>
        <legend><?= __('Add Dossier') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('owner_id');
            echo $this->Form->control('client_id');
            echo $this->Form->control('autor_id');
            echo $this->Form->control('produit_id');
            echo $this->Form->control('ca1');
            echo $this->Form->control('ca2');
            echo $this->Form->control('ca3');
            echo $this->Form->control('cout1');
            echo $this->Form->control('cout2');
            echo $this->Form->control('cout3');
            echo $this->Form->control('delai');
            echo $this->Form->control('apport_personnel');
            echo $this->Form->control('apport_associes');
            echo $this->Form->control('emprunt');
            echo $this->Form->control('timmobilisation_id');
            echo $this->Form->control('mfinancement_id');
            echo $this->Form->control('commentaire');
            echo $this->Form->control('telephone');
            echo $this->Form->control('mobile');
            echo $this->Form->control('email');
            echo $this->Form->control('adresse');
            echo $this->Form->control('representant');
            echo $this->Form->control('active');
            echo $this->Form->control('archive');
            echo $this->Form->control('suivi');
            echo $this->Form->control('expert_id');
            echo $this->Form->control('retard');
            echo $this->Form->control('cv1');
            echo $this->Form->control('cv2');
            echo $this->Form->control('cv3');
            echo $this->Form->control('cf1');
            echo $this->Form->control('cf2');
            echo $this->Form->control('cf3');
            echo $this->Form->control('salaires1');
            echo $this->Form->control('salaires2');
            echo $this->Form->control('salaires3');
            echo $this->Form->control('dap1');
            echo $this->Form->control('dap2');
            echo $this->Form->control('dap3');
            echo $this->Form->control('pf1');
            echo $this->Form->control('pf2');
            echo $this->Form->control('pf3');
            echo $this->Form->control('cfi1');
            echo $this->Form->control('cfi2');
            echo $this->Form->control('cfi3');
            echo $this->Form->control('pe1');
            echo $this->Form->control('pe2');
            echo $this->Form->control('pe3');
            echo $this->Form->control('impots1');
            echo $this->Form->control('impots2');
            echo $this->Form->control('impots3');
            echo $this->Form->control('ress_durable1');
            echo $this->Form->control('ress_durable2');
            echo $this->Form->control('ress_durable3');
            echo $this->Form->control('actifs_immo1');
            echo $this->Form->control('actifs_immo2');
            echo $this->Form->control('actifs_immo3');
            echo $this->Form->control('creances1');
            echo $this->Form->control('creances2');
            echo $this->Form->control('creances3');
            echo $this->Form->control('stocks1');
            echo $this->Form->control('stocks2');
            echo $this->Form->control('stocks3');
            echo $this->Form->control('dettes1');
            echo $this->Form->control('dettes2');
            echo $this->Form->control('dettes3');
            echo $this->Form->control('capitaux_propres1');
            echo $this->Form->control('capitaux_propres2');
            echo $this->Form->control('capitaux_propres3');
            echo $this->Form->control('ratio_auto_fin1');
            echo $this->Form->control('ratio_auto_fin2');
            echo $this->Form->control('ratio_auto_fin3');
            echo $this->Form->control('ratio_endettement_net1');
            echo $this->Form->control('ratio_endettement_net2');
            echo $this->Form->control('ratio_endettement_net3');
            echo $this->Form->control('ratio_liquidite_gen1');
            echo $this->Form->control('ratio_liquidite_gen2');
            echo $this->Form->control('ratio_liquidite_gen3');
            echo $this->Form->control('ratio_couv_emploi_stables1');
            echo $this->Form->control('ratio_couv_emploi_stables2');
            echo $this->Form->control('ratio_couv_emploi_stables3');
            echo $this->Form->control('ratio_vetuite_immo1');
            echo $this->Form->control('ratio_vetuite_immo2');
            echo $this->Form->control('ratio_vetuite_immo3');
            echo $this->Form->control('delais_paie_clients1');
            echo $this->Form->control('delais_paie_clients2');
            echo $this->Form->control('delais_paie_clients3');
            echo $this->Form->control('delais_paie_frn1');
            echo $this->Form->control('delais_paie_frn2');
            echo $this->Form->control('delais_paie_frn3');
            echo $this->Form->control('rentabilite_capitaux_propres1');
            echo $this->Form->control('rentabilite_capitaux_propres2');
            echo $this->Form->control('rentabilite_capitaux_propres3');
            echo $this->Form->control('analyse_diag_interne');
            echo $this->Form->control('produits._ids', ['options' => $produits]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
