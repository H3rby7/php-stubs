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
     * SetUp Function
     */
    protected function setUp(): void {}
    /**
     * TearDown Function
     */
    protected function tearDown(): void {}
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
     * Register we expect an exception.
     * @see https://phpunit.de/manual/6.5/en/writing-tests-for-phpunit.html#writing-tests-for-phpunit.exceptions
     * @param string $exception_fqdn
     */
    public function expectException($expected_exception_fqdn) {}

    /**
     * Assert the exception to have the $excepted_code
     * @see https://phpunit.de/manual/6.5/en/writing-tests-for-phpunit.html#writing-tests-for-phpunit.exceptions
     * @param int $excepted_code
     */
    public function expectExceptionCode($excepted_code) {}

    /**
     * Assert the exception message to contain the $expected_message
     * @see https://phpunit.de/manual/6.5/en/writing-tests-for-phpunit.html#writing-tests-for-phpunit.exceptions
     * @param string $expected_message_regex
     */
    public function expectExceptionMessage($expected_message) {}

    /**
     * Assert the exception message to match the $expected_message_regex
     * @see https://phpunit.de/manual/6.5/en/writing-tests-for-phpunit.html#writing-tests-for-phpunit.exceptions
     * @param string $expected_message_regex
     */
    public function expectExceptionMessageRegExp($expected_message_regex) {}

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
    
    /**
     * Generate a return value for @see PHPUnit_Framework_MockObject
     * @param mixed $value to return
     * @return PHPUnit_Framework_MockObject_ReturnValue
     */
    public function returnValue($value) {}

    /**
     * Provide a function to run complex validations on input.
     * The $callable will be called with exactly one argument, which is the argument the mock was called with.
     * 
     * @param callable $callable function to validate mock input
     * @return boolean true if valid; false if invalid
     * 
     * @see https://docs.phpunit.de/en/9.5/test-doubles.html#test-doubles-mock-objects-examples-subjecttest3-php
     */
    public function callback($callable) {}
}
