<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

class Bilanzkreis
{
    public function __construct(
        readonly ?string $bezeichnung,
        readonly ?int $prioritaet
    ) {
    }
}
