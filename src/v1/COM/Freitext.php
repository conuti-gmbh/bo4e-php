<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class Freitext
{
    public function __construct(
        readonly ?string $freitext1,
        readonly ?string $freitext2,
        readonly ?string $freitext3,
        readonly ?string $freitext4,
        readonly ?string $freitext5,
    ) {
    }
}
