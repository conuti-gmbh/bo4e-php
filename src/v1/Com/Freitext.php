<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Freitext
{
    public function __construct(
        readonly ?string $freitext1 = null,
        readonly ?string $freitext2 = null,
        readonly ?string $freitext3 = null,
        readonly ?string $freitext4 = null,
        readonly ?string $freitext5 = null,
    ) {
    }
}
