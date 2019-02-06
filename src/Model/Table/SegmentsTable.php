<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Segments Model
 *
 * @method \App\Model\Entity\Segment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Segment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Segment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Segment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Segment|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Segment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Segment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Segment findOrCreate($search, callable $callback = null, $options = [])
 */
class SegmentsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('segments');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('quoi')
            ->maxLength('quoi', 255)
            ->requirePresence('quoi', 'create')
            ->notEmpty('quoi');

        $validator
            ->scalar('ou')
            ->maxLength('ou', 100)
            ->requirePresence('ou', 'create')
            ->notEmpty('ou');

        $validator
            ->scalar('quand')
            ->maxLength('quand', 100)
            ->requirePresence('quand', 'create')
            ->notEmpty('quand');

        $validator
            ->integer('combien')
            ->requirePresence('combien', 'create')
            ->notEmpty('combien');

        $validator
            ->scalar('pourquoi')
            ->requirePresence('pourquoi', 'create')
            ->notEmpty('pourquoi');

        $validator
            ->scalar('solutions')
            ->requirePresence('solutions', 'create')
            ->notEmpty('solutions');

        return $validator;
    }
}
