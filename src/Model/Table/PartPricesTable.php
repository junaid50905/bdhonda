<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PartPrices Model
 *
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\PartPrice newEmptyEntity()
 * @method \App\Model\Entity\PartPrice newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\PartPrice> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PartPrice get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\PartPrice findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\PartPrice patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\PartPrice> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PartPrice|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\PartPrice saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\PartPrice>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PartPrice>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PartPrice>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PartPrice> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PartPrice>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PartPrice>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PartPrice>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PartPrice> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PartPricesTable extends Table
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

        $this->setTable('part_prices');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER',
        ]);
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
            ->integer('product_id')
            ->notEmptyString('product_id');

        $validator
            ->scalar('part_number')
            ->maxLength('part_number', 255)
            ->allowEmptyString('part_number');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->scalar('price')
            ->maxLength('price', 100)
            ->allowEmptyString('price');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['product_id'], 'Products'), ['errorField' => 'product_id']);

        return $rules;
    }
}
