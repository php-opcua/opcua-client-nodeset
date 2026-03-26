<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetWeekNDay structured data type.
 *
 * @generated
 */
readonly class BACnetWeekNDay
{
    public function __construct(
        public Enums\BACnetMonth $Month,
        public Enums\BACnetDay $Day,
        public Enums\BACnetDayOfWeek $DayOfWeek,
    ) {
    }
}
