<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Herausgeber;

class Tagesparameter
{
    public function __construct(
        readonly ?string $klimazone = null,
        readonly ?string $temperaturmessstelle = null,
        readonly ?string $dienstanbieter = null,
        readonly ?Herausgeber $herausgeber = null,
    ) {
    }
}
