<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetDestination structured data type.
 *
 * @generated
 */
readonly class BACnetDestination
{
    public function __construct(
        public Enums\BACnetDaysOfWeek $ValidDays,
        public mixed $FromTime,
        public mixed $ToTime,
        public mixed $Recipient,
        public int $ProcessIdentifier,
        public bool $IssueConfirmedNotifications,
        public Enums\BACnetEventTransitionBits $Transitions,
    ) {
    }
}
