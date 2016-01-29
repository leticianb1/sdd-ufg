<?php
namespace App\Model\Table;

use App\Model\Entity\Local;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Locals Model
 *
 * @property \Cake\ORM\Association\HasMany $Clazzes
 */
class LocalsTable extends Table
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

        $this->table('locals');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Clazzes', [
            'foreignKey' => 'local_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->add('capacity', 'valid', ['rule' => 'numeric'])
            ->requirePresence('capacity', 'create')
            ->notEmpty('capacity');

        return $validator;
    }
}
