<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produit Entity
 *
 * @property int $id
 * @property string $name
 * @property int $sector_id
 * @property bool $service
 * @property bool $active
 *
 * @property \App\Model\Entity\Sector $sector
 * @property \App\Model\Entity\Dossier[] $dossiers
 */
class Produit extends Entity
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
        'sector_id' => true,
        'service' => true,
        'active' => true,
        'sector' => true,
        'dossiers' => true
    ];
}
