<?php

namespace Dhii\Io\Resource;

/**
 * Represents a resource.
 *
 * @since [*next-version*]
 */
interface ResourceInterface
{
    /**
     * Determines whether the connection to this resource is active.
     * 
     * @since [*next-version*]
     *
     * @return bool True if the resource is currently open; false otherwise.
     */
    public function isOpen();

    /**
     * Closes the connection that is represented by this instance.
     *
     * @since [*next-version*]
     *
     * @return bool True if the resource was successfully closed;
     *              false if already closed.
     */
    public function close();

    /**
     * Gets the size of the stream, if known.
     *
     * @since [*next-version*]
     *
     * @return int|null The size in bytes, if known; null otherwise.
     */
    public function getSize();
}
