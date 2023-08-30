<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Interface;

interface ZaehlzeitdefinitionTyp
{
    public const WAERMEPUMPE = 'WAERMEPUMPE';
    public const NACHTSPEICHERHEIZUNG = 'NACHTSPEICHERHEIZUNG';
    public const SCHWACHLASTZEITFENSTER = 'SCHWACHLASTZEITFENSTER';
    public const SONSTIGE = 'SONSTIGE';
    public const HOCHLASTZEITFENSTER = 'HOCHLASTZEITFENSTER';
}
