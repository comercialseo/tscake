<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @method \App\Model\Entity\Usuario newEmptyEntity()
 * @method \App\Model\Entity\Usuario newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsuariosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('usuarios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('us_usuario')
            ->maxLength('us_usuario', 30)
            ->requirePresence('us_usuario', 'create')
            ->notEmptyString('us_usuario')
            ->add('us_usuario', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('us_password')
            ->maxLength('us_password', 250)
            ->requirePresence('us_password', 'create')
            ->notEmptyString('us_password');

        $validator
            ->scalar('us_email')
            ->maxLength('us_email', 100)
            ->requirePresence('us_email', 'create')
            ->notEmptyString('us_email')
            ->add('us_email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('us_nombre')
            ->maxLength('us_nombre', 30)
            ->allowEmptyString('us_nombre');

        $validator
            ->scalar('us_apellidos')
            ->maxLength('us_apellidos', 30)
            ->allowEmptyString('us_apellidos');

        $validator
            ->scalar('us_bio')
            ->allowEmptyString('us_bio');

        $validator
            ->dateTime('us_fechaingreso')
            ->notEmptyDateTime('us_fechaingreso');

        $validator
            ->dateTime('us_fechamodifica')
            ->allowEmptyDateTime('us_fechamodifica');

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
        $rules->add($rules->isUnique(['us_usuario']));
        $rules->add($rules->isUnique(['us_email']));

        return $rules;
    }
}
