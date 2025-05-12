<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Upazila Entity
 *
 * @property int $id
 * @property int $division_id
 * @property int $district_id
 * @property string $name
 * @property int $status
 * @property string|null $created_by
 * @property string|null $modified_by
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Division $division
 * @property \App\Model\Entity\District $district
 * @property \App\Model\Entity\DealerApplication[] $dealer_applications
 * @property \App\Model\Entity\Dealer[] $dealers
 * @property \App\Model\Entity\Part[] $parts
 */
class Upazila extends Entity
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
        'division_id' => true,
        'district_id' => true,
        'name' => true,
        'status' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'division' => true,
        'district' => true,
        'dealer_applications' => true,
        'dealers' => true,
        'parts' => true,
    ];
}
