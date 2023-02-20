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
    /**
     * Assert $bool is true
     * @param boolean $bool the value to check
     * @param string $message optional message to show if assertion fails.
     */
    public function assertTrue($bool, $message = '') {}

    /**
     * Assert $bool is false
     * @param boolean $bool the value to check
     * @param string $message optional message to show if assertion fails.
     */
    public function assertFalse($bool, $message = '') {}

    /**
     * Compare $expected with $actual using '==='
     * @param mixed $expected value
     * @param mixed $actual the value to check
     * @param string $message optional message to show if assertion fails.
     */
    public function assertSame($expected, $actual, $message = '') {}

    /**
     * Check $actual via isEmpty
     * @param mixed $actual the value to check
     * @param string $message optional message to show if assertion fails.
     */
    public function assertEmpty($actual, $message = '') {}

    /**
     * Check $actual via !isEmpty
     * @param mixed $actual the value to check
     * @param string $message optional message to show if assertion fails.
     */
    public function assertNotEmpty($actual, $message = '') {}

    /**
     * Check $actual via isNull
     * @param mixed $actual the value to check
     * @param string $message optional message to show if assertion fails.
     */
    public function assertNull($actual, $message = '') {}

    /**
     * Assert $actual_countable is of size $expected
     * @param mixed $expected count
     * @param mixed $actual_countable a countable
     * @param string $message optional message to show if assertion fails.
     */
    public function assertCount($expected, $actual_countable, $message = '') {}

    /**
     * Check if $actual_array contains $desired
     * @param mixed $desired item
     * @param mixed $actual_array
     * @param string $message optional message to show if assertion fails.
     */
    public function assertContains($desired, $actual_array, $message = '') {}

    /**
     * Check that $actual_array does not contain $undesired
     * @param mixed $undesired item
     * @param mixed $actual_array
     * @param string $message optional message to show if assertion fails.
     */
    public function assertNotContains($undesired, $actual_array, $message = '') {}

    /**
     * Check that $actual contains $desired
     * @param string $desired item
     * @param string $actual
     * @param string $message optional message to show if assertion fails.
     */
    public function assertStringContainsString($desired, $actual, $message = '') {}

    /**
     * Check that $actual does not contain $undesired
     * @param string $undesired item
     * @param string $actual
     * @param string $message optional message to show if assertion fails.
     */
    public function assertStringNotContainsString($undesired, $actual, $message = '') {}

    /**
     * Assert that $actual is an array
     * @param mixed $actual the value to check
     * @param string $message optional message to show if assertion fails.
     */
    public function assertIsArray($actual, $message = '') {}

    /**
     * Check if $actual contains $desired_key
     * @param string $desired_key
     * @param mixed $actual
     * @param string $message optional message to show if assertion fails.
     */
    public function assertArrayHasKey($desired_key, $actual, $message = '') {}

    /**
     * Start building mock for a class
     * @param string $class_fqdn
     * @return PHPUnit_Framework_MockBuilder
     */
    public function getMockBuilder($class_fqdn) {}

    /**
     * invoke any number of times
     * @return PHPUnit_Framework_MockObject_Matcher_InvokedCount
     */
    public function any() {}
    /**
     * invoke once
     * @return PHPUnit_Framework_MockObject_Matcher_InvokedCount
     */
    public function once() {}
    /**
     * invoke never
     * @return PHPUnit_Framework_MockObject_Matcher_InvokedCount
     */
    public function never() {}
    /**
     * invoke exactly X times
     * @param number $times
     * @return PHPUnit_Framework_MockObject_Matcher_InvokedCount
     */
    public function exactly($times) {}
    /**
     * invoke at least once
     * @return PHPUnit_Framework_MockObject_Matcher_InvokedAtLeastOnce
     */
    public function atLeastOnce() {}
    /**
     * invoke when the method it is evaluated for is invoked at the given $index
     * @param number $index
     * @return PHPUnit_Framework_MockObject_Matcher_InvokedAtIndex
     */
    public function at($index) {}
}
