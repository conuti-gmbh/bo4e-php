<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Adresse;
use Conuti\BO4E\v1\COM\ExterneReferenz;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Geschaeftspartnerrolle;
use Conuti\BO4E\v1\Enum\Kontaktart;

class Geschaeftspartner
{
    public function __construct(
        readonly BOTyp $boTyp,
        readonly ?string $versionStruktur,
        readonly ?string $anrede,
        readonly ?string $name1,
        readonly ?string $name2,
        readonly ?string $name3,
        readonly ?string $name4,
        readonly ?string $umsatzsteuerId,
        readonly ?string $glaeubigerId,
        readonly ?string $emailAdresse,
        readonly ?string $website,
        readonly ?bool $gewerbekennzeichnung,
        readonly ?string $hrnummer,
        readonly ?string $amtsgericht,
        readonly ?Adresse $partneradresse,
        readonly ?string $externeKundenummerLieferant,
        /** @var ExterneReferenz[] $externeReferenzen */
        readonly array $externeReferenzen = [],
        /** @var Geschaeftspartnerrolle[] */
        readonly array $geschaeftspartnerrolle = [],
        /** @var Kontaktart[] */
        readonly array $kontaktweg = [],
    ) {
    }
}
