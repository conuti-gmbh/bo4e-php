<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Cdoc;

class ProcessData
{
    public function __construct(
        readonly ?Stammdaten $stammdaten = null,
        readonly ?Transaktionsdaten $transaktionsdaten = null,
        readonly ?Zusatzdaten $zusatzdaten = null,
    ) {
    }
}
