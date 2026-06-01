<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class Zertifikatsinformationen
{
    public function __construct(
        readonly ?string $uriSubCA = null,
        readonly ?string $commonNameZertifikat = null,
        readonly ?string $seriennummerZertifikat = null,
    ) {
    }
}
