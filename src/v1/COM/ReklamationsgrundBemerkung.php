<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class ReklamationsgrundBemerkung
{
    public function __construct(
        readonly ?string $bemerkung1,
        readonly ?string $bemerkung2,
        readonly ?string $bemerkung3,
        readonly ?string $bemerkung4,
        readonly ?string $bemerkung5
    ) {
    }
}
