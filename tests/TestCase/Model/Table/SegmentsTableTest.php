<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SegmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SegmentsTable Test Case
 */
class SegmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SegmentsTable
     */
    public $Segments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.segments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Segments') ? [] : ['className' => SegmentsTable::class];
        $this->Segments = TableRegistry::getTableLocator()->get('Segments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Segments);

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
