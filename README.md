# Dhii - IO - Resource - Interface

[![Build Status](https://travis-ci.org/Dhii/io-resource-interface.svg?branch=master)](https://travis-ci.org/Dhii/io-resource-interface)
[![Code Climate](https://codeclimate.com/github/Dhii/io-resource-interface/badges/gpa.svg)](https://codeclimate.com/github/Dhii/io-resource-interface)
[![Test Coverage](https://codeclimate.com/github/Dhii/io-resource-interface/badges/coverage.svg)](https://codeclimate.com/github/Dhii/io-resource-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/io-resource-interface/version)](https://packagist.org/packages/dhii/io-resource-interface)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

Interfaces for resource interoperability.

## Details
This package aims to accomplish these main goals:

1. Provide a standard for stream interoperability that is separate from [PSR-7].
The PSR-7 standard is large and unwieldly, and we felt like streaming is a
concept separate from HTTP messaging, because many consumers of input and output
do not care or need to care where the input or output points to. For example,
`stdout` has nothing to do with HTTP or networking per se. Instead,
interoperable streams should be used to write or read data regardless of the
source or target.
2. Restore [ISP] for stream interop standard. The PSR-7 standard aggregates many
functions of streams in one large interface. This is non-[SOLID], because a
consumer may want to only write to a stream, and the stream may not even be
readable; and vice-versa. At the same time, with ISP, it is possible to detect
abilities of a stream using the [`instanceof`] operator, which is clean and
we feel that it is more correct.
3. Provide compatibility with existing [Dhii] standards. The ability of a stream
to be converted to string is therefore formalized, meaning that a readable
stream can be provided wherever a [stringable] value is expected, which is very
convenient.
4. Abstract the concept of "resource". All streams are resources in the general
meaning, but not all resources are streams. A resource object can allow writing
to a variable in memory, not only to an actual stream or file. A database
connection could also be a resource, and one could execute queries by writing
to such a resource.

### Compatibility
Interfaces in this package are mostly compatible with the [`StreamInterface`]
interface defined in PSR-7, albeit splitting it into more segregated parts. One major
difference is that [`ReadableResourceInterface#__toString()`] is not expected to
seek to the beginning of the resource, but may simply return the remainder of
the content. This is mainly because seeking capabilities are separated from
reading capabilities. If implementations wish to be compatible with that
behaviour of [`StreamInterface#__toString()`], they are encouraged to detect
seek-ability and perform the rewind, if possible.

### Interfaces
- [`ResourceInterface`] - The base interface for all resources. Implies that
any resource can determine whether it's open, can be closed explicitly, opened
implicitly, and can attempt to determine its size.
- [`ReadableResourceInterface`] - A resource that can be read from. Implies that
it is possible to read the whole contents of it, or a part of the contents,
and determine whether there is any more data.
- [`WritableResourceInterface`] - A resource that can be written to. Implies
that it's possible to write a series of bytes to it.
- [`ResourceAwareInterface`] - Something that can have a resource retrieved.
- [`ResourceExceptionInterface`] - An exception that is related to a resource.
- [`CouldNotReadExceptionInterface`] - An exception that occurs when a
readable resource is unable to be read from.
- [`CouldNotWriteExceptionInterface`] - An exception that occurs when a writable
resource is unable to be written to.


[Dhii]:         https://github.com/Dhii/dhii
[PSR-7]:        http://www.php-fig.org/psr/psr-7/
[ISP]:          https://en.wikipedia.org/wiki/Interface_segregation_principle
[SOLID]:        https://en.wikipedia.org/wiki/SOLID_(object-oriented_design)
[stringable]:   https://github.com/Dhii/stringable-interface

[`instanceof`]:                             php.net/manual/en/internals2.opcodes.instanceof.php
[`StreamInterface`]:                        https://github.com/php-fig/http-message/blob/master/src/StreamInterface.php
[`ReadableResourceInterface#__toString()`]: https://github.com/Dhii/io-resource-interface/blob/task/initial-interfaces/src/ReadableResourceInterface.php#L44
[`StreamInterface#__toString()`]:           https://github.com/php-fig/http-message/blob/master/src/StreamInterface.php#L28

[`ResourceInterface`]:                  src/ResourceInterface.php
[`ReadableResourceInterface`]:          src/ReadableResourceInterface.php
[`WritableResourceInterface`]:          src/WritableResourceInterface.php
[`ResourceAwareInterface`]:             src/ResourceAwareInterface.php
[`ResourceExceptionInterface`]:         src/Exception/ResourceExceptionInterface.php
[`CouldNotReadExceptionInterface`]:     src/Exception/CouldNotReadExceptionInterface.php
[`CouldNotWriteExceptionInterface`]:    src/Exception/CouldNotWriteExceptionInterface.php
