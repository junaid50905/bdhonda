<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Engine Entity
 *
 * @property int $id
 * @property int $product_id
 * @property string|null $type
 * @property string|null $displacement
 * @property string|null $max_net_power
 * @property string|null $max_net_torque
 * @property string|null $bore
 * @property string|null $stroke
 * @property string|null $compression_ratio
 * @property string|null $air_filter_type
 * @property string|null $starting_method
 * @property int $status
 * @property string|null $created_by
 * @property string|null $modified_by
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Product $product
 */
class Engine extends Entity
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
    protected array $_accessible = [
        'product_id' => true,
        'type' => true,
        'displacement' => true,
        'max_net_power' => true,
        'max_net_torque' => true,
        'bore' => true,
        'stroke' => true,
        'compression_ratio' => true,
        'air_filter_type' => true,
        'starting_method' => true,
        'status' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'product' => true,
    ];
}
