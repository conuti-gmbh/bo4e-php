<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use DateTime;
use Conuti\BO4E\v1\Enum\DefinitionenNotwendigkeit;
use Conuti\BO4E\v1\Com\Zaehlzeit;
use Conuti\BO4E\v1\Com\Zaehlzeitregister;

class Zaehlzeitdefinition
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::ZAEHLZEITDEFINITION,
        readonly string $versionStruktur = '1',
        readonly ?DateTime $beginndatum = null,
        readonly ?DateTime $endedatum = null,
        readonly ?DateTime $version = null,
        readonly ?DefinitionenNotwendigkeit $notwendigkeit = null,
        readonly ?string $versionsangabe = null,
        readonly ?string $code = null,
        /** @var ?Zaehlzeit[] */
        readonly ?array $zaehlzeiten = null,
        /** @var ?Zaehlzeitregister[] */
        readonly ?array $zaehlzeitregister = null,
    ) {
    }
}
