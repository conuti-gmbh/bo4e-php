<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Zaehlzeit
{
    public function __construct(
        public ?string $code,
        public ?string $haeufigkeit,
        public ?string $uebermittelbarkeitZaehlzeit,
        public ?string $ermittlungLeistungsmaximum,
        public ?bool $istBestellbar,
        public ?string $typ,
        public ?string $beschreibungTyp,
    ) {
    }
}
