<?php
/**
 * Tests for KeyEdge
 */

use PHPUnit\Framework\TestCase;
use Keyedge\Keyedge;

class KeyedgeTest extends TestCase {
    private Keyedge $instance;

    protected function setUp(): void {
        $this->instance = new Keyedge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Keyedge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
