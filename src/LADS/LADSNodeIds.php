<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\LADS;

/**
 * NodeId constants generated from a NodeSet2.xml file.
 *
 * @generated
 */
class LADSNodeIds
{
    public const FileSet = 'ns=4;i=5081';

    public const ProgramTemplate = 'ns=4;i=5112';

    public const VariableSet = 'ns=4;i=5067';

    public const Closed = 'ns=4;i=5028';

    public const Error = 'ns=4;i=5050';

    public const Locked = 'ns=4;i=5049';

    public const Opened = 'ns=4;i=5025';

    public const Operate = 'ns=4;i=5178';

    public const OperateToShutdown = 'ns=4;i=5184';

    public const OperateToSleep = 'ns=4;i=5260';

    public const Initialization = 'ns=4;i=5177';

    public const InitializationToOperate = 'ns=4;i=5181';

    public const Shutdown = 'ns=4;i=5180';

    public const Sleep = 'ns=4;i=5259';

    public const Aborted = 'ns=4;i=5160';

    public const AbortedToClearing = 'ns=4;i=5165';

    public const Aborting = 'ns=4;i=5159';

    public const AbortingToAborted = 'ns=4;i=5126';

    public const Clearing = 'ns=4;i=5143';

    public const Complete = 'ns=4;i=5128';

    public const Completing = 'ns=4;i=5127';

    public const Execute = 'ns=4;i=5168';

    public const Held = 'ns=4;i=5124';

    public const Holding = 'ns=4;i=5123';

    public const Idle = 'ns=4;i=5120';

    public const Resetting = 'ns=4;i=5119';

    public const Starting = 'ns=4;i=5117';

    public const Suspended = 'ns=4;i=5121';

    public const Suspending = 'ns=4;i=5118';

    public const Unholding = 'ns=4;i=5125';

    public const Unsuspending = 'ns=4;i=5122';

    public const Components = 'ns=4;i=5111';

    public const FunctionalUnitSet = 'ns=4;i=5002';

    public const Identification = 'ns=4;i=5096';

    public const DeviceState = 'ns=4;i=5191';

    public const Maintenance = 'ns=4;i=5092';

    public const DeviceHealthAlarms = 'ns=4;i=5258';

    public const Identification_2 = 'ns=4;i=5095';

    public const Maintenance_2 = 'ns=4;i=5106';

    public const FunctionSet = 'ns=4;i=5008';

    public const Identification_3 = 'ns=4;i=5003';

    public const Lock = 'ns=4;i=5004';

    public const ProgramManager = 'ns=4;i=5015';

    public const ActiveProgram = 'ns=4;i=5218';

    public const ProgramTemplateSet = 'ns=4;i=5021';

    public const ResultSet = 'ns=4;i=5022';

    public const SupportedPropertiesSet = 'ns=4;i=5116';

    public const Configuration = 'ns=4;i=5012';

    public const FunctionSet_2 = 'ns=4;i=5013';

    public const AlarmMonitor = 'ns=4;i=5068';

    public const LimitState = 'ns=4;i=5071';

    public const Operational = 'ns=4;i=5046';

    public const ControlFunctionState = 'ns=4;i=5038';

    public const Operational_2 = 'ns=4;i=5059';

    public const AlarmMonitor_2 = 'ns=4;i=5069';

    public const LimitState_2 = 'ns=4;i=5070';

    public const Configuration_2 = 'ns=4;i=5030';

    public const Operational_3 = 'ns=4;i=5011';

    public const Operational_4 = 'ns=4;i=5064';

    public const CoverState = 'ns=4;i=5055';

    public const ActiveProgram_2 = 'ns=4;i=5190';

    public const ProgramTemplateSet_2 = 'ns=4;i=5020';

    public const ResultSet_2 = 'ns=4;i=5019';

    public const http___opcfoundation_org_UA_LADS_ = 'ns=4;i=5026';

    public const Default_XML = 'ns=4;i=5043';

    public const Default_JSON = 'ns=4;i=5044';

    public const Default_XML_2 = 'ns=4;i=5056';

    public const Default_JSON_2 = 'ns=4;i=5057';

    public const OpenedToClosed = 'ns=4;i=5000';

    public const ClosedToOpened = 'ns=4;i=5074';

    public const ClosedToLocked = 'ns=4;i=5075';

    public const LockedToClosed = 'ns=4;i=5077';

    public const LockedToError = 'ns=4;i=5078';

    public const ClosedToError = 'ns=4;i=5079';

    public const ErrorToOpened = 'ns=4;i=5082';

    public const SleepToOperate = 'ns=4;i=5083';

    public const Stopped = 'ns=4;i=5085';

    public const Running = 'ns=4;i=5099';

    public const Stopping = 'ns=4;i=5100';

    public const StoppingToStopped = 'ns=4;i=5101';

    public const StoppedToRunning = 'ns=4;i=5102';

    public const RunningToAborting = 'ns=4;i=5103';

    public const ClearingToStopped = 'ns=4;i=5104';

    public const RunningToStopping = 'ns=4;i=5105';

