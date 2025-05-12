<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TestRide Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string|null $mobile
 * @property int $product_id
 * @property string $color
 * @property int $dealer_id
 * @property \Cake\I18n\DateTime $date_time
 * @property string|null $message
 * @property int $status
 * @property string|null $created_ip
 * @property \Cake\I18n\DateTime $created
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Dealer $dealer
 */
class TestRide extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'mobile' => true,
        'product_id' => true,
        'color' => true,
        'dealer_id' => true,
        'date_time' => true,
        'message' => true,
        'status' => true,
        'created_ip' => true,
        'created' => true,
        'product' => true,
        'dealer' => true,
    ];
}
