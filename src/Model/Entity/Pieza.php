<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pieza Entity
 *
 * @property int $id
 * @property string $pz_modelo
 * @property string $pz_referencia
 * @property string $pz_annofabricacion
 * @property int $pz_tipo_id
 * @property int $pz_marca_id
 * @property float|null $pz_tasacion
 * @property float|null $pz_inversion
 * @property float|null $pz_diferencia
 * @property string|null $pz_galeria
 * @property string|null $pz_anotacion
 * @property \Cake\I18n\FrozenTime $pz_creacion
 * @property \Cake\I18n\FrozenTime|null $pz_modificacion
 *
 * @property \App\Model\Entity\PzTipo $pz_tipo
 * @property \App\Model\Entity\PzMarca $pz_marca
 */
class Pieza extends Entity
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