    public const IdleToStarting = 'ns=4;i=5031';

    public const StartingToExecute = 'ns=4;i=5032';

    public const ExecuteToCompleting = 'ns=4;i=5033';

    public const CompletingToComplete = 'ns=4;i=5034';

    public const CompleteToResetting = 'ns=4;i=5035';

    public const ResettingToIdle = 'ns=4;i=5036';

    public const ExecuteToSuspending = 'ns=4;i=5037';

    public const SuspendingToSuspended = 'ns=4;i=5039';

    public const SuspendedToUnsuspending = 'ns=4;i=5040';

    public const UnsuspendingToExecute = 'ns=4;i=5041';

    public const ExecuteToHolding = 'ns=4;i=5051';

    public const HoldingToHeld = 'ns=4;i=5052';

    public const HeldToUnholding = 'ns=4;i=5053';

    public const UnholdingToExecute = 'ns=4;i=5054';

    public const SuspendingToHolding = 'ns=4;i=5129';

    public const RunningStateMachine = 'ns=4;i=5130';

    public const StartingToHolding = 'ns=4;i=5131';

    public const SuspendedToHolding = 'ns=4;i=5132';

    public const UnsuspendingToHolding = 'ns=4;i=5133';

    public const UnholdingToHolding = 'ns=4;i=5134';

    public const Operational_5 = 'ns=4;i=5113';

    public const Calibration = 'ns=4;i=5135';

    public const Operational_6 = 'ns=4;i=5024';

    public const Tuning = 'ns=4;i=5010';

    public const ControllerTuningParameter = 'ns=4;i=5001';

    public const Components_2 = 'ns=4;i=5073';

    public const _Component_ = 'ns=4;i=5065';

    public const Operational_7 = 'ns=4;i=5009';

    public const Operational_8 = 'ns=4;i=5061';

    public const File = 'ns=4;i=5072';

    public const _SetElement_ = 'ns=4;i=5014';

    public const _SetElement__2 = 'ns=4;i=5016';

    public const _SetElement__3 = 'ns=4;i=5027';

    public const _SetElement__4 = 'ns=4;i=5029';

    public const _SetElement__5 = 'ns=4;i=5048';

    public const _SetElement__6 = 'ns=4;i=5060';

    public const _SetElement__7 = 'ns=4;i=5062';

    public const MaintenanceState = 'ns=4;i=5066';

    public const _SetElement__8 = 'ns=4;i=5086';

    public const FunctionalUnitState = 'ns=4;i=5005';

    public const Operational_9 = 'ns=4;i=5007';

    public const _SetElement__9 = 'ns=4;i=5023';

    public const Operational_10 = 'ns=4;i=5058';

    public const ControllerModeSet = 'ns=4;i=5076';

    public const TargetValueSet = 'ns=4;i=5087';

    public const FunctionSet_3 = 'ns=4;i=5006';

    public const _SetElement__10 = 'ns=4;i=5080';

    public const Operational_11 = 'ns=4;i=5084';

    public const _SetElement__11 = 'ns=4;i=5017';

    public const MachineryBuildingBlocks = 'ns=4;i=5063';

    public const MachineryItemState = 'ns=4;i=5089';

    public const MachineryOperationMode = 'ns=4;i=5090';

    public const LifetimeCounters = 'ns=4;i=5091';

    public const OperationCounters = 'ns=4;i=5093';

    public const MachineryBuildingBlocks_2 = 'ns=4;i=5088';

    public const LifetimeCounters_2 = 'ns=4;i=5094';

    public const OperationCounters_2 = 'ns=4;i=5097';

    public const MaintenanceState_2 = 'ns=4;i=5018';

    public const LockedToUnlocking = 'ns=4;i=5098';

    public const Unlocking = 'ns=4;i=5107';

    public const Locking = 'ns=4;i=5108';

    public const Opening = 'ns=4;i=5109';

    public const Closing = 'ns=4;i=5110';

    public const UnlockingToClosed = 'ns=4;i=5114';

    public const ClosedToOpening = 'ns=4;i=5115';

    public const OpeningToOpened = 'ns=4;i=5136';

    public const OpenedToClosing = 'ns=4;i=5137';

    public const ClosingToClosed = 'ns=4;i=5138';

    public const ClosedToLocking = 'ns=4;i=5139';

    public const LockingToLocked = 'ns=4;i=5140';

    public const ControlFunctionState_2 = 'ns=4;i=5141';

    public const ControlFunctionState_3 = 'ns=4;i=5142';

    public const ControlFunctionState_4 = 'ns=4;i=5144';

    public const AlarmMonitor_3 = 'ns=4;i=5146';

    public const CurrentPauseTime = 'ns=4;i=6180';

    public const CurrentRuntime = 'ns=4;i=6163';

    public const CurrentStepName = 'ns=4;i=6184';

    public const CurrentStepNumber = 'ns=4;i=6185';

    public const CurrentStepRuntime = 'ns=4;i=6186';

    public const EstimatedRuntime = 'ns=4;i=6159';

