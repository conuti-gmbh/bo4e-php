<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Landescode;

class Adresse
{
    public function __construct(
        readonly ?string $postleitzahl,
        readonly ?string $ort,
        readonly ?string $strasse,
        readonly ?string $hausnummer,
        readonly ?string $postfach,
        readonly ?string $adresszusatz,
        readonly ?string $coErgaenzung,
        readonly ?Landescode $landescode,
        readonly ?string $ortsteil,
        readonly ?AdresszusatzInformation $zusatzInformation
    ) {
    }
}
