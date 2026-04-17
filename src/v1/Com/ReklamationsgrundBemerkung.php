<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class ReklamationsgrundBemerkung
{
    public function __construct(
        readonly ?string $bemerkung1 = null,
        readonly ?string $bemerkung2 = null,
        readonly ?string $bemerkung3 = null,
        readonly ?string $bemerkung4 = null,
        readonly ?string $bemerkung5 = null,
    ) {
    }
}
