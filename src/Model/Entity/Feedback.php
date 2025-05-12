<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Feedback Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $mobile
 * @property string|null $message
 * @property int $status
 * @property string|null $created_ip
 * @property \Cake\I18n\DateTime $created
 */
class Feedback extends Entity
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
        'message' => true,
        'status' => true,
        'created_ip' => true,
        'created' => true,
    ];
}
