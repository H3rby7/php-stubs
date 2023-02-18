<?php
/**
 * Self-written stubs for \Yoast\PHPUnitPolyfills\TestCases\TestCase
 */

namespace Yoast\PHPUnitPolyfills\TestCases;

/**
 * As used by PHPUnit_Adapter_TestCase
 */
abstract class TestCase
{
    public function assertTrue($bool, $message = '') {}
    public function assertFalse($bool, $message = '') {}
    public function assertSame($expected, $actual, $message = '') {}
    public function assertEmpty($var, $message = '') {}
    public function assertNotEmpty($var, $message = '') {}
    public function assertNull($var, $message = '') {}
    // public function assertNotNull($var, $message = '') {}
    public function assertCount($expected, $countable, $message = '') {}
    public function assertContains($needle, $hay_rray, $message = '') {}
    public function assertNotContains($needle, $hay_rray, $message = '') {}
    public function assertStringContainsString($needle, $haystack, $message = '') {}
    public function assertStringNotContainsString($needle, $haystack, $message = '') {}
    public function assertIsArray($actual, $message = '') {}
    public function assertArrayHasKey($desired_key, $actual, $message = '') {}
}
