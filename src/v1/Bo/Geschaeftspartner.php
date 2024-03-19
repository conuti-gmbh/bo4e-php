<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Com\Adresse;
use Conuti\BO4E\v1\Com\ExterneReferenz;
use Conuti\BO4E\v1\Enum\Geschaeftspartnerrolle;
use Conuti\BO4E\v1\Enum\Kontaktart;

class Geschaeftspartner
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::GESCHAEFTSPARTNER,
        readonly string $versionStruktur = '1',
        readonly ?string $anrede = null,
        readonly ?string $name1 = null,
        readonly ?string $name2 = null,
        readonly ?string $name3 = null,
        readonly ?string $name4 = null,
        readonly ?string $umsatzsteuerId = null,
        readonly ?string $glaeubigerId = null,
        readonly ?string $emailAdresse = null,
        readonly ?string $website = null,
        readonly ?bool $gewerbekennzeichnung = null,
        readonly ?string $hrnummer = null,
        readonly ?string $amtsgericht = null,
        readonly ?Adresse $partneradresse = null,
        readonly ?string $externeKundenummerLieferant = null,
        /** @var ExterneReferenz[] */
        readonly array $externeReferenzen = [],
        /** @var Geschaeftspartnerrolle[] */
        readonly array $geschaeftspartnerrolle = [],
        /** @var Kontaktart[] */
        readonly array $kontaktweg = [],
    ) {
    }
}
