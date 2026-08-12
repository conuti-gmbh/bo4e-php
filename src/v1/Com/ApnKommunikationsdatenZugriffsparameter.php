<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class ApnKommunikationsdatenZugriffsparameter
{
    public function __construct(
        readonly ?string $apnName = null,
        readonly ?string $nutzer = null,
        readonly ?string $passwort = null,
    ) {
    }
}
