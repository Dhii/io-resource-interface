<?php

namespace Dhii\Io\Resource;

/**
 * A resource that can be read from.
 *
 * @since [*next-version*]
 */
interface ReadableResourceInterface extends ResourceInterface
{
    /**
     * Reads from this instance.
     *
     * @since [*next-version*]
     *
     * @param int $length The amount of bytes to read from the resource.
     *
     * @return string|false The contents of the resource, if successful;
     *                      false otherwise.
     */
    public function read($length);
}
