<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Teaser Entity
 *
 * @property int $id
 * @property string $name
 * @property int $dossier_id
 * @property string $body
 * @property \Cake\I18n\FrozenTime $created
 * @property string $contexte
 * @property string $problematique
 * @property string $solution
 * @property string $marche
 * @property string $strategie
 * @property string $chiffres
 * @property string $focus_realisations
 * @property string $montant_levee_fonds
 *
 * @property \App\Model\Entity\Dossier $dossier
 */
class Teaser extends Entity
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
        'dossier_id' => true,
        'body' => true,
        'created' => true,
        'contexte' => true,
        'problematique' => true,
        'solution' => true,
        'marche' => true,
        'strategie' => true,
        'chiffres' => true,
        'focus_realisations' => true,
        'montant_levee_fonds' => true,
        'dossier' => true
    ];
}
