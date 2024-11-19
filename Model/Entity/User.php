<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Authentication\PasswordHasher\DefaultPasswordHasher; // Add this line

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $nisn
 * @property string $password
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $photo
 * @property string $status
 * @property string $is_active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $group_id
 *
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\Saving[] $savings
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
     * @var array<string, bool>
     */
    protected $_accessible = [
        'nisn' => true,
        'password' => true,
        'name' => true,
        'email' => true,
        'phone' => true,
        'photo' => true,
        'status' => true,
        'is_active' => true,
        'created' => true,
        'modified' => true,
        'group_id' => true,
        'group' => true,
        'savings' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
    
    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
        return null;
    }
}
