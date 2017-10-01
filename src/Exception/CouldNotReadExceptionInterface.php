<?php

namespace Dhii\Io\Resource\Exception;

use Dhii\Io\Resource\ReadableResourceInterface;

/**
 * An exception which occurs when a resource cannot be read from.
 *
 * @since [*next-version*]
 */
interface CouldNotReadExceptionInterface extends ResourceExceptionInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return ReadableResourceInterface The resource.
     */
    public function getResource();
}
