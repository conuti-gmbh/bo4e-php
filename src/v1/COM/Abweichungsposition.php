<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Abweichungsposition
{
    public function __construct(
        readonly ?string $abweichungsgrundCode,
        readonly ?string $abweichungsgrundCodeliste,
        readonly ?string $abweichungsgrundBemerkung,
        readonly ?string $zugehoerigeRechnung,
        readonly ?string $zugehoerigeBestellung,
    ) {
    }
}
