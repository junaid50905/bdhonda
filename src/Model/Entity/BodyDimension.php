<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BodyDimension Entity
 *
 * @property int $id
 * @property int $product_id
 * @property string|null $length
 * @property string|null $width
 * @property string|null $height
 * @property string|null $wheel_base
 * @property string|null $ground_clearance
 * @property string|null $kerb_weight
 * @property string|null $fuel_tank_capacity
 * @property int $status
 * @property string|null $created_by
 * @property string|null $modified_by
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Product $product
 */
class BodyDimension extends Entity
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
        'length' => true,
        'width' => true,
        'height' => true,
        'wheel_base' => true,
        'ground_clearance' => true,
        'kerb_weight' => true,
        'fuel_tank_capacity' => true,
        'status' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'product' => true,
    ];
}
