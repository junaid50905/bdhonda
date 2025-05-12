<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TyresBrake Entity
 *
 * @property int $id
 * @property int $product_id
 * @property string|null $tyre_size_front
 * @property string|null $tyre_size_rear
 * @property string|null $tyre_type_front
 * @property string|null $tyre_type_rear
 * @property string|null $brake_type_size_front
 * @property string|null $brake_type_size_rear
 * @property int $status
 * @property string|null $created_by
 * @property string|null $modified_by
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Product $product
 */
class TyresBrake extends Entity
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
        'tyre_size_front' => true,
        'tyre_size_rear' => true,
        'tyre_type_front' => true,
        'tyre_type_rear' => true,
        'brake_type_size_front' => true,
        'brake_type_size_rear' => true,
        'status' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'product' => true,
    ];
}
