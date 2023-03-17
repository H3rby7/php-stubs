<?php

namespace PHPUnit\Framework;

abstract class Assert 
{
  /**
     * Assert $bool is true
     * @param boolean $bool the value to check
     * @param string $message optional message to show if assertion fails.
     */
    static public function assertTrue($bool, $message = '') {}

    /**
     * Assert $bool is false
     * @param boolean $bool the value to check
     * @param string $message optional message to show if assertion fails.
     */
    static public function assertFalse($bool, $message = '') {}

    /**
     * Compare $expected with $actual using '==='
     * @param mixed $expected value
     * @param mixed $actual the value to check
     * @param string $message optional message to show if assertion fails.
     */
    static public function assertSame($expected, $actual, $message = '') {}

    /**
     * Check $actual via isEmpty
     * @param mixed $actual the value to check
     * @param string $message optional message to show if assertion fails.
     */
    static public function assertEmpty($actual, $message = '') {}

    /**
     * Check $actual via !isEmpty
     * @param mixed $actual the value to check
     * @param string $message optional message to show if assertion fails.
     */
    static public function assertNotEmpty($actual, $message = '') {}
}