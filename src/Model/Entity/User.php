<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $role_id
 * @property string $last_name
 * @property string $first_name
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property int $client_id
 * @property int $login_count
 * @property \Cake\I18n\FrozenTime $last_connexion
 * @property bool $active
 * @property string $imageUri
 * @property string $ville
 * @property int $nation_id
 * @property int $sector_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenDate $date_recrut
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Nation $nation
 * @property \App\Model\Entity\Sector $sector
 * @property \App\Model\Entity\Compte[] $comptes
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'role_id' => true,
        'last_name' => true,
        'first_name' => true,
        'address' => true,
        'phone' => true,
        'email' => true,
        'client_id' => true,
        'login_count' => true,
        'last_connexion' => true,
        'active' => true,
        'imageUri' => true,
        'ville' => true,
        'nation_id' => true,
        'sector_id' => true,
        'created' => true,
        'date_recrut' => true,
        'role' => true,
        'client' => true,
        'nation' => true,
        'sector' => true,
        'comptes' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
