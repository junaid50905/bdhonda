<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;


class Safety extends Entity
{
    protected array $_accessible = [
        'safety_category' => true,
        'name' => true,
        'image' => true,
        '`order`' => true, // Escaped
        'status' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
    ];

    
}
