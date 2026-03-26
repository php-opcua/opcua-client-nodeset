<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Pumps\Enums;

/**
 * OPC UA enumeration type: FieldbusEnum.
 *
 * @generated
 */
enum FieldbusEnum: int
{
    case Other = 0;
    case ARCNET = 1;
    case AS_Interface = 2;
    case BACnet_IP = 3;
    case BACnet_MSTP = 4;
    case Bluetooth = 5;
    case BluetoothLowEnergy = 6;
    case CAN = 7;
    case CANopen = 8;
    case CC_Link = 9;
    case ControlNet = 10;
    case DALI = 11;
    case DECTULE = 12;
    case DeviceNet = 13;
    case DMX = 14;
    case KNX = 15;
    case EnOcean = 16;
    case EtherCAT = 17;
    case Ethernet_IP = 18;
    case EthernetTCP_IP = 19;
    case IEEE1588 = 20;
    case GSM = 21;
    case Interbus = 22;
    case IO_Link = 23;
    case HART = 24;
    case LON = 25;
    case LoRaWAN = 26;
    case LIN_Bus = 27;
    case LTE = 28;
    case LTE_M = 29;
    case M_Bus = 30;
    case ModbusTCP = 31;
    case ModbusRTU = 32;
    case MP_Bus = 33;
    case NB_IOT = 34;
    case NFC = 35;
    case OPCUA = 36;
    case OPCDA = 37;
    case PROFIBUSDP = 38;
    case PROFINETRT = 39;
    case Powerlink = 40;
    case SERCOS = 41;
    case SMI = 42;
    case Thread = 43;
    case UMTS = 44;
    case WIFI = 45;
    case X2X_Link = 46;
    case VARAN = 47;
    case ZigBee = 48;
    case Z_Wave = 49;
}
