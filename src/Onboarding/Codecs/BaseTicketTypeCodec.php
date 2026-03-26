<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Onboarding\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\Onboarding\Types\BaseTicketType;

/**
 * Codec for the BaseTicketType structured data type.
 *
 * @generated
 */
class BaseTicketTypeCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return BaseTicketType
     */
    public function decode(BinaryDecoder $decoder): BaseTicketType
    {
        return new BaseTicketType(
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readString(),
            $decoder->readDateTime(),
            $this->readArray($decoder, fn () => $decoder->readExtensionObject()),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeString($value->ManufacturerName);
        $encoder->writeString($value->ModelName);
        $encoder->writeString($value->ModelVersion);
        $encoder->writeString($value->HardwareRevision);
        $encoder->writeString($value->SoftwareRevision);
        $encoder->writeString($value->SerialNumber);
        $encoder->writeDateTime($value->ManufactureDate);
        $this->writeArray($encoder, $value->Authorities, fn ($item) => $encoder->writeExtensionObject($item));
    }

    private function readArray(BinaryDecoder $decoder, callable $readItem): array
    {
        $count = $decoder->readInt32();
        $items = [];
        for ($i = 0; $i < $count; $i++) {
            $items[] = $readItem();
        }

        return $items;
    }

    private function writeArray(BinaryEncoder $encoder, array $items, callable $writeItem): void
    {
        $encoder->writeInt32(count($items));
        foreach ($items as $item) {
            $writeItem($item);
        }
    }
}
