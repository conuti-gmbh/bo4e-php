<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class AntwortStatusZeitraum
{
    public function __construct(
        readonly ?string $code = null,
        readonly ?string $liste = null,
        readonly ?int $zeitraumId = null,
        readonly ?string $freitext = null,
    ) {
    }
}
