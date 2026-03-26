<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\CAS\Enums;

/**
 * OPC UA enumeration type: SensorTechnologyOptionSet.
 *
 * @generated
 */
enum SensorTechnologyOptionSet: int
{
    case CapacitiveSensor = 0;
    case ElectronTube = 1;
    case InductiveSensor = 2;
    case IonizationSensor = 3;
    case Magnetometer = 4;
    case OpticalSensor = 5;
    case PiezoelectricSensor = 6;
    case ResistiveSensor = 7;
    case ResonantSensor = 8;
    case TemperatureSensor = 9;
    case ThermalSensor = 10;
    case UltrasoundSensor = 11;
}
