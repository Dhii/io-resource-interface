<?php

namespace Dhii\Io\Resource;

/**
 * Something that can have a resource retrieved from it.
 *
 * @since [*next-version*]
 */
interface ResourceAwareInterface
{
    /**
     * Retrieves the resource associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return ResourceInterface The resource.
     */
    public function getResource();
}
