<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Segment Entity
 *
 * @property int $id
 * @property string $name
 * @property string $quoi
 * @property string $ou
 * @property string $quand
 * @property int $combien
 * @property string $pourquoi
 * @property string $solutions
 */
class Segment extends Entity
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
        'quoi' => true,
        'ou' => true,
        'quand' => true,
        'combien' => true,
        'pourquoi' => true,
        'solutions' => true
    ];
}
