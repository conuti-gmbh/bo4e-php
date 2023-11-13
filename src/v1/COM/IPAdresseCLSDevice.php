<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class IPAdresseCLSDevice
{
    public function __construct(
        readonly ?string $IPAdresseCLSDevice1,
        readonly ?string $IPAdresseCLSDevice2,
        readonly ?string $IPAdresseCLSDevice3,
        readonly ?string $IPAdresseCLSDevice4,
        readonly ?string $IPAdresseCLSDevice5
    ) {
    }
}
