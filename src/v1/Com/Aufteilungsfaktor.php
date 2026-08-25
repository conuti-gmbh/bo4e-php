<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Aufteilungsfaktor
{
    public function __construct(
        readonly ?string $bezeichnungAufteilungsfaktor = null,
        readonly ?float $faktor = null,
    ) {
    }
}
