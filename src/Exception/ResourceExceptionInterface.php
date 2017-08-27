<?php

namespace Dhii\Io\Resource\Exception;

use Dhii\Exception\ThrowableInterface;
use Dhii\Io\Resource\ResourceAwareInterface;

/**
 * An exception that occurs in relation to a resource.
 *
 * @since [*next-version*]
 */
interface ResourceExceptionInterface extends
        ThrowableInterface,
        ResourceAwareInterface
{
}
