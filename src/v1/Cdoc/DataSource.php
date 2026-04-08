<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Cdoc;

enum DataSource: string
{
    case INBOUND = 'INBOUND';
    case OUTBOUND = 'OUTBOUND';
}
