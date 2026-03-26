<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\BACnet;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class BACnetRegistrar implements GeneratedTypeRegistrar
{
    /**
     * @param bool $only If true, skip loading dependency registrars.
     */
    public function __construct(public bool $only = false)
    {
    }

    /**
     * @param ExtensionObjectRepository $repository
     * @return void
     */
    public function registerCodecs(ExtensionObjectRepository $repository): void
    {
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetAddress_3), new Codecs\BACnetAddressCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetAddressBinding_3), new Codecs\BACnetAddressBindingCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetCOVSubscription_3), new Codecs\BACnetCOVSubscriptionCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetDailySchedule_3), new Codecs\BACnetDailyScheduleCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetDate_3), new Codecs\BACnetDateCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetDateRange_3), new Codecs\BACnetDateRangeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetDateTime_3), new Codecs\BACnetDateTimeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetDestination_3), new Codecs\BACnetDestinationCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetDeviceObjectPropertyReference_3), new Codecs\BACnetDeviceObjectPropertyReferenceCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetEventFaultParameterExtended_3), new Codecs\BACnetEventFaultParameterExtendedCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetEventParameterBufferReady_3), new Codecs\BACnetEventParameterBufferReadyCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetEventParameterChangeOfBitstring_3), new Codecs\BACnetEventParameterChangeOfBitstringCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetEventParameterChangeOfCharacterString_3), new Codecs\BACnetEventParameterChangeOfCharacterStringCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetEventParameterChangeOfLifeSafety_3), new Codecs\BACnetEventParameterChangeOfLifeSafetyCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetEventParameterChangeOfState_3), new Codecs\BACnetEventParameterChangeOfStateCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetEventParameterChangeOfValue_3), new Codecs\BACnetEventParameterChangeOfValueCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetEventParameterCommandFailure_3), new Codecs\BACnetEventParameterCommandFailureCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetEventParameterDoubleOutOfRange_3), new Codecs\BACnetEventParameterDoubleOutOfRangeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetEventParameterFloatingLimit_3), new Codecs\BACnetEventParameterFloatingLimitCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetEventParameterOutOfRange_3), new Codecs\BACnetEventParameterOutOfRangeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetEventParameterSignedOutOfRange_3), new Codecs\BACnetEventParameterSignedOutOfRangeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetEventParameterUnsignedOutOfRange_3), new Codecs\BACnetEventParameterUnsignedOutOfRangeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetEventParameterUnsignedRange_3), new Codecs\BACnetEventParameterUnsignedRangeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetFaultParameterFaultCharacterstring_3), new Codecs\BACnetFaultParameterFaultCharacterstringCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetFaultParameterFaultLifeSafety_3), new Codecs\BACnetFaultParameterFaultLifeSafetyCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetFaultParameterFaultState_3), new Codecs\BACnetFaultParameterFaultStateCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetFaultParameterFaultStatusFlags_3), new Codecs\BACnetFaultParameterFaultStatusFlagsCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetPropertyStates_3), new Codecs\BACnetPropertyStatesCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetRecipientProcess_3), new Codecs\BACnetRecipientProcessCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetSpecialEvent_3), new Codecs\BACnetSpecialEventCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetTime_3), new Codecs\BACnetTimeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetTimeValue_3), new Codecs\BACnetTimeValueCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetTimeValueValue_3), new Codecs\BACnetTimeValueValueCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetWeekNDay_3), new Codecs\BACnetWeekNDayCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetCalendarEntry_3), new Codecs\BACnetCalendarEntryCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetClientCOV_3), new Codecs\BACnetClientCOVCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetEventParameter_3), new Codecs\BACnetEventParameterCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetEventParameterExtendedParameters_3), new Codecs\BACnetEventParameterExtendedParametersCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetFaultParameter_3), new Codecs\BACnetFaultParameterCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetMessageClass_3), new Codecs\BACnetMessageClassCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetPriorityValue_3), new Codecs\BACnetPriorityValueCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetRecipient_3), new Codecs\BACnetRecipientCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetSpecialEventPeriod_3), new Codecs\BACnetSpecialEventPeriodCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(BACnetNodeIds::BACnetTimeStamp_3), new Codecs\BACnetTimeStampCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            BACnetNodeIds::BACnetAction => Enums\BACnetAction::class,
            BACnetNodeIds::BACnetBackupState => Enums\BACnetBackupState::class,
            BACnetNodeIds::BACnetBinaryPV => Enums\BACnetBinaryPV::class,
            BACnetNodeIds::BACnetDay => Enums\BACnetDay::class,
            BACnetNodeIds::BACnetDayOfMonth => Enums\BACnetDayOfMonth::class,
            BACnetNodeIds::BACnetDayOfWeek => Enums\BACnetDayOfWeek::class,
            BACnetNodeIds::BACnetDeviceCommunicationEnabled => Enums\BACnetDeviceCommunicationEnabled::class,
            BACnetNodeIds::BACnetDeviceStatus => Enums\BACnetDeviceStatus::class,
            BACnetNodeIds::BACnetEventEnumType => Enums\BACnetEventEnumType::class,
            BACnetNodeIds::BACnetEventState => Enums\BACnetEventState::class,
            BACnetNodeIds::BACnetEventType => Enums\BACnetEventType::class,
            BACnetNodeIds::BACnetFaultType => Enums\BACnetFaultType::class,
            BACnetNodeIds::BACnetLifeSafetyMode => Enums\BACnetLifeSafetyMode::class,
            BACnetNodeIds::BACnetLifeSafetyOperation => Enums\BACnetLifeSafetyOperation::class,
            BACnetNodeIds::BACnetLifeSafetyState => Enums\BACnetLifeSafetyState::class,
            BACnetNodeIds::BACnetLoggingType => Enums\BACnetLoggingType::class,
            BACnetNodeIds::BACnetMessagePriority => Enums\BACnetMessagePriority::class,
            BACnetNodeIds::BACnetMonth => Enums\BACnetMonth::class,
            BACnetNodeIds::BACnetNodeType => Enums\BACnetNodeType::class,
            BACnetNodeIds::BACnetNotifyType => Enums\BACnetNotifyType::class,
            BACnetNodeIds::BACnetObjectTypeEnum => Enums\BACnetObjectTypeEnum::class,
            BACnetNodeIds::BACnetPolarity => Enums\BACnetPolarity::class,
            BACnetNodeIds::BACnetProgramError => Enums\BACnetProgramError::class,
            BACnetNodeIds::BACnetProgramRequest => Enums\BACnetProgramRequest::class,
            BACnetNodeIds::BACnetProgramStates => Enums\BACnetProgramStates::class,
            BACnetNodeIds::BACnetPropertyIdentifier => Enums\BACnetPropertyIdentifier::class,
            BACnetNodeIds::BACnetReinitializedStateofDevice => Enums\BACnetReinitializedStateofDevice::class,
            BACnetNodeIds::BACnetReliability => Enums\BACnetReliability::class,
            BACnetNodeIds::BACnetRestartReason => Enums\BACnetRestartReason::class,
            BACnetNodeIds::BACnetSegmentation => Enums\BACnetSegmentation::class,
            BACnetNodeIds::BACnetDaysOfWeek_3 => Enums\BACnetDaysOfWeek::class,
            BACnetNodeIds::BACnetEventTransitionBits_3 => Enums\BACnetEventTransitionBits::class,
            BACnetNodeIds::BACnetLimitEnable_3 => Enums\BACnetLimitEnable::class,
            BACnetNodeIds::BACnetObjectTypeSupportedBits_3 => Enums\BACnetObjectTypeSupportedBits::class,
            BACnetNodeIds::BACnetServicesSupportedBits_3 => Enums\BACnetServicesSupportedBits::class,
            BACnetNodeIds::BACnetStatusFlags_3 => Enums\BACnetStatusFlags::class,
        ];
    }

    /**
     * @return GeneratedTypeRegistrar[]
     */
    public function dependencyRegistrars(): array
    {
        return [
        ];
    }
}
