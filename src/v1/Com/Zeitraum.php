<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Zeiteinheit;
use DateTime;

class Zeitraum
{
    public function __construct(
        readonly ?Zeiteinheit $zeiteinheit = null,
        readonly ?int $dauer = null,
        readonly ?DateTime $startdatum = null,
        readonly ?DateTime $enddatum = null,
        readonly ?Zeiteinheit $einheit = null,
        readonly ?string $ableseZeitraum = null,
        readonly ?string $abrechnungsZeitraum = null,
        readonly ?string $zeitraumText = null,
        readonly ?int $zeitraumId = null,
    ) {
    }
}
