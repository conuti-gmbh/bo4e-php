<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\BankverbindungVerwendungszweck;

class Bankverbindung
{
    public function __construct(
        readonly ?BankverbindungVerwendungszweck $verwendungszweck,
        readonly ?string $iban,
        readonly ?string $kontoinhaber,
        readonly ?string $bic,
        readonly ?string $kreditinstitut
    ) {
    }
}
