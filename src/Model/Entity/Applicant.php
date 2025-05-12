<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Applicant Entity
 *
 * @property int $id
 * @property int $job_id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 * @property string|null $address
 * @property string $cv
 * @property string|null $file_dir
 * @property int $status
 * @property string|null $created_ip
 * @property \Cake\I18n\DateTime|null $created
 *
 * @property \App\Model\Entity\Job $job
 */
class Applicant extends Entity
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
        'job_id' => true,
        'first_name' => true,
        'last_name' => true,
        'phone' => true,
        'email' => true,
        'address' => true,
        'cv' => true,
        'file_dir' => true,
        'status' => true,
        'created_ip' => true,
        'created' => true,
        'job' => true,
    ];
}
