<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Gemeinderabatt
{
    public function __construct(
        readonly ?float $wert = null,
        readonly ?string $einheit = null,
        readonly ?string $typ = null,
        readonly ?float $bemessungsgrundlage = null,
    ) {
    }
}
