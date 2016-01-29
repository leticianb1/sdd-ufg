<?php
namespace App\Model\Table;

use App\Model\Entity\Knowledge;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Knowledges Model
 *
 * @property \Cake\ORM\Association\HasMany $Roles
 * @property \Cake\ORM\Association\HasMany $Subjects
 * @property \Cake\ORM\Association\BelongsToMany $Teachers
 */
class KnowledgesTable extends Table
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

        $this->table('knowledges');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Roles', [
            'foreignKey' => 'knowledge_id'
        ]);
        $this->hasMany('Subjects', [
            'foreignKey' => 'knowledge_id'
        ]);
        $this->belongsToMany('Teachers', [
            'foreignKey' => 'knowledge_id',
            'targetForeignKey' => 'teacher_id',
            'joinTable' => 'knowledges_teachers'
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

        return $validator;
    }
}
