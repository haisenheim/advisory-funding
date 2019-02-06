<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConcurrentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConcurrentsTable Test Case
 */
class ConcurrentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConcurrentsTable
     */
    public $Concurrents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.concurrents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Concurrents') ? [] : ['className' => ConcurrentsTable::class];
        $this->Concurrents = TableRegistry::getTableLocator()->get('Concurrents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Concurrents);

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
