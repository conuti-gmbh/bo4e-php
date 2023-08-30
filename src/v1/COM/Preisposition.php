<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Preisposition
{
    public function __construct(
        public ?string $berechnungsmethode,
        public ?string $leistungstyp,
        public ?string $leistungsbezeichnung,
        public ?string $preiseinheit,
        public ?string $bezugsgroesse,
        public ?string $zeitbasis,
        public ?string $tarifzeit,
        public ?string $bdewArtikelnummer,
        public ?string $zonungsgroesse,
        public ?string $preisschluesselstamm,
        public ?int $positionsnummer,
        public ?string $messebene,
        public ?string $beschreibung,
        public ?Zeitraum $verarbeitungszeitraum,
        public ?string $artikelId,
        /** @var PositionsAufAbschlag[] */
        public array $zu_abschlaege = [],
        /** @var Preisstaffel[] */
        public array $preisstaffeln = []
    ) {
    }
}
