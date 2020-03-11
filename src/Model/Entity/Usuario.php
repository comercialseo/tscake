<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $us_usuario
 * @property string $us_password
 * @property string $us_email
 * @property string|null $us_nombre
 * @property string|null $us_apellidos
 * @property string|null $us_bio
 * @property \Cake\I18n\FrozenTime $us_fechaingreso
 * @property \Cake\I18n\FrozenTime|null $us_fechamodifica
 */
class Usuario extends Entity
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
        'us_usuario' => true,
        'us_password' => true,
        'us_email' => true,
        'us_nombre' => true,
        'us_apellidos' => true,
        'us_bio' => true,
        'us_fechaingreso' => true,
        'us_fechamodifica' => true,
    ];
}
