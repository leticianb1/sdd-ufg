<?php
namespace App\Model\Table;

use App\Model\Entity\Process;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Processes Model
 *
 * @property \Cake\ORM\Association\HasMany $Clazzes
 * @property \Cake\ORM\Association\BelongsToMany $ProcessConfigurations
 */
class ProcessesTable extends Table
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

        $this->table('processes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Clazzes', [
            'foreignKey' => 'process_id'
        ]);
        $this->belongsToMany('ProcessConfigurations', [
            'foreignKey' => 'process_id',
            'targetForeignKey' => 'process_configuration_id',
            'joinTable' => 'processes_process_configurations'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->add('initial_date', 'valid', ['rule' => 'date'])
            ->requirePresence('initial_date', 'create')
            ->notEmpty('initial_date');

        $validator
            ->add('teacher_intent_date', 'valid', ['rule' => 'date'])
            ->requirePresence('teacher_intent_date', 'create')
            ->notEmpty('teacher_intent_date');

        $validator
            ->add('primary_distribution_date', 'valid', ['rule' => 'date'])
            ->requirePresence('primary_distribution_date', 'create')
            ->notEmpty('primary_distribution_date');

        $validator
            ->add('substitute_intent_date', 'valid', ['rule' => 'date'])
            ->requirePresence('substitute_intent_date', 'create')
            ->notEmpty('substitute_intent_date');

        $validator
            ->add('secondary_distribution_date', 'valid', ['rule' => 'date'])
            ->requirePresence('secondary_distribution_date', 'create')
            ->notEmpty('secondary_distribution_date');

        $validator
            ->add('final_date', 'valid', ['rule' => 'date'])
            ->requirePresence('final_date', 'create')
            ->notEmpty('final_date');

        return $validator;
    }
}
