<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Geraet;
use Conuti\BO4E\v1\COM\Zaehlwerk;
use Conuti\BO4E\v1\Interface\Geraetetyp;

class Zaehler
{
    public function __construct(
        public string $boTyp,
        public ?string $versionStruktur,
        public ?string $zaehlernummer,
        public ?string $sparte,
        public ?string $zaehlerauspraegung,
        public ?string $zaehlertyp,
        public ?string $tarifart,
        public ?float $zaehlerkonstante,
        public ?string $eichungBis,
        public ?Geschaeftspartner $zaehlerhersteller,
        public ?string $gateway,
        public ?string $fernschaltung,
        public ?string $messwerterfassung,
        public ?string $zaehlertypspezifikation,
        public ?string $befestigungsart,
        public ?string $zaehlergroesse,
        public ?string $mengenumwertertyp,
        public ?string $volumenerfassung,
        public ?string $serialnummer,
        public ?string $geraetemerkmal,
        public ?string $herstellungsdatum,
        public ?string $baujahr,
        public ?string $messlokationsId,
        public ?string $marktlokationsId,
        /** @var Geraet[] $geraete */
        public array $geraete = [],
        /** @var Zaehlwerk[] $zaehlwerke */
        public array $zaehlwerke = [],
    ) {
    }

    /**
     * @return Geraet[]
     */
    public function getGeraete(string $geraetetyp): array
    {
        return $this->getMultipleGeraete([$geraetetyp]);
    }

    public function getGeraet(string $geraetetyp): ?Geraet
    {
        $geraete = $this->getMultipleGeraete([$geraetetyp]);

        return $geraete ? $geraete[0] : null;
    }

    /**
     *  Gibt die Liste aller Geräte dieses Zählers zurück, die mindestens einem der übergebenen Gerätetypen entsprechen
     *
     * @param string[] $geraetetypen
     *
     * @return Geraet[]
     */
    public function getMultipleGeraete(array $geraetetypen): array
    {
        return array_filter(
            $this->geraete,
            static function (Geraet $geraet) use ($geraetetypen) {
                return in_array($geraet->geraeteeigenschaften?->geraetetyp, $geraetetypen);
            }
        );
    }

    /**
     * @return Geraet[]
     */
    public function getWandler(): array
    {
        return $this->getMultipleGeraete([
            Geraetetyp::BLOCKSTROMWANDLER,
            Geraetetyp::MESSWANDLERSATZ_IMS_MME,
            Geraetetyp::KOMBIMESSWANDLER,
            Geraetetyp::SPANNUNGSWANDLER,
        ]);
    }

    /**
     * @return Geraet[]
     */
    public function getKommunikationseinrichtungen(): array
    {
        return $this->getMultipleGeraete([
            Geraetetyp::MODEM_GSM,
            Geraetetyp::ETHERNET_KOM,
            Geraetetyp::PLC_COM,
            Geraetetyp::MODEM_FESTNETZ,
            Geraetetyp::DSL_KOM,
            Geraetetyp::LTE_KOM,
        ]);
    }

    /**
     * @return Geraet[]
     */
    public function getSteuereinrichtungen(): array
    {
        return $this->getMultipleGeraete([
            Geraetetyp::RUNDSTEUEREMPFAENGER,
            Geraetetyp::TARIFSCHALTGERAET,
        ]);
    }

    /**
     * @return Geraet[]
     */
    public function getMengenumwerter(): array
    {
        return $this->getMultipleGeraete([
            Geraetetyp::DICHTEMENGENUMWERTER,
            Geraetetyp::TEMPERATURMENGENUMWERTER,
            Geraetetyp::ZUSTANDSMENGENUMWERTER,
            Geraetetyp::MENGENUMWERTER,
        ]);
    }
}
