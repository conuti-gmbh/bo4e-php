<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Marktrolle;
use Conuti\BO4E\v1\Enum\VerwendungszweckValue;

class Verwendungszweck
{
    public function __construct(
        readonly ?Marktrolle $marktrolle = null,
        /** @var VerwendungszweckValue[] */
        readonly array $zweck = [],
    ) {
    }
}
