<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Scheduler;

use PhpOpcua\Client\Repository\ExtensionObjectRepository;
use PhpOpcua\Client\Repository\GeneratedTypeRegistrar;

/**
 * Registers all generated codecs and enum mappings.
 *
 * @generated
 */
class SchedulerRegistrar implements GeneratedTypeRegistrar
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
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(SchedulerNodeIds::SpecialEventType_3), new Codecs\SpecialEventTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(SchedulerNodeIds::SpecialEventPeriodType_3), new Codecs\SpecialEventPeriodTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(SchedulerNodeIds::CalendarEntryType_3), new Codecs\CalendarEntryTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(SchedulerNodeIds::DateType_3), new Codecs\DateTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(SchedulerNodeIds::DateRangeType_3), new Codecs\DateRangeTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(SchedulerNodeIds::TimeActionsType_3), new Codecs\TimeActionsTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(SchedulerNodeIds::BaseActionType_3), new Codecs\BaseActionTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(SchedulerNodeIds::WriteLocalVariableActionType_3), new Codecs\WriteLocalVariableActionTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(SchedulerNodeIds::CallLocalMethodActionType_3), new Codecs\CallLocalMethodActionTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(SchedulerNodeIds::TimeType_3), new Codecs\TimeTypeCodec());
        $repository->register(\PhpOpcua\Client\Types\NodeId::parse(SchedulerNodeIds::DailyScheduleType_3), new Codecs\DailyScheduleTypeCodec());
    }

    /**
     * @return array<string, class-string<\BackedEnum>>
     */
    public function getEnumMappings(): array
    {
        return [
            SchedulerNodeIds::Month => Enums\Month::class,
            SchedulerNodeIds::DayOfMonth => Enums\DayOfMonth::class,
            SchedulerNodeIds::DayOfWeek => Enums\DayOfWeek::class,
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
