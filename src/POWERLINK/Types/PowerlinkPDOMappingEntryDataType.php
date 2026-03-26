<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\POWERLINK\Types;

/**
 * DTO for the PowerlinkPDOMappingEntryDataType structured data type.
 *
 * @generated
 */
readonly class PowerlinkPDOMappingEntryDataType
{
    public function __construct(
        public int $length,
        public int $offset,
        public int $reserved,
        public int $subIndex,
        public int $index,
    ) {
    }
}
