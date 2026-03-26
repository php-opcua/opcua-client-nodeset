<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet\Types;

/**
 * DTO for the BACnetEventParameterBufferReady structured data type.
 *
 * @generated
 */
readonly class BACnetEventParameterBufferReady
{
    public function __construct(
        public int $Notification_threshold,
        public int $Previous_notification_count,
    ) {
    }
}
