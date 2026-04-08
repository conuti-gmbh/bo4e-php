<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Cdoc;

use DateTime;
use Conuti\BO4E\v1\Enum\Marktrolle;

class Zusatzdaten
{
    public function __construct(
        readonly ?string $prozessId = null,
        readonly ?EventName $eventname = null,
        readonly ?string $ediTyp = null,
        readonly ?DateTime $ediEmpfangsDatum = null,
        readonly ?string $ediVersion = null,
        readonly ?Marktrolle $marktpartnerRolle = null,
        readonly ?string $contrlReferenz = null,
        readonly ?string $parentBusinessKey = null,
        readonly ?string $targetBusinessKey = null,
        readonly ?bool $ermaechtigungVorhanden = null,
    ) {
    }
}
