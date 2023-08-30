<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use UnexpectedValueException;

class Zaehlwerk
{
    public function __construct(
        public ?string $zaehlwerkId,
        public ?string $bezeichnung,
        public ?string $richtung,
        public ?string $obisKennzahl,
        public int|float|null $wandlerfaktor,
        public ?string $einheit,
        public ?string $schwachlastfaehig,
        public ?string $verbrauchsart,
        public ?string $unterbrechbarkeit,
        public ?string $waermenutzung,
        public ?Konzessionsabgabe $konzessionsabgabe,
        public ?bool $steuerbefreit,
        public ?int $vorkommastelle,
        public ?int $nachkommastelle,
        public ?bool $abrechnungsrelevant,
        public ?int $anzahlAblesungen,
        public ?Zaehlzeitregister $zaehlzeiten,
        public ?string $konfiguration,
        public ?string $messprodukt,
        public ?string $wertegranularitaet,
        public ?string $notwendigkeitZweiteMessung,
        public ?string $werteuebermittlungVerwendungszweck,
        public ?string $artEMobilitaet,
        /** @var Verwendungszweck[] */
        public array $verwendungszwecke = [],
    ) {
    }

    /**
     * @throws UnexpectedValueException
     */
    public function getVerwendungszweckeForRolle(string $rolle): ?Verwendungszweck
    {
        $result = array_filter($this->verwendungszwecke, function (Verwendungszweck $zweck) use ($rolle) {
            return $zweck->marktrolle === $rolle;
        });

        return match (count($result)) {
            0 => null,
            1 => current($result),
            default => throw new UnexpectedValueException(
                sprintf('Nicht mehr als ein Verwendungszweck für string "%s" erwartet', $rolle)
            )
        };
    }
}
