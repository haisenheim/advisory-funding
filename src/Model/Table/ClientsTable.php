<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clients Model
 *
 * @property \App\Model\Table\TclientsTable|\Cake\ORM\Association\BelongsTo $Tclients
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ClientsTable|\Cake\ORM\Association\BelongsTo $Clients

 *
 * @method \App\Model\Entity\Client get($primaryKey, $options = [])
 * @method \App\Model\Entity\Client newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Client[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Client|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Client[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Client findOrCreate($search, callable $callback = null, $options = [])
 */
class ClientsTable extends Table
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

        $this->setTable('clients');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tclients', [
            'foreignKey' => 'tclient_id',
            'joinType'=>'Left'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'Left'
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'Left'
        ]);
        $this->hasMany('Clients', [
            'foreignKey' => 'client_id',
            'joinType'=>'Left'
        ]);

        $this->hasMany('Dossiers', [
            'foreignKey' => 'client_id'
        ]);
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
            ->maxLength('name', 60)
            ->allowEmpty('name');

        $validator
            ->scalar('address')
            ->maxLength('address', 60)
            ->allowEmpty('address');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 45)
            ->allowEmpty('phone');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->integer('user_count')
            ->allowEmpty('user_count');

        $validator
            ->scalar('imageUri')
            ->maxLength('imageUri', 40)
            ->requirePresence('imageUri', 'create')
            ->notEmpty('imageUri');

        $validator
            ->scalar('code')
            ->maxLength('code', 20)
            ->requirePresence('code', 'create')
            ->notEmpty('code');

        $validator
            ->scalar('bg_img')
            ->maxLength('bg_img', 25)
            ->requirePresence('bg_img', 'create')
            ->notEmpty('bg_img');

        $validator
            ->scalar('title_color')
            ->maxLength('title_color', 7)
            ->requirePresence('title_color', 'create')
            ->notEmpty('title_color');

        $validator
            ->scalar('header_color')
            ->maxLength('header_color', 7)
            ->requirePresence('header_color', 'create')
            ->notEmpty('header_color');

        $validator
            ->scalar('footer_color')
            ->maxLength('footer_color', 7)
            ->requirePresence('footer_color', 'create')
            ->notEmpty('footer_color');

        $validator
            ->integer('capital')
            ->requirePresence('capital', 'create')
            ->notEmpty('capital');

        $validator
            ->scalar('slogan')
            ->maxLength('slogan', 255)
            ->requirePresence('slogan', 'create')
            ->notEmpty('slogan');

        $validator
            ->scalar('rccm')
            ->maxLength('rccm', 25)
            ->requirePresence('rccm', 'create')
            ->notEmpty('rccm');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['tclient_id'], 'Tclients'));


        return $rules;
    }
}
