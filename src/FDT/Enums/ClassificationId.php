<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\FDT\Enums;

/**
 * OPC UA enumeration type: ClassificationId.
 *
 * @generated
 */
enum ClassificationId: int
{
    case Flow = 0;
    case Level = 1;
    case Pressure = 2;
    case Temperature = 3;
    case Valve = 4;
    case Positioner = 5;
    case Actuator = 6;
    case Nc_rc = 7;
    case Encoder = 8;
    case SpeedDrive = 9;
    case Hmi = 10;
    case AnalogInput = 11;
    case AnalogOutput = 12;
    case DigitalInput = 13;
    case DigitalOutput = 14;
    case ElectrochemicalAnalyser = 15;
    case DtmSpecific = 16;
    case Universal = 17;
    case Analyser = 18;
    case RemoteIO = 19;
    case AnalogCombinedIO = 20;
    case DigitalCombinedIO = 21;
    case Recorder = 22;
    case Controller = 23;
    case Angle = 24;
    case LimitSwitch = 25;
    case Converter = 26;
    case Motor = 27;
    case Switchboard = 28;
    case CircuitBreaker = 29;
    case PowerMonitoring = 30;
    case DistributionPanel = 31;
    case Contactor = 32;
    case ProtectionStarter = 33;
    case SoftStarter = 34;
    case Drive = 35;
    case AxisControl = 36;
    case MotorControlCenter = 37;
    case ControlValve = 38;
    case Electrical = 39;
    case Density = 40;
    case Quality = 41;
    case SpeedOrRotaryFrequency = 42;
    case Radiation = 43;
    case WeightMass = 44;
    case DistanceOrPositionPresence = 45;
    case PushButton = 46;
    case Joystick = 47;
    case Keypad = 48;
    case PilotLight = 49;
    case StackLight = 50;
    case Display = 51;
    case CombinedButtonsAndLights = 52;
    case OperatorStation = 53;
    case GeneralInput = 54;
    case GeneralOutput = 55;
    case CombinedInputOutput = 56;
    case Relay = 57;
    case Timer = 58;
    case Scanner = 59;
    case ProgrammableController = 60;
    case CommunicationAdapter = 61;
    case Gateway = 62;
}
