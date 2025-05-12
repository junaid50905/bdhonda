<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Division Entity
 *
 * @property int $id
 * @property string $name
 * @property int $status
 * @property string|null $created_by
 * @property string|null $modified_by
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Dealer[] $dealers
 * @property \App\Model\Entity\District[] $districts
 * @property \App\Model\Entity\Part[] $parts
 * @property \App\Model\Entity\Upazila[] $upazilas
 */
class Division extends Entity
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
        'status' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'dealers' => true,
        'districts' => true,
        'parts' => true,
        'upazilas' => true,
    ];
}
