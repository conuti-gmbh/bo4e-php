<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Interface\StatusArt;

class Verbrauch
{
    public function __construct(
        public ?string $startdatum,
        public ?string $enddatum,
        public ?string $wertermittlungsverfahren,
        public ?string $messwertstatus,
        public ?string $obiskennzahl,
        public int|float|null $wert,
        public ?string $einheit,
        public ?string $type,
        public ?string $tarifstufe,
        public ?string $nutzungszeitpunkt,
        public ?string $ausfuehrungszeitpunkt,
        public ?int $position,
        public ?string $ablesedatum,
        public ?string $leistungsperiode,
        /** @var StatusZusatzInformation[] */
        public array $statuszusatzinformationen = []
    ) {
    }

    /** @return StatusZusatzInformation[] */
    public function getStatuszusatzinformationenWithArt(string $art): array
    {
        return array_filter($this->statuszusatzinformationen, static function ($item) use ($art) {
            return $item->art === $art;
        });
    }

    /** @return StatusZusatzInformation[] */
    public function getPlausibilisierungshinweise(): array
    {
        return $this->getStatuszusatzinformationenWithArt(StatusArt::PLAUSIBILISIERUNGSHINWEIS);
    }

    public function hasPlausibilisierungshinweise(): bool
    {
        return count($this->getPlausibilisierungshinweise()) > 0;
    }

    public function hasErsatzwertbildungsverfahren(): bool
    {
        return count($this->getErsatzwertbildungsverfahren()) > 0;
    }

    /** @return StatusZusatzInformation[] */
    public function getErsatzwertbildungsverfahren(): array
    {
        return $this->getStatuszusatzinformationenWithArt(StatusArt::ERSATZWERTBILDUNGSVERFAHREN);
    }

    /** @return StatusZusatzInformation[] */
    public function getKorrekturgruende(): array
    {
        return $this->getStatuszusatzinformationenWithArt(StatusArt::KORREKTURGRUND);
    }

    /** @return StatusZusatzInformation[] */
    public function getGruendeDerErsatzwertbildung(): array
    {
        return $this->getStatuszusatzinformationenWithArt(StatusArt::GRUND_ERSATZWERTBILDUNGSVERFAHREN);
    }

    public function hasGruendeDerErsatzwertbildung(): bool
    {
        return count($this->getGruendeDerErsatzwertbildung()) > 0;
    }

    /**
     * @return StatusZusatzInformation[]
     */
    public function getMessklassifizierungen(): array
    {
        return $this->getStatuszusatzinformationenWithArt(StatusArt::MESSKLASSIFIZIERUNG);
    }

    public function hasMessklassifizierungen(): bool
    {
        return count($this->getMessklassifizierungen()) > 0;
    }
}
