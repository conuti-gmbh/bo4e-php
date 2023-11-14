<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\ArtikelIdTyp;

class Messstellenbetriebsabrechnungsdaten
{
    public function __construct(
        readonly ?bool $messstellenbetriebsabrechnung,
        readonly ?string $artikelId,
        readonly ?ArtikelIdTyp $artikelIdTyp,
        readonly ?int $anzahl,
        readonly ?float $zuschlag,
        readonly ?float $abschlag
    ) {
    }
}
