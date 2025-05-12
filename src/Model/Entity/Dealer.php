<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dealer Entity
 *
 * @property int $id
 * @property int $division_id
 * @property int $district_id
 * @property int $upazila_id
 * @property int $network_type_id
 * @property string $name
 * @property string|null $photo
 * @property string|null $owner_name
 * @property string|null $address
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $google_map
 * @property int $status
 * @property string|null $created_by
 * @property string|null $modified_by
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Division $division
 * @property \App\Model\Entity\District $district
 * @property \App\Model\Entity\Upazila $upazila
 * @property \App\Model\Entity\OnlineBooking[] $online_bookings
 * @property \App\Model\Entity\Query[] $queries
 * @property \App\Model\Entity\TestRide[] $test_rides
 */
class Dealer extends Entity
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
        'upazila_id' => true,
        'network_type_id' => true,
        'name' => true,
        'photo' => true,
        'owner_name' => true,
        'address' => true,
        'phone' => true,
        'email' => true,
        'google_map' => true,
        'status' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'division' => true,
        'district' => true,
        'upazila' => true,
        'online_bookings' => true,
        'queries' => true,
        'test_rides' => true,
    ];
}
