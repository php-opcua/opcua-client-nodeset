<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDT\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\FDT\Types\FdtDeviceClassificationType;

/**
 * Codec for the FdtDeviceClassificationType structured data type.
 *
 * @generated
 */
class FdtDeviceClassificationTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return FdtDeviceClassificationType
     */
    public function decode(BinaryDecoder $decoder): FdtDeviceClassificationType
    {
        return new FdtDeviceClassificationType(
            Enums\ClassificationDomainId::from($decoder->readInt32()),
            Enums\ClassificationId::from($decoder->readInt32()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeInt32($value->ClassificationDomain->value);
        $encoder->writeInt32($value->DeviceClassification->value);
    }
}
