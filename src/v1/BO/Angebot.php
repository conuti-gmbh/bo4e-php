<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Angebotsvariante;
use Conuti\BO4E\v1\Enum\Sparte;
use DateTime;

class Angebot
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?string $angebotsnummer,
        readonly ?string $anfragereferenz,
        readonly ?DateTime $angebotsdatum,
        readonly ?Sparte $sparte,
        readonly ?DateTime $bindefrist,
        readonly ?Geschaeftspartner $angebotgeber,
        readonly ?Geschaeftspartner $angebotnehmer,
        readonly ?Ansprechpartner $unterzeichnerAngebotsnehmer,
        readonly ?Ansprechpartner $unterzeichnerAngebotsgeber,
        /** @var array<Angebotsvariante> $varianten */
        readonly array $varianten = []
    ) {
    }
}
