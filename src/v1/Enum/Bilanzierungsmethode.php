<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Bilanzierungsmethode: string
{
    case RLM = 'RLM';
    case SLP = 'SLP';
    case TLP_GEMEINSAM = 'TLP_GEMEINSAM';
    case TLP_GETRENNT = 'TLP_GETRENNT';
    case PAUSCHAL = 'PAUSCHAL';
    case IMS = 'IMS';
}
