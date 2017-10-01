<?php

namespace Dhii\Io\Resource\UnitTest\Exception;

use Xpmock\TestCase;
use Dhii\Io\Resource\Exception\ResourceExceptionInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class ResourceExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Io\Resource\Exception\ResourceExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                ->getResource()

                // ThrowableInterface
                ->getMessage()
                ->getCode()
                ->getFile()
                ->getLine()
                ->getTrace()
                ->getTraceAsString()
                ->getPrevious()
                ->__toString()
                ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'A valid instance of the subject could not be created');
        $this->assertInstanceOf('Dhii\Exception\ThrowableInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Dhii\Io\Resource\ResourceAwareInterface', $subject, 'Subject does not implement required interface');
    }
}
