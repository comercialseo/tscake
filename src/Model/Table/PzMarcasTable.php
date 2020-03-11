<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PzMarcas Model
 *
 * @property \App\Model\Table\PiezasTable&\Cake\ORM\Association\HasMany $Piezas
 *
 * @method \App\Model\Entity\PzMarca newEmptyEntity()
 * @method \App\Model\Entity\PzMarca newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PzMarca[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PzMarca get($primaryKey, $options = [])
 * @method \App\Model\Entity\PzMarca findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PzMarca patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PzMarca[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PzMarca|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PzMarca saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PzMarca[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PzMarca[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PzMarca[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PzMarca[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PzMarcasTable extends Table
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

        $this->setTable('pz_marcas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Piezas', [
            'className'  => 'Piezas',
                'alias'  => 'Marcas',
            'foreignKey' => 'pz_marca_id',
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('pz_marca')
            ->maxLength('pz_marca', 90)
            ->requirePresence('pz_marca', 'create')
            ->notEmptyString('pz_marca');

        $validator
            ->scalar('pz_historia')
            ->allowEmptyString('pz_historia');

        return $validator;
    }
}
