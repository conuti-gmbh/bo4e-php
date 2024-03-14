<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

class Kommunikationsdaten
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?string $gueltigkeit = null,
        readonly ?bool $kommunikationsDatenBlattInaktiv = null,
        readonly ?Marktteilnehmer $marktteilnehmer = null,
        /** @var Marktteilnehmer[] */
        readonly array $kommunikationsangaben = [],
    ) {
    }
}
