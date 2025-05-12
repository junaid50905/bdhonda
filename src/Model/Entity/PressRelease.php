<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PressRelease Entity
 *
 * @property int $id
 * @property string $title
 * @property string|null $pr_text
 * @property string|null $pr_file
 * @property string|null $file_dir
 * @property \Cake\I18n\Date $publish_date
 * @property int $status
 * @property string|null $created_by
 * @property string|null $modified_by
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime $modified
 */
class PressRelease extends Entity
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
        'title' => true,
        'pr_text' => true,
        'pr_file' => true,
        'file_dir' => true,
        'publish_date' => true,
        'status' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
    ];
}
