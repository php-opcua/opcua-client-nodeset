<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\POWERLINK\Types;

/**
 * DTO for the PowerlinkIpAddressDataType structured data type.
 *
 * @generated
 */
readonly class PowerlinkIpAddressDataType
{
    public function __construct(
        public int $b1,
        public int $b2,
        public int $b3,
        public int $b4,
    ) {
    }
}