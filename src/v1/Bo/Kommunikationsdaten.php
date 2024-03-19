<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use DateTime;

class Kommunikationsdaten
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::KOMMUNIKATIONSDATEN,
        readonly string $versionStruktur = '1',
        readonly ?DateTime $gueltigkeit = null,
        readonly ?bool $kommunikationsDatenBlattInaktiv = null,
        readonly ?Marktteilnehmer $marktteilnehmer = null,
        /** @var Marktteilnehmer[] */
        readonly array $kommunikationsangaben = [],
    ) {
    }
}
