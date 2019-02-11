<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property int $tclient_id
 * @property int $user_count
 * @property int $user_id
 * @property int $client_id
 * @property string $imageUri
 * @property string $code
 * @property string $bg_img
 * @property string $title_color
 * @property string $header_color
 * @property string $footer_color
 * @property int $capital
 * @property string $slogan
 * @property string $rccm
 * @property bool $active
 *
 * @property \App\Model\Entity\Tclient $tclient
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Client[] $clients
 */
class Client extends Entity
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
        'address' => true,
        'phone' => true,
        'email' => true,
        'tclient_id' => true,
        'user_count' => true,
        'user_id' => true,
        'client_id' => true,
        'imageUri' => true,
        'code' => true,
        'bg_img' => true,
        'title_color' => true,
        'header_color' => true,
        'footer_color' => true,
        'capital' => true,
        'slogan' => true,
        'rccm' => true,
        'active' => true,
        'tclient' => true,
        'user' => true,
        'clients' => true
    ];
}
