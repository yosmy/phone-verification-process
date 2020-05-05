<?php

namespace Yosmy\Phone\Verification\Complete;

use Yosmy\Phone\VerificationException;

interface ExecuteProcess
{
    /**
     * @param string $country
     * @param string $prefix
     * @param string $number
     * @param string $code
     *
     * @throws VerificationException
     */
    public function execute(
        string $country,
        string $prefix,
        string $number,
        string $code
    );
}