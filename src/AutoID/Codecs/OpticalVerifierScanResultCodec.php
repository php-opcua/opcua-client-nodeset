<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\AutoID\Codecs;

use PhpOpcua\Client\Encoding\BinaryDecoder;
use PhpOpcua\Client\Encoding\BinaryEncoder;
use PhpOpcua\Client\Encoding\ExtensionObjectCodec;
use PhpOpcua\Nodeset\AutoID\Types\OpticalVerifierScanResult;

/**
 * Codec for the OpticalVerifierScanResult structured data type.
 *
 * @generated
 */
class OpticalVerifierScanResultCodec implements ExtensionObjectCodec
{
    /**
     * @param BinaryDecoder $decoder
     * @return OpticalVerifierScanResult
     */
    public function decode(BinaryDecoder $decoder): OpticalVerifierScanResult
    {
        return new OpticalVerifierScanResult(
            $decoder->readString(),
            $decoder->readInt16(),
            $decoder->readInt16(),
            $decoder->readInt16(),
            $decoder->readInt16(),
            $decoder->readInt16(),
            $decoder->readInt16(),
            $decoder->readInt16(),
            $decoder->readInt16(),
        );
    }

    /**
     * @param BinaryEncoder $encoder
     * @param mixed $value
     * @return void
     */
    public function encode(BinaryEncoder $encoder, mixed $value): void
    {
        $encoder->writeString($value->IsoGrade);
        $encoder->writeInt16($value->RMin);
        $encoder->writeInt16($value->SymbolContrast);
        $encoder->writeInt16($value->ECMin);
        $encoder->writeInt16($value->Modulation);
        $encoder->writeInt16($value->Defects);
        $encoder->writeInt16($value->Decodability);
        $encoder->writeInt16($value->Decode);
        $encoder->writeInt16($value->PrintGain);
    }
}
