<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Types;

/**
 * DTO for the OpticalVerifierScanResult structured data type.
 *
 * @generated
 */
readonly class OpticalVerifierScanResult
{
    public function __construct(
        public string $IsoGrade,
        public int $RMin,
        public int $SymbolContrast,
        public int $ECMin,
        public int $Modulation,
        public int $Defects,
        public int $Decodability,
        public int $Decode,
        public int $PrintGain,
    ) {
    }
}
