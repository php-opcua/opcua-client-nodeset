<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDT\Enums;

/**
 * OPC UA enumeration type: SupportedTransfer.
 *
 * @generated
 */
enum SupportedTransfer: int
{
    case None = 0;
    case OnlyDownload = 1;
    case OnlyUpload = 2;
    case BothUploadAndDownload = 3;
}