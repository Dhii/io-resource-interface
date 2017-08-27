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
}
