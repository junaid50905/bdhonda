<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DealerApplication Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $mobile
 * @property int $district_id
 * @property int $upazila_id
 * @property int $status
 * @property string|null $created_ip
 * @property \Cake\I18n\DateTime $created
 *
 * @property \App\Model\Entity\District $district
 * @property \App\Model\Entity\Upazila $upazila
 */
class DealerApplication extends Entity
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
        'name' => true,
        'email' => true,
        'mobile' => true,
        'district_id' => true,
        'upazila_id' => true,
        'status' => true,
        'created_ip' => true,
        'created' => true,
        'district' => true,
        'upazila' => true,
    ];
}
