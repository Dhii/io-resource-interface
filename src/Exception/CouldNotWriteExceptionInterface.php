<?php

namespace Dhii\Io\Resource\Exception;

use Dhii\Io\Resource\WritableResourceInterface;

/**
 * An exception which occurs when a resource cannot be written to.
 *
 * @since [*next-version*]
 */
interface CouldNotWriteExceptionInterface extends ResourceExceptionInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return WritableResourceInterface The resource.
     */
    public function getResource();
}
