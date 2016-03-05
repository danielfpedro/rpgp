<?php
namespace App\Model\Table;

use App\Model\Entity\Plugin;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Plugins Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Authors
 * @property \Cake\ORM\Association\HasMany $Versions
 * @property \Cake\ORM\Association\BelongsToMany $Categories
 */
class PluginsTable extends Table
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

        $this->table('plugins');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users');
        
        $this->hasMany('Versions');
        $this->hasMany('PluginsPhotos');
        $this->belongsTo('RpgmakerVersions');

        $this->belongsToMany('Categories', [
            'foreignKey' => 'plugin_id',
            'targetForeignKey' => 'category_id',
            'joinTable' => 'categories_plugins'
        ]);
    }

    public function getLatestVersion($plugin)
    {
        $version = $this->Versions->find('all', [
            'conditions' => [
                'plugin_id' => $plugin->id
            ]
        ])
        ->last();

        return $version;
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
            ->allowEmpty('description');

        $validator
            ->allowEmpty('namespace');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
