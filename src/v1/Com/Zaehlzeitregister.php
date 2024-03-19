<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Schwachlastfaehig;

class Zaehlzeitregister
{
    public function __construct(
        readonly ?string $register = null,
        readonly ?string $zaehlzeitDefinition = null,
        readonly ?Schwachlastfaehig $schwachlastfaehig = null,
    ) {
    }
}
