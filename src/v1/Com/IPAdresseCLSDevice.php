<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class IPAdresseCLSDevice
{
    public function __construct(
        readonly ?string $IPAdresseCLSDevice1 = null,
        readonly ?string $IPAdresseCLSDevice2 = null,
        readonly ?string $IPAdresseCLSDevice3 = null,
        readonly ?string $IPAdresseCLSDevice4 = null,
        readonly ?string $IPAdresseCLSDevice5 = null,
    ) {
    }
}
