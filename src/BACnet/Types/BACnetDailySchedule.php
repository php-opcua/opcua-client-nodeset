<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetDailySchedule structured data type.
 *
 * @generated
 */
readonly class BACnetDailySchedule
{
    public function __construct(
        public array $Day_schedule,
    ) {
    }
}
