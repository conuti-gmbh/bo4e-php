<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Objectcode
{
    public function __construct(
        readonly ?string $objectcode = null,
        readonly ?int $lokationsbuendelNummer = null,
    ) {
    }
}
