<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

class Kommunikationsdaten
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?string $gueltigkeit,
        readonly ?bool $kommunikationsDatenBlattInaktiv,
        readonly ?Marktteilnehmer $marktteilnehmer,
        /** @var Marktteilnehmer[] */
        readonly array $kommunikationsangaben = []
    ) {
    }
}
