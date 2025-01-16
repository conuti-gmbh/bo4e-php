<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum AvisTyp: string
{
    case ABGELEHNTE_FORDERUNG = 'ABGELEHNTE_FORDERUNG';
    case ZAHLUNGSAVIS = 'ZAHLUNGSAVIS';
}
