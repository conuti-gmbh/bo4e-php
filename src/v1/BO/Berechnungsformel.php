<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Rechenschritt;
use Conuti\BO4E\v1\COM\Verwendungszweck;

class Berechnungsformel
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?string $beginndatum,
        public ?string $notwendigkeit,
        public ?string $lieferrichtung,
        public ?int $rechenschrittId,
        public ?Rechenschritt $rechenschritt,
        /** @var Rechenschritt[] */
        public array $rechenschritte = [],
        /** @var Verwendungszweck[] */
        public array $verwendungszweck = []
    ) {
    }

    public function getVerwendungszweck1st(): ?Verwendungszweck
    {
        return count($this->verwendungszweck) === 1 ? $this->verwendungszweck[0] : null;
    }
}
