<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;


class Kommunikationsdaten
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?string $gueltigkeit,
        public ?Marktteilnehmer $marktteilnehmer,
        /** @var Marktteilnehmer[] */
        public array $kommunikationsangaben = []
    ) {
    }

    public function getMarktteilnehmerForRolle(string $rolle): ?Marktteilnehmer
    {
        $fittingMarktteilnehmer = array_filter(
            $this->kommunikationsangaben,
            static function (Marktteilnehmer $marktteilnehmer) use ($rolle) {
                return $marktteilnehmer->kommunikationsrolle === $rolle;
            }
        );

        return $fittingMarktteilnehmer ? current($fittingMarktteilnehmer) : null;
    }
}
