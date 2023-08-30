<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Adresse;
use Conuti\BO4E\v1\COM\ExterneReferenz;

class Geschaeftspartner
{
    public function __construct(
        public string $boTyp,
        public ?string $versionStruktur,
        public ?string $anrede,
        public ?string $name1,
        public ?string $name2,
        public ?string $name3,
        public ?string $name4,
        public ?string $umsatzsteuerId,
        public ?string $glaeubigerId,
        public ?string $emailAdresse,
        public ?string $website,
        public ?bool $gewerbekennzeichnung,
        public ?string $hrnummer,
        public ?string $amtsgericht,
        public ?Adresse $partneradresse,
        public ?string $externeKundenummerLieferant,
        /** @var ExterneReferenz[] $externeReferenzen */
        public array $externeReferenzen = [],
        /** @var string[] */
        public array $geschaeftspartnerrolle = [],
        /** @var string[] */
        public array $kontaktweg = [],
    ) {
    }

    public function hasRolle(string $rolle): bool
    {
        return in_array($rolle, $this->geschaeftspartnerrolle, true);
    }

    /**
     * @param string $name
     *
     * @return ?ExterneReferenz
     */
    public function getExRefByName(string $name): ?ExterneReferenz
    {
        $items = array_filter($this->externeReferenzen, static function (ExterneReferenz $referenz) use ($name) {
            return $referenz->exRefName === $name;
        });

        return $items ? $items[0] : null;
    }
}
