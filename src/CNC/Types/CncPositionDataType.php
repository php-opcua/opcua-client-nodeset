<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CNC\Types;

/**
 * DTO for the CncPositionDataType structured data type.
 *
 * @generated
 */
readonly class CncPositionDataType
{
    public function __construct(
        public float $ActPos,
        public float $CmdPos,
        public float $RemDist,
    ) {
    }
}
