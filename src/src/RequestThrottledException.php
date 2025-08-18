<?php

namespace Javanile\Imap2;

use Exception;

class RequestThrottledException extends Exception
{
    /**
     * Suggested backoff time in milliseconds.
     *
     * @var int
     */
    protected $backoffTime;

    public function __construct(int $backoffTime, string $message = '', int $code = 0, ?Exception $previous = null)
    {
        $this->backoffTime = $backoffTime;
        if ($message === '') {
            $message = "Request is throttled. Suggested Backoff Time: {$backoffTime} milliseconds";
        }
        parent::__construct($message, $code, $previous);
    }

    public function getBackoffTime(): int
    {
        return $this->backoffTime;
    }
}
