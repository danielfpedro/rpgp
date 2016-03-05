<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RpgmakerVersionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RpgmakerVersionsTable Test Case
 */
class RpgmakerVersionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RpgmakerVersionsTable
     */
    public $RpgmakerVersions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rpgmaker_versions',
        'app.plugins',
        'app.users',
        'app.versions',
        'app.plugins_photos',
        'app.categories',
        'app.categories_plugins'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RpgmakerVersions') ? [] : ['className' => 'App\Model\Table\RpgmakerVersionsTable'];
        $this->RpgmakerVersions = TableRegistry::get('RpgmakerVersions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RpgmakerVersions);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
