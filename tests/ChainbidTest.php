<?php
/**
 * Tests for ChainBid
 */

use PHPUnit\Framework\TestCase;
use Chainbid\Chainbid;

class ChainbidTest extends TestCase {
    private Chainbid $instance;

    protected function setUp(): void {
        $this->instance = new Chainbid(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainbid::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
