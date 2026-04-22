<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Verbrauchsart;

class TechnischeEinrichtung
{
    public function __construct(
        readonly ?bool $technischeEinrichtungenVorhanden = null,
        readonly ?Verbrauchsart $verbrauchsart = null,
    ) {
    }
}
