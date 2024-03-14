<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Abweichungsposition
{
    public function __construct(
        readonly ?string $abweichungsgrundCode = null,
        readonly ?string $abweichungsgrundCodeliste = null,
        readonly ?string $abweichungsgrundBemerkung = null,
        readonly ?string $zugehoerigeRechnung = null,
        readonly ?string $zugehoerigeBestellung = null,
    ) {
    }
}
