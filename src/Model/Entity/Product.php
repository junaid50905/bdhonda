<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $product_menu_order
 * @property string|null $product_thumb
 * @property string|null $home_bg
 * @property string|null $small_logo
 * @property string|null $inner_bg
 * @property string|null $about_image
 * @property string|null $about_text
 * @property string|null $specifications_image
 * @property string|null $price_image
 * @property string|null $brochure
 * @property int $angle_view
 * @property int $status
 * @property int $test_ride
 * @property string|null $created_by
 * @property string|null $modified_by
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Accessory[] $accessories
 * @property \App\Model\Entity\BodyDimension[] $body_dimensions
 * @property \App\Model\Entity\Color[] $colors
 * @property \App\Model\Entity\Electrical[] $electricals
 * @property \App\Model\Entity\Engine[] $engines
 * @property \App\Model\Entity\Feature[] $features
 * @property \App\Model\Entity\FramesSuspension[] $frames_suspensions
 * @property \App\Model\Entity\OnlineBooking[] $online_bookings
 * @property \App\Model\Entity\PartPrice[] $part_prices
 * @property \App\Model\Entity\Price[] $prices
 * @property \App\Model\Entity\Query[] $queries
 * @property \App\Model\Entity\Safety[] $safeties
 * @property \App\Model\Entity\TestRide[] $test_rides
 * @property \App\Model\Entity\Transmission[] $transmissions
 * @property \App\Model\Entity\TyresBrake[] $tyres_brakes
 */
class Product extends Entity
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
        'slug' => true,
        'product_menu_order' => true,
        'product_thumb' => true,
        'home_bg' => true,
        'small_logo' => true,
        'inner_bg' => true,
        'about_image' => true,
        'about_text' => true,
        'specifications_image' => true,
        'price_image' => true,
        'brochure' => true,
        'angle_view' => true,
        'status' => true,
        'test_ride' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
        'accessories' => true,
        'body_dimensions' => true,
        'colors' => true,
        'electricals' => true,
        'engines' => true,
        'features' => true,
        'frames_suspensions' => true,
        'online_bookings' => true,
        'part_prices' => true,
        'prices' => true,
        'queries' => true,
        'safeties' => true,
        'test_rides' => true,
        'transmissions' => true,
        'tyres_brakes' => true,
    ];
}
