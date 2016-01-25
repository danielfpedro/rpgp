<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AuthorsPluginsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AuthorsPluginsTable Test Case
 */
class AuthorsPluginsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.authors_plugins',
        'app.authors',
        'app.users',
        'app.plugins'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AuthorsPlugins') ? [] : ['className' => 'App\Model\Table\AuthorsPluginsTable'];
        $this->AuthorsPlugins = TableRegistry::get('AuthorsPlugins', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AuthorsPlugins);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
