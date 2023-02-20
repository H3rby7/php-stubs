<?php
/**
 * Self-written stubs for phpunit
 */

/**
 * As used by phpunit
 * @see https://phpunit.de/manual/6.5/en/test-doubles.html
 */
abstract class PHPUnit_Framework_MockBuilder
{
    /**
     * Define the methods that will be mocked
     * @param array $methods to mock
     * @return PHPUnit_Framework_MockBuilder
     */
    public function setMethods($methods) {}

    /**
     * Build Mock
     * @return PHPUnit_Framework_MockObject the Mock
     */
    public function getMock() {}

}

abstract class PHPUnit_Framework_MockObject 
{
    /**
     * Expect mock invoked $times times
     * @param PHPUnit_Framework_MockObject_Matcher $times to invoke
     * @return PHPUnit_Framework_MockObject the Mock
     */
    public function expects($times) {}

    /**
     * Expect mock to be invoked with the $args given
     * @param array $args expected
     * @return PHPUnit_Framework_MockObject the Mock
     */
    public function with(...$args) {}

    /**
     * Define return $value for the mock invocation
     * @param mixed $value expected
     */
    public function will($value) {}
}

abstract class PHPUnit_Framework_MockObject_Matcher {}
class PHPUnit_Framework_MockObject_Matcher_InvokedCount extends PHPUnit_Framework_MockObject_Matcher {}
class PHPUnit_Framework_MockObject_Matcher_InvokedAtLeastOnce extends PHPUnit_Framework_MockObject_Matcher {}
class PHPUnit_Framework_MockObject_Matcher_InvokedAtIndex extends PHPUnit_Framework_MockObject_Matcher {}