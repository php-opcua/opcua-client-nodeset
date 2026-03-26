<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\Pumps\Enums;

/**
 * OPC UA enumeration type: OfferedFieldbusesOptionSet.
 *
 * @generated
 */
enum OfferedFieldbusesOptionSet: int
{
    case Other = 0;
    case ARCNET = 1;
    case AS_Interface = 2;
    case BACnet_IP = 3;
    case BACnet_MSTP = 4;
    case Bluetooth = 5;
    case Bluetooth_Low_Energy = 6;
    case CAN = 7;
    case CANopen = 8;
    case CC_Link = 9;
    case ControlNet = 10;
    case DALI = 11;
    case DECT_ULE = 12;
    case DeviceNet = 13;
    case DMX = 14;
    case KNX = 15;
    case EnOcean = 16;
    case EtherCAT = 17;
    case Ethernet_IP = 18;
    case Ethernet_TCP_IP = 19;
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
    case Modbus_TCP = 31;
    case Modbus_RTU = 32;
    case MP_Bus = 33;
    case NB_IOT = 34;
    case NFC = 35;
    case OPC_UA = 36;
    case OPC_DA = 37;
    case PROFIBUS_DP = 38;
    case PROFINET_RT = 39;
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