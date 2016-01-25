<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AuthorsPluginsFixture
 *
 */
class AuthorsPluginsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'author_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'plugin_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_authors_has_plugins_plugins1_idx' => ['type' => 'index', 'columns' => ['plugin_id'], 'length' => []],
            'fk_authors_has_plugins_authors1_idx' => ['type' => 'index', 'columns' => ['author_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['author_id', 'plugin_id'], 'length' => []],
            'fk_authors_has_plugins_authors1' => ['type' => 'foreign', 'columns' => ['author_id'], 'references' => ['authors', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_authors_has_plugins_plugins1' => ['type' => 'foreign', 'columns' => ['plugin_id'], 'references' => ['plugins', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'author_id' => 1,
            'plugin_id' => 1
        ],
    ];
}