    public const EstimatedStepNumbers = 'ns=4;i=6162';

    public const EstimatedStepRuntime = 'ns=4;i=6183';

    public const NodeVersion = 'ns=4;i=6075';

    public const Author = 'ns=4;i=6348';

    public const Created = 'ns=4;i=6341';

    public const Description = 'ns=4;i=6340';

    public const Modified = 'ns=4;i=6344';

    public const DeviceTemplateId = 'ns=4;i=6259';

    public const Version = 'ns=4;i=6346';

    public const MimeType = 'ns=4;i=6297';

    public const Name = 'ns=4;i=6298';

    public const URL = 'ns=4;i=6299';

    public const ApplicationUri = 'ns=4;i=6281';

    public const Description_2 = 'ns=4;i=6396';

    public const SupervisoryJobId = 'ns=4;i=6393';

    public const Samples = 'ns=4;i=6308';

    public const Started = 'ns=4;i=6307';

    public const Stopped_2 = 'ns=4;i=6394';

    public const User = 'ns=4;i=6282';

    public const StateNumber = 'ns=4;i=6044';

    public const StateNumber_2 = 'ns=4;i=6046';

    public const StateNumber_3 = 'ns=4;i=6045';

    public const StateNumber_4 = 'ns=4;i=6043';

    public const StateNumber_5 = 'ns=4;i=6330';

    public const TransitionNumber = 'ns=4;i=6355';

    public const TransitionNumber_2 = 'ns=4;i=6556';

    public const StateNumber_6 = 'ns=4;i=6329';

    public const TransitionNumber_3 = 'ns=4;i=6352';

    public const StateNumber_7 = 'ns=4;i=6351';

    public const StateNumber_8 = 'ns=4;i=6525';

    public const StateNumber_9 = 'ns=4;i=6475';

    public const TransitionNumber_4 = 'ns=4;i=6486';

    public const StateNumber_10 = 'ns=4;i=6474';

    public const TransitionNumber_5 = 'ns=4;i=6432';

    public const AvailableStates = 'ns=4;i=6473';

    public const AvailableTransitions = 'ns=4;i=6472';

    public const StateNumber_11 = 'ns=4;i=6449';

    public const StateNumber_12 = 'ns=4;i=6434';

    public const StateNumber_13 = 'ns=4;i=6433';

    public const StateNumber_14 = 'ns=4;i=6489';

    public const StateNumber_15 = 'ns=4;i=6430';

    public const StateNumber_16 = 'ns=4;i=6429';

    public const StateNumber_17 = 'ns=4;i=6426';

    public const StateNumber_18 = 'ns=4;i=6425';

    public const StateNumber_19 = 'ns=4;i=6423';

    public const StateNumber_20 = 'ns=4;i=6427';

    public const StateNumber_21 = 'ns=4;i=6424';

    public const StateNumber_22 = 'ns=4;i=6431';

    public const StateNumber_23 = 'ns=4;i=6428';

    public const LastExecutionDate = 'ns=4;i=6360';

    public const RecurrencePeriod = 'ns=4;i=6362';

    public const NodeVersion_2 = 'ns=4;i=6103';

    public const CurrentState = 'ns=4;i=6600';

    public const Id = 'ns=4;i=6601';

    public const NodeVersion_3 = 'ns=4;i=6113';

    public const DeviceHealth = 'ns=4;i=6480';

    public const NodeVersion_4 = 'ns=4;i=6189';

    public const OutputArguments = 'ns=4;i=6013';

    public const OutputArguments_2 = 'ns=4;i=6014';

    public const InputArguments = 'ns=4;i=6015';

    public const OutputArguments_3 = 'ns=4;i=6016';

    public const Locked_2 = 'ns=4;i=6017';

    public const LockingClient = 'ns=4;i=6018';

    public const LockingUser = 'ns=4;i=6019';

    public const RemainingLockTime = 'ns=4;i=6020';

    public const OutputArguments_4 = 'ns=4;i=6021';

    public const NodeVersion_5 = 'ns=4;i=6258';

    public const NodeVersion_6 = 'ns=4;i=6052';

    public const NodeVersion_7 = 'ns=4;i=6084';

    public const IsEnabled = 'ns=4;i=6022';

    public const AckedState = 'ns=4;i=6232';

    public const Id_2 = 'ns=4;i=6233';

    public const InputArguments_2 = 'ns=4;i=6234';

    public const ActiveState = 'ns=4;i=6224';

    public const Id_3 = 'ns=4;i=6225';

    public const InputArguments_3 = 'ns=4;i=6235';

    public const BranchId = 'ns=4;i=6236';

    public const ClientUserId = 'ns=4;i=6237';

    public const Comment = 'ns=4;i=6238';

    public const SourceTimestamp = 'ns=4;i=6239';

    public const ConditionClassId = 'ns=4;i=6240';

    public const ConditionClassName = 'ns=4;i=6241';

    public const ConditionName = 'ns=4;i=6242';

    public const EnabledState = 'ns=4;i=6228';

    public const Id_4 = 'ns=4;i=6229';

