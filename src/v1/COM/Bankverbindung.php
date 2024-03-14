<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\BankverbindungVerwendungszweck;

class Bankverbindung
{
    public function __construct(
        readonly ?BankverbindungVerwendungszweck $verwendungszweck = null,
        readonly ?string $iban = null,
        readonly ?string $kontoinhaber = null,
        readonly ?string $bic = null,
        readonly ?string $kreditinstitut = null,
    ) {
    }
}
