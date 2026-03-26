<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetDate structured data type.
 *
 * @generated
 */
readonly class BACnetDate
{
    public function __construct(
        public mixed $Year,
        public Enums\BACnetMonth $Month,
        public Enums\BACnetDayOfMonth $DayOfMonth,
        public Enums\BACnetDayOfWeek $DayOfWeek,
    ) {
    }
}