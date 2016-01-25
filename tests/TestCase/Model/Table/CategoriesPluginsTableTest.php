<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriesPluginsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriesPluginsTable Test Case
 */
class CategoriesPluginsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categories_plugins',
        'app.categories',
        'app.plugins',
        'app.authors',
        'app.users',
        'app.versions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CategoriesPlugins') ? [] : ['className' => 'App\Model\Table\CategoriesPluginsTable'];
        $this->CategoriesPlugins = TableRegistry::get('CategoriesPlugins', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoriesPlugins);

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
