<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Adresse;

class Sperrauftrag
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?Adresse $treffpunkt,
    ) {
    }
}
