<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\StatusArt;
use Conuti\BO4E\v1\Enum\Status;

class StatusZusatzInformation
{
    public function __construct(
        readonly ?StatusArt $art = null,
        readonly ?Status $status = null,
    ) {
    }
}
