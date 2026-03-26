<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CAS\Enums;

/**
 * OPC UA enumeration type: SensorTypeEnum.
 *
 * @generated
 */
enum SensorTypeEnum: int
{
    case Other = 0;
    case Ammeter = 1;
    case DewPointSensor = 2;
    case FlowRateSensor = 3;
    case FlowSpeedSensor = 4;
    case HumiditySensor = 5;
    case OilConcentrationSensor = 6;
    case ParticleCounter = 7;
    case PressureSensor = 8;
    case TemperatureSensor = 9;
    case Voltmeter = 10;
    case VolumeSensor = 11;
    case Wattmeter = 12;
}