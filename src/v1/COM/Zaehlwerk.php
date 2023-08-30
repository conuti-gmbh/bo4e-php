<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\ArtEmobilitaet;
use Conuti\BO4E\v1\Enum\Energierichtung;
use Conuti\BO4E\v1\Enum\Marktrolle;
use Conuti\BO4E\v1\Enum\Mengeneinheit;
use Conuti\BO4E\v1\Enum\NotwendigkeitZweiteMessung;
use Conuti\BO4E\v1\Enum\Schwachlastfaehig;
use Conuti\BO4E\v1\Enum\Unterbrechbarkeit;
use Conuti\BO4E\v1\Enum\Verbrauchsart;
use Conuti\BO4E\v1\Enum\Waermenutzung;
use Conuti\BO4E\v1\Enum\Wertegranularitaet;
use Conuti\BO4E\v1\Enum\WerteuebermittlungVerwendungszweck;
use UnexpectedValueException;

class Zaehlwerk
{
    public function __construct(
        public ?string $zaehlwerkId,
        public ?string $bezeichnung,
        public ?Energierichtung $richtung,
        public ?string $obisKennzahl,
        public int|float|null $wandlerfaktor,
        public ?Mengeneinheit $einheit,
        public ?Schwachlastfaehig $schwachlastfaehig,
        public ?Verbrauchsart $verbrauchsart,
        public ?Unterbrechbarkeit $unterbrechbarkeit,
        public ?Waermenutzung $waermenutzung,
        public ?Konzessionsabgabe $konzessionsabgabe,
        public ?bool $steuerbefreit,
        public ?int $vorkommastelle,
        public ?int $nachkommastelle,
        public ?bool $abrechnungsrelevant,
        public ?int $anzahlAblesungen,
        public ?Zaehlzeitregister $zaehlzeiten,
        public ?string $konfiguration,
        public ?string $messprodukt,
        public ?Wertegranularitaet $wertegranularitaet,
        public ?NotwendigkeitZweiteMessung $notwendigkeitZweiteMessung,
        public ?WerteuebermittlungVerwendungszweck $werteuebermittlungVerwendungszweck,
        public ?ArtEmobilitaet $artEMobilitaet,
        /** @var Verwendungszweck[] */
        public array $verwendungszwecke = [],
    ) {
    }

    /**
     * @throws UnexpectedValueException
     */
    public function getVerwendungszweckeForRolle(Marktrolle $rolle): ?Verwendungszweck
    {
        $result = array_filter($this->verwendungszwecke, function (Verwendungszweck $zweck) use ($rolle) {
            return $zweck->marktrolle === $rolle;
        });

        return match (count($result)) {
            0 => null,
            1 => current($result),
            default => throw new UnexpectedValueException(
                sprintf('Nicht mehr als ein Verwendungszweck für Marktrolle "%s" erwartet', $rolle->value)
            )
        };
    }
}
