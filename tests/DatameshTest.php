<?php
/**
 * Tests for DataMesh
 */

use PHPUnit\Framework\TestCase;
use Datamesh\Datamesh;

class DatameshTest extends TestCase {
    private Datamesh $instance;

    protected function setUp(): void {
        $this->instance = new Datamesh(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Datamesh::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