    public const EventId = 'ns=4;i=6248';

    public const EventType = 'ns=4;i=6249';

    public const HighHighLimit = 'ns=4;i=6023';

    public const HighLimit = 'ns=4;i=6024';

    public const InputNode = 'ns=4;i=6230';

    public const LastSeverity = 'ns=4;i=6243';

    public const SourceTimestamp_2 = 'ns=4;i=6244';

    public const CurrentState_2 = 'ns=4;i=6226';

    public const Id_5 = 'ns=4;i=6227';

    public const LowLimit = 'ns=4;i=6025';

    public const LowLowLimit = 'ns=4;i=6026';

    public const Message = 'ns=4;i=6250';

    public const Quality = 'ns=4;i=6245';

    public const SourceTimestamp_3 = 'ns=4;i=6246';

    public const ReceiveTime = 'ns=4;i=6251';

    public const Retain = 'ns=4;i=6247';

    public const SetpointNode = 'ns=4;i=6223';

    public const Severity = 'ns=4;i=6252';

    public const SourceName = 'ns=4;i=6253';

    public const SourceNode = 'ns=4;i=6254';

    public const SuppressedOrShelved = 'ns=4;i=6231';

    public const Time = 'ns=4;i=6255';

    public const CurrentState_3 = 'ns=4;i=6079';

    public const Id_6 = 'ns=4;i=6042';

    public const AckedState_2 = 'ns=4;i=6199';

    public const Id_7 = 'ns=4;i=6200';

    public const InputArguments_4 = 'ns=4;i=6201';

    public const ActiveState_2 = 'ns=4;i=6191';

    public const Id_8 = 'ns=4;i=6192';

    public const InputArguments_5 = 'ns=4;i=6202';

    public const BranchId_2 = 'ns=4;i=6203';

    public const ClientUserId_2 = 'ns=4;i=6204';

    public const Comment_2 = 'ns=4;i=6205';

    public const SourceTimestamp_4 = 'ns=4;i=6206';

    public const ConditionClassId_2 = 'ns=4;i=6207';

    public const ConditionClassName_2 = 'ns=4;i=6208';

    public const ConditionName_2 = 'ns=4;i=6209';

    public const EnabledState_2 = 'ns=4;i=6195';

    public const Id_9 = 'ns=4;i=6196';

    public const EventId_2 = 'ns=4;i=6215';

    public const EventType_2 = 'ns=4;i=6216';

    public const InputNode_2 = 'ns=4;i=6197';

    public const LastSeverity_2 = 'ns=4;i=6210';

    public const SourceTimestamp_5 = 'ns=4;i=6211';

    public const CurrentState_4 = 'ns=4;i=6193';

    public const Id_10 = 'ns=4;i=6194';

    public const Message_2 = 'ns=4;i=6217';

    public const Quality_2 = 'ns=4;i=6212';

    public const SourceTimestamp_6 = 'ns=4;i=6213';

    public const ReceiveTime_2 = 'ns=4;i=6218';

    public const Retain_2 = 'ns=4;i=6214';

    public const Severity_2 = 'ns=4;i=6219';

    public const SourceName_2 = 'ns=4;i=6220';

    public const SourceNode_2 = 'ns=4;i=6221';

    public const SuppressedOrShelved_2 = 'ns=4;i=6198';

    public const Time_2 = 'ns=4;i=6222';

    public const SensorValue = 'ns=4;i=6031';

    public const InputArguments_6 = 'ns=4;i=6289';

    public const OutputArguments_5 = 'ns=4;i=6290';

    public const NodeVersion_8 = 'ns=4;i=6257';

    public const InputArguments_7 = 'ns=4;i=6291';

    public const InputArguments_8 = 'ns=4;i=6292';

    public const NodeVersion_9 = 'ns=4;i=6041';

    public const IsNamespaceSubset = 'ns=4;i=6053';

    public const NamespacePublicationDate = 'ns=4;i=6054';

    public const NamespaceUri = 'ns=4;i=6055';

    public const NamespaceVersion = 'ns=4;i=6056';

    public const StaticNodeIdTypes = 'ns=4;i=6057';

    public const StaticNumericNodeIdRange = 'ns=4;i=6058';

    public const StaticStringNodeIdPattern = 'ns=4;i=6059';

    public const TransitionNumber_6 = 'ns=4;i=6000';

    public const TransitionNumber_7 = 'ns=4;i=6463';

    public const TransitionNumber_8 = 'ns=4;i=6464';

    public const TransitionNumber_9 = 'ns=4;i=6465';

    public const TransitionNumber_10 = 'ns=4;i=6466';

    public const TransitionNumber_11 = 'ns=4;i=6467';

    public const TransitionNumber_12 = 'ns=4;i=6476';

    public const TransitionNumber_13 = 'ns=4;i=6482';

    public const Properties = 'ns=4;i=6485';

    public const SupervisoryTaskId = 'ns=4;i=6487';

    public const DeviceProgramRunId = 'ns=4;i=6495';

    public const TotalRuntime = 'ns=4;i=6500';

