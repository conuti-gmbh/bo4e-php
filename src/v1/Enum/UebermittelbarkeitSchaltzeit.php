<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum UebermittelbarkeitSchaltzeit: string
{
    case ELEKTRONISCH = 'ELEKTRONISCH';
    case NICHT_ELEKTRONISCH = 'NICHT_ELEKTRONISCH';
}
