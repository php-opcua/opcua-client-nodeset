<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\GDS\Types;

/**
 * DTO for the ApplicationRecordDataType structured data type.
 *
 * @generated
 */
readonly class ApplicationRecordDataType
{
    public function __construct(
        public NodeId $ApplicationId,
        public string $ApplicationUri,
        public mixed $ApplicationType,
        public array $ApplicationNames,
        public string $ProductUri,
        public array $DiscoveryUrls,
        public array $ServerCapabilities,
    ) {
    }
}