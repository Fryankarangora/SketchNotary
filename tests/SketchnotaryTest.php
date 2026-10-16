<?php
/**
 * Tests for SketchNotary
 */

use PHPUnit\Framework\TestCase;
use Sketchnotary\Sketchnotary;

class SketchnotaryTest extends TestCase {
    private Sketchnotary $instance;

    protected function setUp(): void {
        $this->instance = new Sketchnotary(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Sketchnotary::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
