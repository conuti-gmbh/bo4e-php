<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Landescode;

class Adresse
{
    public function __construct(
        public ?string $postleitzahl,
        public ?string $ort,
        public ?string $strasse,
        public ?string $hausnummer,
        public ?string $postfach,
        public ?string $adresszusatz,
        public ?string $coErgaenzung,
        public ?Landescode $landescode,
        public ?string $ortsteil,
        public ?AdresszusatzInformation $zusatzInformation
    ) {
    }
}