    public const TotalPauseTime = 'ns=4;i=6501';

    public const EstimatedRuntime_2 = 'ns=4;i=6504';

    public const StateNumber_24 = 'ns=4;i=6508';

    public const StateNumber_25 = 'ns=4;i=6509';

    public const StateNumber_26 = 'ns=4;i=6511';

    public const TransitionNumber_14 = 'ns=4;i=6512';

    public const TransitionNumber_15 = 'ns=4;i=6513';

    public const TransitionNumber_16 = 'ns=4;i=6528';

    public const TransitionNumber_17 = 'ns=4;i=6529';

    public const TransitionNumber_18 = 'ns=4;i=6534';

    public const TransitionNumber_19 = 'ns=4;i=6047';

    public const TransitionNumber_20 = 'ns=4;i=6048';

    public const TransitionNumber_21 = 'ns=4;i=6049';

    public const TransitionNumber_22 = 'ns=4;i=6050';

    public const TransitionNumber_23 = 'ns=4;i=6060';

    public const TransitionNumber_24 = 'ns=4;i=6061';

    public const TransitionNumber_25 = 'ns=4;i=6070';

    public const TransitionNumber_26 = 'ns=4;i=6071';

    public const TransitionNumber_27 = 'ns=4;i=6072';

    public const TransitionNumber_28 = 'ns=4;i=6073';

    public const TransitionNumber_29 = 'ns=4;i=6076';

    public const TransitionNumber_30 = 'ns=4;i=6077';

    public const TransitionNumber_31 = 'ns=4;i=6078';

    public const TransitionNumber_32 = 'ns=4;i=6114';

    public const TransitionNumber_33 = 'ns=4;i=6115';

    public const TransitionNumber_34 = 'ns=4;i=6116';

    public const TransitionNumber_35 = 'ns=4;i=6117';

    public const TransitionNumber_36 = 'ns=4;i=6118';

    public const TransitionNumber_37 = 'ns=4;i=6275';

    public const SupervisoryTemplateId = 'ns=4;i=6090';

    public const IsEnabled_2 = 'ns=4;i=6002';

    public const CtrlP = 'ns=4;i=6003';

    public const CtrlTd = 'ns=4;i=6004';

    public const CtrlTi = 'ns=4;i=6005';

    public const TotalizedValue = 'ns=4;i=6011';

    public const DifferenceValue = 'ns=4;i=6012';

    public const TargetValue = 'ns=4;i=6034';

    public const CurrentValue = 'ns=4;i=6035';

    public const CalibrationValues = 'ns=4;i=6036';

    public const CompensationValue = 'ns=4;i=6037';

    public const Damping = 'ns=4;i=6038';

    public const SensorValue_2 = 'ns=4;i=6033';

    public const CurrentValue_2 = 'ns=4;i=6065';

    public const CurrentValue_3 = 'ns=4;i=6066';

    public const CurrentValue_4 = 'ns=4;i=6067';

    public const RawValue = 'ns=4;i=6039';

    public const RevisionCounter = 'ns=4;i=6008';

    public const Manufacturer = 'ns=4;i=6009';

    public const Model = 'ns=4;i=6010';

    public const DeviceManual = 'ns=4;i=6051';

    public const DeviceRevision = 'ns=4;i=6062';

    public const SoftwareRevision = 'ns=4;i=6063';

    public const SerialNumber = 'ns=4;i=6064';

    public const AssetId = 'ns=4;i=6068';

    public const ComponentName = 'ns=4;i=6069';

    public const DeviceClass = 'ns=4;i=6083';

    public const DeviceHealth_2 = 'ns=4;i=6086';

    public const HardwareRevision = 'ns=4;i=6093';

    public const ManufacturerUri = 'ns=4;i=6094';

    public const ProductCode = 'ns=4;i=6095';

    public const ProductInstanceUri = 'ns=4;i=6096';

    public const AssetId_2 = 'ns=4;i=6149';

    public const ComponentName_2 = 'ns=4;i=6150';

    public const DeviceClass_2 = 'ns=4;i=6151';

    public const DeviceManual_2 = 'ns=4;i=6152';

    public const DeviceRevision_2 = 'ns=4;i=6153';

    public const HardwareRevision_2 = 'ns=4;i=6154';

    public const Manufacturer_2 = 'ns=4;i=6169';

    public const ManufacturerUri_2 = 'ns=4;i=6170';

    public const Model_2 = 'ns=4;i=6171';

    public const ProductCode_2 = 'ns=4;i=6172';

    public const ProductInstanceUri_2 = 'ns=4;i=6173';

    public const RevisionCounter_2 = 'ns=4;i=6174';

    public const SerialNumber_2 = 'ns=4;i=6175';

    public const SoftwareRevision_2 = 'ns=4;i=6176';

    public const LifeTime = 'ns=4;i=6027';

    public const OperationalLocation = 'ns=4;i=6028';

    public const HierarchicalLocation = 'ns=4;i=6029';

    public const CurrentValue_5 = 'ns=4;i=6001';

