<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Interface;

interface Bilanzierungsmethode
{
    public const RLM = 'RLM';
    public const SLP = 'SLP';
    public const TLP_GEMEINSAM = 'TLP_GEMEINSAM';
    public const TLP_GETRENNT = 'TLP_GETRENNT';
    public const PAUSCHAL = 'PAUSCHAL';
    public const IMS = 'IMS';
}
