<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum NotwendigkeitZweiteMessung: string
{
    case VORHANDEN = 'VORHANDEN';
    case NICHT_VORHANDEN = 'NICHT_VORHANDEN';
}