    public const TargetValue_2 = 'ns=4;i=6006';

    public const SensorValue_3 = 'ns=4;i=6007';

    public const SensorValue_4 = 'ns=4;i=6030';

    public const _VariableSetElement_ = 'ns=4;i=6082';

    public const NodeVersion_10 = 'ns=4;i=6085';

    public const OperationalLocation_2 = 'ns=4;i=6074';

    public const HierarchicalLocation_2 = 'ns=4;i=6080';

    public const LastOperatingTime = 'ns=4;i=6081';

    public const NextOperatingTime = 'ns=4;i=6087';

    public const LastOperatingCycles = 'ns=4;i=6088';

    public const NextOperatingCycles = 'ns=4;i=6091';

    public const InputArguments_9 = 'ns=4;i=6092';

    public const EnumValues = 'ns=4;i=6099';

    public const ConfigurationChanged = 'ns=4;i=6097';

    public const EstimatedDowntime = 'ns=4;i=6102';

    public const MaintenanceMethod = 'ns=4;i=6106';

    public const MaintenanceSupplier = 'ns=4;i=6107';

    public const PartsOfAssetReplaced = 'ns=4;i=6108';

    public const PartsOfAssetServiced = 'ns=4;i=6111';

    public const PlannedDate = 'ns=4;i=6119';

    public const QualificationOfPersonnel = 'ns=4;i=6120';

    public const InputArguments_10 = 'ns=4;i=6127';

    public const InputArguments_11 = 'ns=4;i=6129';

    public const AssetId_3 = 'ns=4;i=6284';

    public const ComponentName_3 = 'ns=4;i=6285';

    public const InputArguments_12 = 'ns=4;i=6098';

    public const OutputArguments_6 = 'ns=4;i=6121';

    public const CurrentState_5 = 'ns=4;i=6100';

    public const EffectiveDisplayName = 'ns=4;i=6101';

    public const EffectiveDisplayName_2 = 'ns=4;i=6105';

    public const CurrentValue_6 = 'ns=4;i=6109';

    public const TargetValue_3 = 'ns=4;i=6110';

    public const CurrentMode = 'ns=4;i=6122';

    public const TargetValue_4 = 'ns=4;i=6123';

    public const TargetValue_5 = 'ns=4;i=6124';

    public const TargetValue_6 = 'ns=4;i=6135';

    public const DeviceProgramRunId_2 = 'ns=4;i=6126';

    public const FalseState = 'ns=4;i=6136';

    public const TrueState = 'ns=4;i=6137';

    public const FalseState_2 = 'ns=4;i=6138';

    public const TrueState_2 = 'ns=4;i=6140';

    public const FalseState_3 = 'ns=4;i=6155';

    public const TrueState_3 = 'ns=4;i=6156';

    public const EnumStrings = 'ns=4;i=6157';

    public const EnumStrings_2 = 'ns=4;i=6158';

    public const EnumStrings_3 = 'ns=4;i=6160';

    public const EnumStrings_4 = 'ns=4;i=6165';

    public const OutputArguments_7 = 'ns=4;i=6032';

    public const IncreaseRate = 'ns=4;i=6089';

    public const DecreaseRate = 'ns=4;i=6125';

    public const InputArguments_13 = 'ns=4;i=6128';

    public const SensorValue_5 = 'ns=4;i=6130';

    public const RawValue_2 = 'ns=4;i=6134';

    public const InputArguments_14 = 'ns=4;i=6142';

    public const OutputArguments_8 = 'ns=4;i=6143';

    public const InputArguments_15 = 'ns=4;i=6132';

    public const CurrentState_6 = 'ns=4;i=6146';

    public const EngineeringUnits = 'ns=4;i=6147';

    public const EngineeringUnits_2 = 'ns=4;i=6148';

    public const EngineeringUnits_3 = 'ns=4;i=6161';

    public const AckedState_3 = 'ns=4;i=6181';

    public const Id_11 = 'ns=4;i=6182';

    public const InputArguments_16 = 'ns=4;i=6187';

    public const ActiveState_3 = 'ns=4;i=6168';

    public const Id_12 = 'ns=4;i=6177';

    public const InputArguments_17 = 'ns=4;i=6267';

    public const BranchId_3 = 'ns=4;i=6256';

    public const ClientUserId_3 = 'ns=4;i=6266';

    public const Comment_3 = 'ns=4;i=6264';

    public const SourceTimestamp_7 = 'ns=4;i=6265';

    public const ConditionClassId_3 = 'ns=4;i=6268';

    public const ConditionClassName_3 = 'ns=4;i=6269';

    public const ConditionName_3 = 'ns=4;i=6190';

    public const EnabledState_3 = 'ns=4;i=6166';

    public const Id_13 = 'ns=4;i=6167';

    public const EventId_3 = 'ns=4;i=6270';

    public const EventType_3 = 'ns=4;i=6271';

    public const InputNode_3 = 'ns=4;i=6179';

    public const LastSeverity_3 = 'ns=4;i=6262';

    public const SourceTimestamp_8 = 'ns=4;i=6263';

