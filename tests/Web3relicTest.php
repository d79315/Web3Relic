<?php
/**
 * Tests for Web3Relic
 */

use PHPUnit\Framework\TestCase;
use Web3relic\Web3relic;

class Web3relicTest extends TestCase {
    private Web3relic $instance;

    protected function setUp(): void {
        $this->instance = new Web3relic(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Web3relic::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
