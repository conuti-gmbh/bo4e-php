<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Zaehlzeit;
use Conuti\BO4E\v1\COM\Zaehlzeitregister;
use Conuti\BO4E\v1\Enum\DefinitionenNotwendigkeit;
use DateTime;

class Zaehlzeitdefinition
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?DateTime $beginndatum = null,
        readonly ?DateTime $endedatum = null,
        readonly ?DateTime $version = null,
        readonly ?DefinitionenNotwendigkeit $notwendigkeit = null,
        readonly ?string $versionsangabe = null,
        readonly ?string $code = null,
        /** @var Zaehlzeit[] */
        readonly array $zaehlzeiten = [],
        /** @var Zaehlzeitregister[] */
        readonly array $zaehlzeitregister = [],
    ) {
    }
}