    public const Message_3 = 'ns=4;i=6277';

    public const NormalState = 'ns=4;i=6164';

    public const Quality_3 = 'ns=4;i=6260';

    public const SourceTimestamp_9 = 'ns=4;i=6261';

    public const ReceiveTime_3 = 'ns=4;i=6276';

    public const Retain_3 = 'ns=4;i=6188';

    public const Severity_3 = 'ns=4;i=6278';

    public const SourceName_3 = 'ns=4;i=6273';

    public const SourceNode_3 = 'ns=4;i=6272';

    public const SuppressedOrShelved_3 = 'ns=4;i=6178';

    public const Time_3 = 'ns=4;i=6274';

    public const CurrentState_7 = 'ns=4;i=6279';

    public const EffectiveDisplayName_3 = 'ns=4;i=6280';

    public const StateNumber_27 = 'ns=4;i=6286';

    public const StateNumber_28 = 'ns=4;i=6287';

    public const StateNumber_29 = 'ns=4;i=6288';

    public const StateNumber_30 = 'ns=4;i=6293';

    public const TransitionNumber_38 = 'ns=4;i=6294';

    public const TransitionNumber_39 = 'ns=4;i=6295';

    public const TransitionNumber_40 = 'ns=4;i=6296';

    public const TransitionNumber_41 = 'ns=4;i=6300';

    public const TransitionNumber_42 = 'ns=4;i=6301';

    public const TransitionNumber_43 = 'ns=4;i=6302';

    public const TransitionNumber_44 = 'ns=4;i=6303';

    public const TransitionNumber_45 = 'ns=4;i=6304';

    public const InputArguments_18 = 'ns=4;i=6305';

    public const InputArguments_19 = 'ns=4;i=6306';

    public const InputArguments_20 = 'ns=4;i=6309';

    public const CurrentProgramTemplate = 'ns=4;i=6315';

    public const CurrentState_8 = 'ns=4;i=6314';

    public const RawValue_3 = 'ns=4;i=6040';

    public const SensorValue_6 = 'ns=4;i=6112';

    public const NodeVersion_11 = 'ns=4;i=6104';

    public const NodeVersion_12 = 'ns=4;i=6133';

    public const TypeDictionary = 'ns=4;i=6131';

    public const NamespaceUri_2 = 'ns=4;i=6139';

    public const TypeDictionary_2 = 'ns=4;i=6141';

    public const NamespaceUri_3 = 'ns=4;i=6144';

    public const KeyValueType = 'ns=4;i=6145';

    public const SampleInfoType = 'ns=4;i=6283';

    public const KeyValueType_2 = 'ns=4;i=6310';

    public const SampleInfoType_2 = 'ns=4;i=6311';

    public const Close = 'ns=4;i=7012';

    public const Lock_2 = 'ns=4;i=7013';

    public const Open = 'ns=4;i=7011';

    public const Unlock = 'ns=4;i=7014';

    public const GotoOperate = 'ns=4;i=7021';

    public const GotoShutdown = 'ns=4;i=7031';

    public const GotoSleep = 'ns=4;i=7032';

    public const Abort = 'ns=4;i=7078';

    public const Clear = 'ns=4;i=7079';

    public const Hold = 'ns=4;i=7074';

    public const Reset = 'ns=4;i=7069';

    public const Suspend = 'ns=4;i=7073';

    public const ToComplete = 'ns=4;i=7070';

    public const Unhold = 'ns=4;i=7072';

    public const Unsuspend = 'ns=4;i=7075';

    public const StartTask = 'ns=4;i=7061';

    public const GotoOperate_2 = 'ns=4;i=7124';

    public const GotoShutdown_2 = 'ns=4;i=7125';

    public const GotoSleep_2 = 'ns=4;i=7126';

    public const BreakLock = 'ns=4;i=7005';

    public const ExitLock = 'ns=4;i=7006';

    public const InitLock = 'ns=4;i=7007';

    public const RenewLock = 'ns=4;i=7008';

    public const Acknowledge = 'ns=4;i=7042';

    public const AddComment = 'ns=4;i=7043';

    public const Disable = 'ns=4;i=7044';

    public const Enable = 'ns=4;i=7045';

    public const Reset_2 = 'ns=4;i=7029';

    public const Stop = 'ns=4;i=7028';

    public const Acknowledge_2 = 'ns=4;i=7038';

    public const AddComment_2 = 'ns=4;i=7039';

    public const Disable_2 = 'ns=4;i=7040';

    public const Enable_2 = 'ns=4;i=7041';

    public const Download = 'ns=4;i=7051';

    public const Remove = 'ns=4;i=7052';

    public const Upload = 'ns=4;i=7053';

    public const Reset_3 = 'ns=4;i=7000';

    public const Stop_2 = 'ns=4;i=7112';

    public const ResetTotalizer = 'ns=4;i=7002';

    public const StopTask = 'ns=4;i=7001';

    public const ResetTask = 'ns=4;i=7003';

    public const Start = 'ns=4;i=7004';

    public const StartWithTargetValue = 'ns=4;i=7009';

