<?php

namespace Yosmy\Phone;

use Exception as BaseException;
use JsonSerializable;

class VerificationException extends BaseException implements JsonSerializable
{
    /**
     * @param string $message
     */
    public function __construct(string $message)
    {
        parent::__construct($message);
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array
    {
        return [
            'class' => self::class,
            'message' => $this->getMessage()
        ];
    }
}