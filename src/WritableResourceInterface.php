<?php

namespace Dhii\Io\Resource;

/**
 * A resource that can be written to.
 *
 * @since [*next-version*]
 */
interface WritableResourceInterface extends ResourceInterface
{
    /**
     * Writes to this instance.
     *
     * @since [*next-version*]
     *
     * @param int $string The data to write.
     *
     * @return int The amount of bytes written.
     */
    public function write($string);
}
