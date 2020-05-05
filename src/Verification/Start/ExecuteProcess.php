<?php

namespace Yosmy\Phone\Verification\Start;

use Yosmy\Phone\VerificationException;

interface ExecuteProcess
{
    /**
     * @param string $country
     * @param string $prefix
     * @param string $number
     * @param string $template
     *
     * @throws VerificationException
     */
    public function execute(
        string $country,
        string $prefix,
        string $number,
        string $template
    );
}