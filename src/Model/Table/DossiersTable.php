<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dossiers Model
 *
 * @property \App\Model\Table\OwnersTable|\Cake\ORM\Association\BelongsTo $Owners
 * @property \App\Model\Table\ClientsTable|\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\AutorsTable|\Cake\ORM\Association\BelongsTo $Autors
 * @property \App\Model\Table\ProduitsTable|\Cake\ORM\Association\BelongsTo $Produits
 * @property \App\Model\Table\TimmobilisationsTable|\Cake\ORM\Association\BelongsTo $Timmobilisations
 * @property \App\Model\Table\MfinancementsTable|\Cake\ORM\Association\BelongsTo $Mfinancements
 * @property \App\Model\Table\ExpertsTable|\Cake\ORM\Association\BelongsTo $Experts
 * @property \App\Model\Table\TeasersTable|\Cake\ORM\Association\HasMany $Teasers

 *
 * @method \App\Model\Entity\Dossier get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dossier newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dossier[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dossier|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dossier|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dossier patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dossier[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dossier findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DossiersTable extends Table
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

        $this->setTable('dossiers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');


        $this->belongsTo('Comptes', [
            'foreignKey' => 'compte_id',
            'joinType' => 'Left'
        ]);
        $this->belongsTo('Autors', [
            'className'=>'Users',
            'foreignKey' => 'autor_id'
        ]);
        $this->belongsTo('Produits', [
            'foreignKey' => 'produit_id',
            'joinType' => 'Left'
        ]);

        $this->belongsTo('Experts', [
            'className'=>'Users',
            'foreignKey' => 'expert_id',
            'joinType' => 'Left'
        ]);
        $this->hasMany('Teasers', [
            'foreignKey' => 'dossier_id'
        ]);
        $this->belongsToMany('Produits', [
            'foreignKey' => 'dossier_id',
            'targetForeignKey' => 'produit_id',
            'joinTable' => 'dossiers_produits'
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
            ->maxLength('name', 45)
            ->allowEmpty('name');


       /* $validator
            ->integer('cv1')
            ->requirePresence('cv1', 'create')
            ->notEmpty('cv1');

        $validator
            ->integer('cv2')
            ->requirePresence('cv2', 'create')
            ->notEmpty('cv2');

        $validator
            ->integer('cv3')
            ->requirePresence('cv3', 'create')
            ->notEmpty('cv3');

        $validator
            ->integer('cf1')
            ->requirePresence('cf1', 'create')
            ->notEmpty('cf1');

        $validator
            ->integer('cf2')
            ->requirePresence('cf2', 'create')
            ->notEmpty('cf2');

        $validator
            ->integer('cf3')
            ->requirePresence('cf3', 'create')
            ->notEmpty('cf3');

        $validator
            ->integer('salaires1')
            ->requirePresence('salaires1', 'create')
            ->notEmpty('salaires1');

        $validator
            ->integer('salaires2')
            ->requirePresence('salaires2', 'create')
            ->notEmpty('salaires2');

        $validator
            ->integer('salaires3')
            ->requirePresence('salaires3', 'create')
            ->notEmpty('salaires3');

        $validator
            ->integer('dap1')
            ->requirePresence('dap1', 'create')
            ->notEmpty('dap1');

        $validator
            ->integer('dap2')
            ->requirePresence('dap2', 'create')
            ->notEmpty('dap2');

        $validator
            ->integer('dap3')
            ->requirePresence('dap3', 'create')
            ->notEmpty('dap3');

        $validator
            ->integer('pf1')
            ->requirePresence('pf1', 'create')
            ->notEmpty('pf1');

        $validator
            ->integer('pf2')
            ->requirePresence('pf2', 'create')
            ->notEmpty('pf2');

        $validator
            ->integer('pf3')
            ->requirePresence('pf3', 'create')
            ->notEmpty('pf3');

        $validator
            ->integer('cfi1')
            ->requirePresence('cfi1', 'create')
            ->notEmpty('cfi1');

        $validator
            ->integer('cfi2')
            ->requirePresence('cfi2', 'create')
            ->notEmpty('cfi2');

        $validator
            ->integer('cfi3')
            ->requirePresence('cfi3', 'create')
            ->notEmpty('cfi3');

        $validator
            ->integer('pe1')
            ->requirePresence('pe1', 'create')
            ->notEmpty('pe1');

        $validator
            ->integer('pe2')
            ->requirePresence('pe2', 'create')
            ->notEmpty('pe2');

        $validator
            ->integer('pe3')
            ->requirePresence('pe3', 'create')
            ->notEmpty('pe3');

        $validator
            ->integer('impots1')
            ->requirePresence('impots1', 'create')
            ->notEmpty('impots1');

        $validator
            ->integer('impots2')
            ->requirePresence('impots2', 'create')
            ->notEmpty('impots2');

        $validator
            ->integer('impots3')
            ->requirePresence('impots3', 'create')
            ->notEmpty('impots3');

        $validator
            ->integer('ress_durable1')
            ->requirePresence('ress_durable1', 'create')
            ->notEmpty('ress_durable1');

        $validator
            ->integer('ress_durable2')
            ->requirePresence('ress_durable2', 'create')
            ->notEmpty('ress_durable2');

        $validator
            ->integer('ress_durable3')
            ->requirePresence('ress_durable3', 'create')
            ->notEmpty('ress_durable3');

        $validator
            ->integer('actifs_immo1')
            ->requirePresence('actifs_immo1', 'create')
            ->notEmpty('actifs_immo1');

        $validator
            ->integer('actifs_immo2')
            ->requirePresence('actifs_immo2', 'create')
            ->notEmpty('actifs_immo2');

        $validator
            ->integer('actifs_immo3')
            ->requirePresence('actifs_immo3', 'create')
            ->notEmpty('actifs_immo3');

        $validator
            ->integer('creances1')
            ->requirePresence('creances1', 'create')
            ->notEmpty('creances1');

        $validator
            ->integer('creances2')
            ->requirePresence('creances2', 'create')
            ->notEmpty('creances2');

        $validator
            ->integer('creances3')
            ->requirePresence('creances3', 'create')
            ->notEmpty('creances3');

        $validator
            ->integer('stocks1')
            ->requirePresence('stocks1', 'create')
            ->notEmpty('stocks1');

        $validator
            ->integer('stocks2')
            ->requirePresence('stocks2', 'create')
            ->notEmpty('stocks2');

        $validator
            ->integer('stocks3')
            ->requirePresence('stocks3', 'create')
            ->notEmpty('stocks3');

        $validator
            ->integer('dettes1')
            ->requirePresence('dettes1', 'create')
            ->notEmpty('dettes1');

        $validator
            ->integer('dettes2')
            ->requirePresence('dettes2', 'create')
            ->notEmpty('dettes2');

        $validator
            ->integer('dettes3')
            ->requirePresence('dettes3', 'create')
            ->notEmpty('dettes3');

        $validator
            ->integer('capitaux_propres1')
            ->requirePresence('capitaux_propres1', 'create')
            ->notEmpty('capitaux_propres1');

        $validator
            ->integer('capitaux_propres2')
            ->requirePresence('capitaux_propres2', 'create')
            ->notEmpty('capitaux_propres2');

        $validator
            ->integer('capitaux_propres3')
            ->requirePresence('capitaux_propres3', 'create')
            ->notEmpty('capitaux_propres3');

        $validator
            ->integer('ratio_auto_fin1')
            ->requirePresence('ratio_auto_fin1', 'create')
            ->notEmpty('ratio_auto_fin1');

        $validator
            ->integer('ratio_auto_fin2')
            ->requirePresence('ratio_auto_fin2', 'create')
            ->notEmpty('ratio_auto_fin2');

        $validator
            ->integer('ratio_auto_fin3')
            ->requirePresence('ratio_auto_fin3', 'create')
            ->notEmpty('ratio_auto_fin3');

        $validator
            ->integer('ratio_endettement_net1')
            ->requirePresence('ratio_endettement_net1', 'create')
            ->notEmpty('ratio_endettement_net1');

        $validator
            ->integer('ratio_endettement_net2')
            ->requirePresence('ratio_endettement_net2', 'create')
            ->notEmpty('ratio_endettement_net2');

        $validator
            ->integer('ratio_endettement_net3')
            ->requirePresence('ratio_endettement_net3', 'create')
            ->notEmpty('ratio_endettement_net3');

        $validator
            ->integer('ratio_liquidite_gen1')
            ->requirePresence('ratio_liquidite_gen1', 'create')
            ->notEmpty('ratio_liquidite_gen1');

        $validator
            ->integer('ratio_liquidite_gen2')
            ->requirePresence('ratio_liquidite_gen2', 'create')
            ->notEmpty('ratio_liquidite_gen2');

        $validator
            ->integer('ratio_liquidite_gen3')
            ->requirePresence('ratio_liquidite_gen3', 'create')
            ->notEmpty('ratio_liquidite_gen3');

        $validator
            ->integer('ratio_couv_emploi_stables1')
            ->requirePresence('ratio_couv_emploi_stables1', 'create')
            ->notEmpty('ratio_couv_emploi_stables1');

        $validator
            ->integer('ratio_couv_emploi_stables2')
            ->requirePresence('ratio_couv_emploi_stables2', 'create')
            ->notEmpty('ratio_couv_emploi_stables2');

        $validator
            ->integer('ratio_couv_emploi_stables3')
            ->requirePresence('ratio_couv_emploi_stables3', 'create')
            ->notEmpty('ratio_couv_emploi_stables3');

        $validator
            ->integer('ratio_vetuite_immo1')
            ->requirePresence('ratio_vetuite_immo1', 'create')
            ->notEmpty('ratio_vetuite_immo1');

        $validator
            ->integer('ratio_vetuite_immo2')
            ->requirePresence('ratio_vetuite_immo2', 'create')
            ->notEmpty('ratio_vetuite_immo2');

        $validator
            ->integer('ratio_vetuite_immo3')
            ->requirePresence('ratio_vetuite_immo3', 'create')
            ->notEmpty('ratio_vetuite_immo3');

        $validator
            ->integer('delais_paie_clients1')
            ->requirePresence('delais_paie_clients1', 'create')
            ->notEmpty('delais_paie_clients1');

        $validator
            ->integer('delais_paie_clients2')
            ->requirePresence('delais_paie_clients2', 'create')
            ->notEmpty('delais_paie_clients2');

        $validator
            ->integer('delais_paie_clients3')
            ->requirePresence('delais_paie_clients3', 'create')
            ->notEmpty('delais_paie_clients3');

        $validator
            ->integer('delais_paie_frn1')
            ->requirePresence('delais_paie_frn1', 'create')
            ->notEmpty('delais_paie_frn1');

        $validator
            ->integer('delais_paie_frn2')
            ->requirePresence('delais_paie_frn2', 'create')
            ->notEmpty('delais_paie_frn2');

        $validator
            ->integer('delais_paie_frn3')
            ->requirePresence('delais_paie_frn3', 'create')
            ->notEmpty('delais_paie_frn3');

        $validator
            ->integer('rentabilite_capitaux_propres1')
            ->requirePresence('rentabilite_capitaux_propres1', 'create')
            ->notEmpty('rentabilite_capitaux_propres1');

        $validator
            ->integer('rentabilite_capitaux_propres2')
            ->requirePresence('rentabilite_capitaux_propres2', 'create')
            ->notEmpty('rentabilite_capitaux_propres2');

        $validator
            ->integer('rentabilite_capitaux_propres3')
            ->requirePresence('rentabilite_capitaux_propres3', 'create')
            ->notEmpty('rentabilite_capitaux_propres3');

        $validator
            ->scalar('analyse_diag_interne')
            ->requirePresence('analyse_diag_interne', 'create')
            ->notEmpty('analyse_diag_interne');*/

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
        $rules->add($rules->existsIn(['compte_id'], 'Comptes'));
        $rules->add($rules->existsIn(['autor_id'], 'Autors'));
        return $rules;
    }
}
