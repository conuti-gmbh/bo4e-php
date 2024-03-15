<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\Enum\BOTyp;

class Kommunikationsdaten
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::KOMMUNIKATIONSDATEN,
        readonly string $versionStruktur = "1",
        readonly ?string $gueltigkeit = null,
        readonly ?bool $kommunikationsDatenBlattInaktiv = null,
        readonly ?Marktteilnehmer $marktteilnehmer = null,
        /** @var Marktteilnehmer[] */
        readonly array $kommunikationsangaben = [],
    ) {
    }
}
