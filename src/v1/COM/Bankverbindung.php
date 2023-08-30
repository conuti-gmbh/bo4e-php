<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Bankverbindung
{
    public function __construct(
        public ?string $verwendungszweck,
        public ?string $iban,
        public ?string $kontoinhaber,
        public ?string $bic,
        public ?string $kreditinstitut
    ) {
    }
}
