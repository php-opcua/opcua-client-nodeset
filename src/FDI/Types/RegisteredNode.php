<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDI\Types;

/**
 * DTO for the RegisteredNode structured data type.
 *
 * @generated
 */
readonly class RegisteredNode
{
    public function __construct(
        public int $NodeStatus,
        public NodeId $OnlineContextNodeId,
        public NodeId $OnlineDeviceNodeId,
        public NodeId $OfflineContextNodeId,
        public NodeId $OfflineDeviceNodeId,
    ) {
    }
}