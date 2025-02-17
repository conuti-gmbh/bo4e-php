<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Oekolabel;
use Conuti\BO4E\v1\Enum\Oekozertifikat;

class Energiemix
{
    public function __construct(
        /** @var ?Energieherkunft[] */
        readonly ?array $anteil = null,
        readonly ?float $atommuell = null,
        readonly ?string $bemerkung = null,
        readonly ?string $bezeichnung = null,
        readonly ?float $co2_emission = null,
        readonly ?Sparte $energieart = null,
        readonly ?int $energiemixnummer = null,
        readonly ?int $gueltigkeitsjahr = null,
        readonly ?bool $ist_in_oeko_top_ten = null,
        /** @var ?Oekolabel[] */
        readonly ?array $oekolabel = null,
        /** @var ?Oekozertifikat[] */
        readonly ?array $oekozertifikate = null,
        readonly ?string $website = null,
    ) {
    }
}