    public const StartProgram = 'ns=4;i=7010';

    public const Clear_2 = 'ns=4;i=7019';

    public const Stop_3 = 'ns=4;i=7024';

    public const Abort_2 = 'ns=4;i=7025';

    public const ModifyTargetValueBy = 'ns=4;i=7022';

    public const Start_2 = 'ns=4;i=7035';

    public const StartProgram_2 = 'ns=4;i=7046';

    public const Acknowledge_3 = 'ns=4;i=7030';

    public const AddComment_3 = 'ns=4;i=7049';

    public const Disable_3 = 'ns=4;i=7048';

    public const Enable_3 = 'ns=4;i=7047';

    public const StartWithTargetValue_2 = 'ns=4;i=7027';

    public const StartWithTargetValue_3 = 'ns=4;i=7050';

    public const StartWithTargetValue_4 = 'ns=4;i=7054';

    public const GotoProcessing = 'ns=4;i=7020';

    public const GotoMaintenance = 'ns=4;i=7055';

    public const GotoSetup = 'ns=4;i=7056';

    public const ActiveProgramType = 'ns=4;i=1040';

    public const LADSComponentsType = 'ns=4;i=1025';

    public const LADSOperationCountersType = 'ns=4;i=1034';

    public const FunctionalUnitSetType = 'ns=4;i=1023';

    public const FunctionSetType = 'ns=4;i=1026';

    public const ProgramTemplateSetType = 'ns=4;i=1019';

    public const ProgramTemplateType = 'ns=4;i=1018';

    public const SupportedPropertiesSetType = 'ns=4;i=1033';

    public const SupportedPropertyType = 'ns=4;i=1035';

    public const ResultFileSetType = 'ns=4;i=1022';

    public const ResultFileType = 'ns=4;i=1001';

    public const ResultSetType = 'ns=4;i=1020';

    public const ResultType = 'ns=4;i=1021';

    public const CoverStateMachineType = 'ns=4;i=1010';

    public const LADSDeviceStateMachineType = 'ns=4;i=1039';

    public const FunctionalStateMachineType = 'ns=4;i=1038';

    public const RunningStateMachineType = 'ns=4;i=1036';

    public const MaintenanceSetType = 'ns=4;i=1027';

    public const MaintenanceTaskType = 'ns=4;i=1028';

    public const LADSDeviceType = 'ns=4;i=1002';

    public const LADSComponentType = 'ns=4;i=1024';

    public const FunctionalUnitType = 'ns=4;i=1003';

    public const FunctionType = 'ns=4;i=1004';

    public const BaseControlFunctionType = 'ns=4;i=1007';

    public const AnalogControlFunctionType = 'ns=4;i=1009';

    public const AnalogControlFunctionWithTotalizerType = 'ns=4;i=1014';

    public const DiscreteControlFunctionType = 'ns=4;i=1017';

    public const MultiStateDiscreteControlFunctionType = 'ns=4;i=1045';

    public const TwoStateDiscreteControlFunctionType = 'ns=4;i=1042';

    public const BaseSensorFunctionType = 'ns=4;i=1005';

    public const AnalogScalarSensorFunctionType = 'ns=4;i=1016';

    public const DiscreteSensorFunctionType = 'ns=4;i=1012';

    public const CoverFunctionType = 'ns=4;i=1011';

    public const ProgramManagerType = 'ns=4;i=1006';

    public const TimerControlFunctionType = 'ns=4;i=1013';

    public const AnalogScalarSensorFunctionWithCompensationType = 'ns=4;i=1000';

    public const ControllerTuningParameterType = 'ns=4;i=1008';

    public const PidControllerParameterType = 'ns=4;i=1030';

    public const TwoStateDiscreteSensorFunctionType = 'ns=4;i=1031';

    public const MultiStateDiscreteSensorFunctionType = 'ns=4;i=1037';

    public const FunctionalUnitStateMachineType = 'ns=4;i=1043';

    public const ControlFunctionStateMachineType = 'ns=4;i=1044';

    public const MultiModeAnalogControlFunctionType = 'ns=4;i=1047';

    public const ControllerParameterType = 'ns=4;i=1048';

    public const ControllerParameterSetType = 'ns=4;i=1049';

    public const AnalogControlFunctionWithComposedTargetValueType = 'ns=4;i=1052';

    public const MultiSensorFunctionType = 'ns=4;i=1051';

    public const AnalogControlFunctionWithRelativeTargetValueType = 'ns=4;i=1029';

    public const AnalogArraySensorFunctionType = 'ns=4;i=1015';

    public const SetType = 'ns=4;i=61';

    public const VariableSetType = 'ns=4;i=1041';

    public const AnalogSensorFunctionType = 'ns=4;i=1046';

    public const LADSOperationModeStateMachineType = 'ns=4;i=1050';

    public const KeyValueType_3 = 'ns=4;i=3003';

    public const SampleInfoType_3 = 'ns=4;i=3002';

    public const MaintenanceTaskResultEnum = 'ns=4;i=3000';
}
