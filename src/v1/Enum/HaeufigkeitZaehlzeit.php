<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum HaeufigkeitZaehlzeit: string
{
    case EINMALIG = 'EINMALIG';
    case JAEHRLICH = 'JAEHRLICH';
}
