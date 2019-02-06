<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Concurrents Model
 *
 * @method \App\Model\Entity\Concurrent get($primaryKey, $options = [])
 * @method \App\Model\Entity\Concurrent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Concurrent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Concurrent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Concurrent|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Concurrent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Concurrent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Concurrent findOrCreate($search, callable $callback = null, $options = [])
 */
class ConcurrentsTable extends Table
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

        $this->setTable('concurrents');
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
            ->maxLength('quand', 155)
            ->requirePresence('quand', 'create')
            ->notEmpty('quand');

        $validator
            ->scalar('combien')
            ->maxLength('combien', 155)
            ->requirePresence('combien', 'create')
            ->notEmpty('combien');

        $validator
            ->scalar('pourquoi')
            ->maxLength('pourquoi', 155)
            ->requirePresence('pourquoi', 'create')
            ->notEmpty('pourquoi');

        $validator
            ->integer('ca')
            ->requirePresence('ca', 'create')
            ->notEmpty('ca');

        $validator
            ->integer('cv')
            ->requirePresence('cv', 'create')
            ->notEmpty('cv');

        $validator
            ->integer('marge_brute')
            ->requirePresence('marge_brute', 'create')
            ->notEmpty('marge_brute');

        $validator
            ->integer('cf')
            ->requirePresence('cf', 'create')
            ->notEmpty('cf');

        $validator
            ->integer('va')
            ->requirePresence('va', 'create')
            ->notEmpty('va');

        $validator
            ->integer('salaires')
            ->requirePresence('salaires', 'create')
            ->notEmpty('salaires');

        $validator
            ->integer('ebe')
            ->requirePresence('ebe', 'create')
            ->notEmpty('ebe');

        return $validator;
    }
}
