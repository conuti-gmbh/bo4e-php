<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Abtretungserklaerung
{
    public function __construct(
        readonly ?string $passwort = null,
        readonly ?string $link1 = null,
        readonly ?string $link2 = null,
        readonly ?string $link3 = null,
        readonly ?string $link4 = null,
        readonly ?string $link5 = null,
    ) {
    }
}
