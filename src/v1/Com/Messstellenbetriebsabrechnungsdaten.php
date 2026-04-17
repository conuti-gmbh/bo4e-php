<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\ArtikelIdTyp;

class Messstellenbetriebsabrechnungsdaten
{
    public function __construct(
        readonly ?bool $messstellenbetriebsabrechnung = null,
        readonly ?string $artikelId = null,
        readonly ?ArtikelIdTyp $artikelIdTyp = null,
        readonly ?int $anzahl = null,
        readonly ?float $zuschlag = null,
        readonly ?float $abschlag = null,
    ) {
    }
}
