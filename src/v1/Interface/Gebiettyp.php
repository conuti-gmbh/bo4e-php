<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Interface;

interface Gebiettyp
{
    public const REGELZONE = 'REGELZONE';
    public const MARKTGEBIET = 'MARKTGEBIET';
    public const BILANZIERUNGSGEBIET = 'BILANZIERUNGSGEBIET';
    public const VERTEILNETZ = 'VERTEILNETZ';
    public const TRANSPORTNETZ = 'TRANSPORTNETZ';
    public const REGIONALNETZ = 'REGIONALNETZ';
    public const AREALNETZ = 'AREALNETZ';
    public const GRUNDVERSORGUNGSGEBIET = 'GRUNDVERSORGUNGSGEBIET';
    public const VERSORGUNGSGEBIET = 'VERSORGUNGSGEBIET';
}
