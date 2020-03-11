<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PzMarca Entity
 *
 * @property int $id
 * @property string $pz_marca
 * @property string|null $pz_historia
 *
 * @property \App\Model\Entity\Pieza[] $piezas
 */
class PzMarca extends Entity
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
        '*'  => true,
        'id' => false,
    ];
}
