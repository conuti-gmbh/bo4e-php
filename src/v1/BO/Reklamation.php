<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Zeitraum;

class Reklamation
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?string $lokationsId,
        public ?string $lokationsTyp,
        public ?string $obiskennzahl,
        public ?Zeitraum $zeitraumMesswertanfrage,
        public ?string $reklamationsgrund,
        public ?string $reklamationsgrundBemerkung,
    ) {
    }
}
