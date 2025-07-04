<?php

namespace Binance\Common\Dtos;

/**
 * @template T
 */
class ApiResponse
{
    private $statusCode;

    /**
     * Summary of headers.
     */
    private $headers;

    /**
     * Data model.
     *
     * @param null|T $data
     */
    private $data;

    /**
     * rateLimit information holder.
     *
     * @var RateLimit[]
     */
    private $rateLimit;

    /**
     * Summary of __construct.
     *
     * @param mixed $statusCode
     * @param mixed $headers
     * @param T     $data
     * @param mixed $rateLimit
     */
    public function __construct($statusCode, $headers, $data, $rateLimit)
    {
        $this->statusCode = $statusCode;
        $this->headers = $headers;
        $this->data = $data;
        $this->rateLimit = $rateLimit;
    }

    /**
     * Gets the response status code.
     *
     * The status code is a 3-digit integer result code of the server's attempt
     * to understand and satisfy the request.
     *
     * @return int status code
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * Retrieves all message header values.
     *
     * The keys represent the header name as it will be sent over the wire, and
     * each value is an array of strings associated with the header.
     *
     *     // Represent the headers as a string
     *     foreach ($message->getHeaders() as $name => $values) {
     *         echo $name . ": " . implode(", ", $values);
     *     }
     *
     *     // Emit headers iteratively:
     *     foreach ($message->getHeaders() as $name => $values) {
     *         foreach ($values as $value) {
     *             header(sprintf('%s: %s', $name, $value), false);
     *         }
     *     }
     *
     * While header names are not case-sensitive, getHeaders() will preserve the
     * exact case in which headers were originally specified.
     *
     * @return string[][] Returns an associative array of the message's headers. Each
     *                    key MUST be a header name, and each value MUST be an array of strings
     *                    for that header.
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * Get the actual response data.
     *
     * @return T
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Get rate limits.
     *
     * @return RateLimit[]
     */
    public function getRateLimit(): array
    {
        return $this->rateLimit;
    }
}
