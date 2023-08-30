<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Angebotsvariante;
use DateTime;

class Angebot
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?string $angebotsnummer,
        public ?string $anfragereferenz,
        public ?DateTime $angebotsdatum,
        public ?string $sparte,
        public ?DateTime $bindefrist,
        public ?Geschaeftspartner $angebotgeber,
        public ?Geschaeftspartner $angebotnehmer,
        public ?Ansprechpartner $unterzeichnerAngebotsnehmer,
        public ?Ansprechpartner $unterzeichnerAngebotsgeber,
        /** @var array<Angebotsvariante> $varianten */
        public array $varianten = []
    ) {
    }
}
