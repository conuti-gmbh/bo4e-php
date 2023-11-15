<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Objectcode
{
    public function __construct(
        readonly ?string $objectcode,
        readonly ?int $lokationsbuendelNummer
    ) {
    }
}
