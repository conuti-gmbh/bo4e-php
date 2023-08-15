<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Mengeneinheit;
use Conuti\BO4E\v1\Enum\Messwertstatus;
use Conuti\BO4E\v1\Enum\StatusArt;
use Conuti\BO4E\v1\Enum\Tarifstufe;
use Conuti\BO4E\v1\Enum\Verbrauchsmengetyp;
use Conuti\BO4E\v1\Enum\Wertermittlungsverfahren;

class Verbrauch
{
    public function __construct(
        readonly ?string $startdatum,
        readonly ?string $enddatum,
        readonly ?Wertermittlungsverfahren $wertermittlungsverfahren,
        readonly ?Messwertstatus $messwertstatus,
        readonly ?string $obiskennzahl,
        readonly int|float|null $wert,
        readonly ?Mengeneinheit $einheit,
        readonly ?Verbrauchsmengetyp $type,
        readonly ?Tarifstufe $tarifstufe,
        readonly ?string $nutzungszeitpunkt,
        readonly ?string $ausfuehrungszeitpunkt,
        readonly ?int $position,
        readonly ?string $ablesedatum,
        readonly ?string $leistungsperiode,
        /** @var StatusZusatzInformation[] */
        readonly array $statuszusatzinformationen = []
    ) {
    }

    /** @return StatusZusatzInformation[] */
    public function getStatuszusatzinformationenWithArt(StatusArt $art): array
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
