<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Landescode;

class Adresse
{
    public function __construct(
        readonly ?string $postleitzahl = null,
        readonly ?string $ort = null,
        readonly ?string $strasse = null,
        readonly ?string $hausnummer = null,
        readonly ?string $postfach = null,
        readonly ?string $adresszusatz = null,
        readonly ?string $coErgaenzung = null,
        readonly ?Landescode $landescode = null,
        readonly ?string $ortsteil = null,
        readonly ?AdresszusatzInformation $zusatzInformation = null,
    ) {
    }
}
