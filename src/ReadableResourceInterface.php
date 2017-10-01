<?php

namespace Dhii\Io\Resource;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * A resource that can be read from.
 *
 * @since [*next-version*]
 */
interface ReadableResourceInterface extends
    ResourceInterface,
    Stringable
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

    /**
     * Determines if the end of file has been reached.
     *
     * @since [*next-version*]
     *
     * @return bool True if end of file reached; false otherwise.
     */
    public function eof();

    /**
     * Retrieves the remaining contents of the stream.
     *
     * @since [*next-version*]
     *
     * @return string The content of this stream.
     */
    public function __toString();
}
