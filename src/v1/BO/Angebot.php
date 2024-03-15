<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Angebotsvariante;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Sparte;
use DateTime;

class Angebot
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::ANGEBOT,
        readonly string $versionStruktur = "1",
        readonly ?string $angebotsnummer = null,
        readonly ?string $anfragereferenz = null,
        readonly ?DateTime $angebotsdatum = null,
        readonly ?Sparte $sparte = null,
        readonly ?DateTime $bindefrist = null,
        readonly ?Geschaeftspartner $angebotgeber = null,
        readonly ?Geschaeftspartner $angebotnehmer = null,
        readonly ?Ansprechpartner $unterzeichnerAngebotsnehmer = null,
        readonly ?Ansprechpartner $unterzeichnerAngebotsgeber = null,
        /** @var array<Angebotsvariante> $varianten */
        readonly array $varianten = [],
    ) {
    }
}
