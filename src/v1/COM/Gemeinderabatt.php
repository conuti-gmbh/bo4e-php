<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Gemeinderabatt
{
    public function __construct(
        readonly int|float|null $wert,
        readonly ?string $einheit,
        readonly ?string $typ = '',
        readonly int|float|null $bemessungsgrundlage = null
    ) {
    }
}
