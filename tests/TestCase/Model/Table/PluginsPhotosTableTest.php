<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PluginsPhotosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PluginsPhotosTable Test Case
 */
class PluginsPhotosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PluginsPhotosTable
     */
    public $PluginsPhotos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.plugins_photos',
        'app.plugins',
        'app.users',
        'app.versions',
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
        $config = TableRegistry::exists('PluginsPhotos') ? [] : ['className' => 'App\Model\Table\PluginsPhotosTable'];
        $this->PluginsPhotos = TableRegistry::get('PluginsPhotos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PluginsPhotos);

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
