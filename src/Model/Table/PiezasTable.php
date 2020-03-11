<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Piezas Model
 *
 * @property \App\Model\Table\PzTiposTable&\Cake\ORM\Association\BelongsTo $PzTipos
 * @property \App\Model\Table\PzMarcasTable&\Cake\ORM\Association\BelongsTo $PzMarcas
 *
 * @method \App\Model\Entity\Pieza newEmptyEntity()
 * @method \App\Model\Entity\Pieza newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pieza[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pieza get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pieza findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pieza patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pieza[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pieza|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pieza saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pieza[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pieza[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pieza[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pieza[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PiezasTable extends Table
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

        $this->setTable('piezas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('PzTipos', [
            'foreignKey' => 'pz_tipo_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('PzMarcas', [
            'foreignKey' => 'pz_marca_id',
            'joinType' => 'INNER',
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
            ->scalar('pz_modelo')
            ->maxLength('pz_modelo', 50)
            ->requirePresence('pz_modelo', 'create')
            ->notEmptyString('pz_modelo');

        $validator
            ->scalar('pz_referencia')
            ->maxLength('pz_referencia', 75)
            ->requirePresence('pz_referencia', 'create')
            ->notEmptyString('pz_referencia');

        $validator
            ->scalar('pz_annofabricacion')
            ->requirePresence('pz_annofabricacion', 'create')
            ->notEmptyString('pz_annofabricacion');

        $validator
            ->numeric('pz_tasacion')
            ->allowEmptyString('pz_tasacion');

        $validator
            ->numeric('pz_inversion')
            ->allowEmptyString('pz_inversion');

        $validator
            ->numeric('pz_diferencia')
            ->allowEmptyString('pz_diferencia');

        $validator
            ->scalar('pz_galeria')
            ->maxLength('pz_galeria', 500)
            ->allowEmptyString('pz_galeria');

        $validator
            ->scalar('pz_anotacion')
            ->maxLength('pz_anotacion', 750)
            ->allowEmptyString('pz_anotacion');

        $validator
            ->dateTime('pz_creacion')
            ->notEmptyDateTime('pz_creacion');

        $validator
            ->dateTime('pz_modificacion')
            ->allowEmptyDateTime('pz_modificacion');

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
        $rules->add($rules->existsIn(['pz_tipo_id'], 'PzTipos'));
        $rules->add($rules->existsIn(['pz_marca_id'], 'PzMarcas'));

        return $rules;
    }
}
