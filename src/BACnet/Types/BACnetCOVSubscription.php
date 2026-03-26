<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetCOVSubscription structured data type.
 *
 * @generated
 */
readonly class BACnetCOVSubscription
{
    public function __construct(
        public mixed $Recipient,
        public mixed $MonitoredPropertyReference,
        public bool $IssueConfirmedNotifications,
        public int $TimeRemaining,
        public ?float $CovIncrement,
    ) {
    }
}
