<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PzTipos Model
 *
 * @property \App\Model\Table\PiezasTable&\Cake\ORM\Association\HasMany $Piezas
 *
 * @method \App\Model\Entity\PzTipo newEmptyEntity()
 * @method \App\Model\Entity\PzTipo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PzTipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PzTipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\PzTipo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PzTipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PzTipo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PzTipo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PzTipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PzTipo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PzTipo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PzTipo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PzTipo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PzTiposTable extends Table
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

        $this->setTable('pz_tipos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Piezas', [
            'className'  => 'Piezas',
                'alias'  => 'Marcas',
            'foreignKey' => 'pz_tipo_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('pztp_tipo')
            ->maxLength('pztp_tipo', 30)
            ->requirePresence('pztp_tipo', 'create')
            ->notEmptyString('pztp_tipo');

        $validator
            ->scalar('pztp_descripcion')
            ->maxLength('pztp_descripcion', 150)
            ->requirePresence('pztp_descripcion', 'create')
            ->notEmptyString('pztp_descripcion');

        return $validator;
    }
}
