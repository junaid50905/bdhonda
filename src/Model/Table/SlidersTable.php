<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sliders Model
 *
 * @method \App\Model\Entity\Slider newEmptyEntity()
 * @method \App\Model\Entity\Slider newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Slider> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Slider get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Slider findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Slider patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Slider> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Slider|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Slider saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Slider>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Slider>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Slider>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Slider> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Slider>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Slider>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Slider>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Slider> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SlidersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('sliders');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->allowEmptyString('title');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->allowEmptyFile('image');

        $validator
            ->scalar('url')
            ->maxLength('url', 255)
            ->allowEmptyString('url');

        $validator
            ->integer('position')
            ->notEmptyString('position');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        $validator
            ->scalar('created_by')
            ->maxLength('created_by', 50)
            ->allowEmptyString('created_by');

        $validator
            ->scalar('modified_by')
            ->maxLength('modified_by', 50)
            ->allowEmptyString('modified_by');

        return $validator;
    }
}
