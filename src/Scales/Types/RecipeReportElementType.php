<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scales\Types;

/**
 * DTO for the RecipeReportElementType structured data type.
 *
 * @generated
 */
readonly class RecipeReportElementType
{
    public function __construct(
        public LocalizedText $ReportMessage,
        public mixed $Timestamp,
    ) {
    }
}
