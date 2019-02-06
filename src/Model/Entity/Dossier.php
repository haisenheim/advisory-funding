<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dossier Entity
 *
 * @property int $id
 * @property string $name
 * @property string $created
 * @property int $owner_id
 * @property int $client_id
 * @property int $autor_id
 * @property int $produit_id
 * @property int $ca1
 * @property int $ca2
 * @property int $ca3
 * @property int $cout1
 * @property int $cout2
 * @property int $cout3
 * @property int $delai
 * @property int $apport_personnel
 * @property int $apport_associes
 * @property int $emprunt
 * @property int $timmobilisation_id
 * @property int $mfinancement_id
 * @property string $commentaire
 * @property string $telephone
 * @property string $mobile
 * @property string $email
 * @property string $adresse
 * @property string $representant
 * @property bool $active
 * @property bool $archive
 * @property int $suivi
 * @property int $expert_id
 * @property bool $retard
 * @property int $cv1
 * @property int $cv2
 * @property int $cv3
 * @property int $cf1
 * @property int $cf2
 * @property int $cf3
 * @property int $salaires1
 * @property int $salaires2
 * @property int $salaires3
 * @property int $dap1
 * @property int $dap2
 * @property int $dap3
 * @property int $pf1
 * @property int $pf2
 * @property int $pf3
 * @property int $cfi1
 * @property int $cfi2
 * @property int $cfi3
 * @property int $pe1
 * @property int $pe2
 * @property int $pe3
 * @property int $impots1
 * @property int $impots2
 * @property int $impots3
 * @property int $ress_durable1
 * @property int $ress_durable2
 * @property int $ress_durable3
 * @property int $actifs_immo1
 * @property int $actifs_immo2
 * @property int $actifs_immo3
 * @property int $creances1
 * @property int $creances2
 * @property int $creances3
 * @property int $stocks1
 * @property int $stocks2
 * @property int $stocks3
 * @property int $dettes1
 * @property int $dettes2
 * @property int $dettes3
 * @property int $capitaux_propres1
 * @property int $capitaux_propres2
 * @property int $capitaux_propres3
 * @property int $ratio_auto_fin1
 * @property int $ratio_auto_fin2
 * @property int $ratio_auto_fin3
 * @property int $ratio_endettement_net1
 * @property int $ratio_endettement_net2
 * @property int $ratio_endettement_net3
 * @property int $ratio_liquidite_gen1
 * @property int $ratio_liquidite_gen2
 * @property int $ratio_liquidite_gen3
 * @property int $ratio_couv_emploi_stables1
 * @property int $ratio_couv_emploi_stables2
 * @property int $ratio_couv_emploi_stables3
 * @property int $ratio_vetuite_immo1
 * @property int $ratio_vetuite_immo2
 * @property int $ratio_vetuite_immo3
 * @property int $delais_paie_clients1
 * @property int $delais_paie_clients2
 * @property int $delais_paie_clients3
 * @property int $delais_paie_frn1
 * @property int $delais_paie_frn2
 * @property int $delais_paie_frn3
 * @property int $rentabilite_capitaux_propres1
 * @property int $rentabilite_capitaux_propres2
 * @property int $rentabilite_capitaux_propres3
 * @property string $analyse_diag_interne
 *
 * @property \App\Model\Entity\Owner $owner
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Autor $autor
 * @property \App\Model\Entity\Produit[] $produits
 * @property \App\Model\Entity\Timmobilisation $timmobilisation
 * @property \App\Model\Entity\Mfinancement $mfinancement
 * @property \App\Model\Entity\Expert $expert
 * @property \App\Model\Entity\Teaser[] $teasers
 */
class Dossier extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'created' => true,
        'owner_id' => true,
        'client_id' => true,
        'autor_id' => true,
        'produit_id' => true,
        'ca1' => true,
        'ca2' => true,
        'ca3' => true,
        'cout1' => true,
        'cout2' => true,
        'cout3' => true,
        'delai' => true,
        'apport_personnel' => true,
        'apport_associes' => true,
        'emprunt' => true,
        'timmobilisation_id' => true,
        'mfinancement_id' => true,
        'commentaire' => true,
        'telephone' => true,
        'mobile' => true,
        'email' => true,
        'adresse' => true,
        'representant' => true,
        'active' => true,
        'archive' => true,
        'suivi' => true,
        'expert_id' => true,
        'retard' => true,
        'cv1' => true,
        'cv2' => true,
        'cv3' => true,
        'cf1' => true,
        'cf2' => true,
        'cf3' => true,
        'salaires1' => true,
        'salaires2' => true,
        'salaires3' => true,
        'dap1' => true,
        'dap2' => true,
        'dap3' => true,
        'pf1' => true,
        'pf2' => true,
        'pf3' => true,
        'cfi1' => true,
        'cfi2' => true,
        'cfi3' => true,
        'pe1' => true,
        'pe2' => true,
        'pe3' => true,
        'impots1' => true,
        'impots2' => true,
        'impots3' => true,
        'ress_durable1' => true,
        'ress_durable2' => true,
        'ress_durable3' => true,
        'actifs_immo1' => true,
        'actifs_immo2' => true,
        'actifs_immo3' => true,
        'creances1' => true,
        'creances2' => true,
        'creances3' => true,
        'stocks1' => true,
        'stocks2' => true,
        'stocks3' => true,
        'dettes1' => true,
        'dettes2' => true,
        'dettes3' => true,
        'capitaux_propres1' => true,
        'capitaux_propres2' => true,
        'capitaux_propres3' => true,
        'ratio_auto_fin1' => true,
        'ratio_auto_fin2' => true,
        'ratio_auto_fin3' => true,
        'ratio_endettement_net1' => true,
        'ratio_endettement_net2' => true,
        'ratio_endettement_net3' => true,
        'ratio_liquidite_gen1' => true,
        'ratio_liquidite_gen2' => true,
        'ratio_liquidite_gen3' => true,
        'ratio_couv_emploi_stables1' => true,
        'ratio_couv_emploi_stables2' => true,
        'ratio_couv_emploi_stables3' => true,
        'ratio_vetuite_immo1' => true,
        'ratio_vetuite_immo2' => true,
        'ratio_vetuite_immo3' => true,
        'delais_paie_clients1' => true,
        'delais_paie_clients2' => true,
        'delais_paie_clients3' => true,
        'delais_paie_frn1' => true,
        'delais_paie_frn2' => true,
        'delais_paie_frn3' => true,
        'rentabilite_capitaux_propres1' => true,
        'rentabilite_capitaux_propres2' => true,
        'rentabilite_capitaux_propres3' => true,
        'analyse_diag_interne' => true,
        'owner' => true,
        'client' => true,
        'autor' => true,
        'produits' => true,
        'timmobilisation' => true,
        'mfinancement' => true,
        'expert' => true,
        'teasers' => true
    ];
}
