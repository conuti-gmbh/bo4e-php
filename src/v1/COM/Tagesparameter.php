<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Herausgeber;

class Tagesparameter
{
    public function __construct(
        readonly ?string $klimazone,
        readonly ?string $temperaturmessstelle,
        readonly ?string $dienstanbieter,
        readonly ?Herausgeber $herausgeber,
    ) {
    }
}
