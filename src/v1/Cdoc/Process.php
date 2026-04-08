<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Cdoc;

use DateTime;

class Process
{
    public function __construct(
        readonly ?string $businessKey = null,
        readonly ?DataSource $dataSource = null,
        readonly ?int $version = null,
        readonly ?int $edifactVersion = null,
        readonly ?ProcessData $data = null,
        readonly ?string $tenantId = 'NONE',
        readonly ?DateTime $processDate = null,
    ) {
    }
}
