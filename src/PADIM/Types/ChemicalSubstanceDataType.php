<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\PADIM\Types;

/**
 * DTO for the ChemicalSubstanceDataType structured data type.
 *
 * @generated
 */
readonly class ChemicalSubstanceDataType
{
    public function __construct(
        public Enums\PatDictionaryEnum $PatDictionary,
        public LocalizedText $Label,
        public LocalizedText $Id,
    ) {
    }
}
