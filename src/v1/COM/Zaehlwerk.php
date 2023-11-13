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
        readonly ?string $zaehlwerkId,
        readonly ?string $bezeichnung,
        readonly ?Energierichtung $richtung,
        readonly ?string $obisKennzahl,
        readonly int|float|null $wandlerfaktor,
        readonly ?Mengeneinheit $einheit,
        readonly ?Schwachlastfaehig $schwachlastfaehig,
        readonly ?Verbrauchsart $verbrauchsart,
        readonly ?Unterbrechbarkeit $unterbrechbarkeit,
        readonly ?Waermenutzung $waermenutzung,
        readonly ?Konzessionsabgabe $konzessionsabgabe,
        readonly ?bool $steuerbefreit,
        readonly ?int $vorkommastelle,
        readonly ?int $nachkommastelle,
        readonly ?bool $abrechnungsrelevant,
        readonly ?int $anzahlAblesungen,
        readonly ?Zaehlzeitregister $zaehlzeiten,
        readonly ?string $konfiguration,
        readonly ?string $messprodukt,
        readonly ?Wertegranularitaet $wertegranularitaet,
        readonly ?NotwendigkeitZweiteMessung $notwendigkeitZweiteMessung,
        readonly ?WerteuebermittlungVerwendungszweck $werteuebermittlungVerwendungszweck,
        readonly ?ArtEmobilitaet $artEMobilitaet,
        readonly ?string $konfigurationsprodukt,
        readonly ?bool $keinKonfigurationsprodukt,
        readonly ?string $leistungskurvendefinition,
        /** @var Verwendungszweck[] */
        readonly array $verwendungszwecke = [],
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
