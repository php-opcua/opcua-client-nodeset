<?php

declare(strict_types=1);

namespace PhpOpcua\Nodeset\ADI;

/**
 * NodeId constants generated from a NodeSet2.xml file.
 *
 * @generated
 */
class AdiNodeIds
{
    public const http___opcfoundation_org_UA_ADI_ = 'ns=1;i=15001';

    public const ParameterSet = 'ns=1;i=5001';

    public const ConfigData = 'ns=1;i=9462';

    public const MethodSet = 'ns=1;i=9382';

    public const Identification = 'ns=1;i=9386';

    public const Configuration = 'ns=1;i=9482';

    public const Status = 'ns=1;i=9484';

    public const FactorySettings = 'ns=1;i=9486';

    public const AnalyserStateMachine = 'ns=1;i=9488';

    public const _ChannelIdentifier_ = 'ns=1;i=9500';

    public const MethodSet_2 = 'ns=1;i=9503';

    public const Configuration_2 = 'ns=1;i=9546';

    public const Status_2 = 'ns=1;i=9548';

    public const ChannelStateMachine = 'ns=1;i=9550';

    public const OperatingSubStateMachine = 'ns=1;i=9562';

    public const OperatingExecuteSubStateMachine = 'ns=1;i=9574';

    public const _AccessorySlotIdentifier_ = 'ns=1;i=9610';

    public const SupportedTypes = 'ns=1;i=9611';

    public const AccessorySlotStateMachine = 'ns=1;i=9614';

    public const Powerup = 'ns=1;i=9647';

    public const Operating = 'ns=1;i=9649';

    public const Local = 'ns=1;i=9651';

    public const Maintenance = 'ns=1;i=9653';

    public const Shutdown = 'ns=1;i=9655';

    public const PowerupToOperatingTransition = 'ns=1;i=9657';

    public const OperatingToLocalTransition = 'ns=1;i=9659';

    public const OperatingToMaintenanceTransition = 'ns=1;i=9661';

    public const LocalToOperatingTransition = 'ns=1;i=9663';

    public const LocalToMaintenanceTransition = 'ns=1;i=9665';

    public const MaintenanceToOperatingTransition = 'ns=1;i=9667';

    public const MaintenanceToLocalTransition = 'ns=1;i=9669';

    public const OperatingToShutdownTransition = 'ns=1;i=9671';

    public const LocalToShutdownTransition = 'ns=1;i=9673';

    public const MaintenanceToShutdownTransition = 'ns=1;i=9675';

    public const ParameterSet_2 = 'ns=1;i=9677';

    public const MethodSet_3 = 'ns=1;i=9679';

    public const _GroupIdentifier_ = 'ns=1;i=9788';

    public const Configuration_3 = 'ns=1;i=9724';

    public const Status_3 = 'ns=1;i=9726';

    public const ChannelStateMachine_2 = 'ns=1;i=9728';

    public const OperatingSubStateMachine_2 = 'ns=1;i=9740';

    public const OperatingExecuteSubStateMachine_2 = 'ns=1;i=9752';

    public const _StreamIdentifier_ = 'ns=1;i=9790';

    public const Configuration_4 = 'ns=1;i=9902';

    public const Status_4 = 'ns=1;i=9904';

    public const AcquisitionSettings = 'ns=1;i=9906';

    public const AcquisitionStatus = 'ns=1;i=9908';

    public const AcquisitionData = 'ns=1;i=9910';

    public const ChemometricModelSettings = 'ns=1;i=9912';

    public const Context = 'ns=1;i=9914';

    public const _AccessorySlotIdentifier__2 = 'ns=1;i=9916';

    public const SupportedTypes_2 = 'ns=1;i=9917';

    public const AccessorySlotStateMachine_2 = 'ns=1;i=9920';

    public const OperatingSubStateMachine_3 = 'ns=1;i=9948';

    public const OperatingExecuteSubStateMachine_3 = 'ns=1;i=9960';

    public const LocalSubStateMachine = 'ns=1;i=9972';

    public const MaintenanceSubStateMachine = 'ns=1;i=9984';

    public const SlaveMode = 'ns=1;i=9996';

    public const Operating_2 = 'ns=1;i=9998';

    public const Local_2 = 'ns=1;i=10000';

    public const Maintenance_2 = 'ns=1;i=10002';

    public const SlaveModeToOperatingTransition = 'ns=1;i=10004';

    public const OperatingToLocalTransition_2 = 'ns=1;i=10006';

    public const OperatingToMaintenanceTransition_2 = 'ns=1;i=10008';

    public const LocalToOperatingTransition_2 = 'ns=1;i=10010';

    public const LocalToMaintenanceTransition_2 = 'ns=1;i=10012';

    public const MaintenanceToOperatingTransition_2 = 'ns=1;i=10014';

    public const MaintenanceToLocalTransition_2 = 'ns=1;i=10016';

    public const OperatingToSlaveModeTransition = 'ns=1;i=10018';

    public const LocalToSlaveModeTransition = 'ns=1;i=10020';

    public const MaintenanceToSlaveModeTransition = 'ns=1;i=10022';

    public const OperatingExecuteSubStateMachine_4 = 'ns=1;i=10036';

    public const Stopped = 'ns=1;i=10048';

    public const Resetting = 'ns=1;i=10050';

    public const Idle = 'ns=1;i=10052';

    public const Starting = 'ns=1;i=10054';

    public const Execute = 'ns=1;i=10056';

    public const Completing = 'ns=1;i=10058';

    public const Complete = 'ns=1;i=10060';

    public const Suspending = 'ns=1;i=10062';

    public const Suspended = 'ns=1;i=10064';

    public const Unsuspending = 'ns=1;i=10066';

    public const Holding = 'ns=1;i=10068';

    public const Held = 'ns=1;i=10070';

    public const Unholding = 'ns=1;i=10072';

    public const Stopping = 'ns=1;i=10074';

    public const Aborting = 'ns=1;i=10076';

    public const Aborted = 'ns=1;i=10078';

    public const Clearing = 'ns=1;i=10080';

    public const StoppedToResettingTransition = 'ns=1;i=10082';

    public const ResettingTransition = 'ns=1;i=10084';

    public const ResettingToIdleTransition = 'ns=1;i=10086';

    public const IdleToStartingTransition = 'ns=1;i=10088';

    public const StartingTransition = 'ns=1;i=10090';

    public const StartingToExecuteTransition = 'ns=1;i=10092';

    public const ExecuteToCompletingTransition = 'ns=1;i=10094';

    public const CompletingTransition = 'ns=1;i=10096';

    public const CompletingToCompleteTransition = 'ns=1;i=10098';

    public const CompleteToStoppedTransition = 'ns=1;i=10100';

    public const ExecuteToHoldingTransition = 'ns=1;i=10102';

    public const HoldingTransition = 'ns=1;i=10104';

    public const HoldingToHeldTransition = 'ns=1;i=10106';

    public const HeldToUnholdingTransition = 'ns=1;i=10108';

    public const UnholdingTransition = 'ns=1;i=10110';

    public const UnholdingToHoldingTransition = 'ns=1;i=10112';

    public const UnholdingToExecuteTransition = 'ns=1;i=10114';

    public const ExecuteToSuspendingTransition = 'ns=1;i=10116';

    public const SuspendingTransition = 'ns=1;i=10118';

    public const SuspendingToSuspendedTransition = 'ns=1;i=10120';

    public const SuspendedToUnsuspendingTransition = 'ns=1;i=10122';

    public const UnsuspendingTransition = 'ns=1;i=10124';

    public const UnsuspendingToSuspendingTransition = 'ns=1;i=10126';

    public const UnsuspendingToExecuteTransition = 'ns=1;i=10128';

    public const StoppingToStoppedTransition = 'ns=1;i=10130';

    public const AbortingToAbortedTransition = 'ns=1;i=10132';

    public const AbortedToClearingTransition = 'ns=1;i=10134';

    public const ClearingToStoppedTransition = 'ns=1;i=10136';

    public const ResettingToStoppingTransition = 'ns=1;i=10138';

    public const IdleToStoppingTransition = 'ns=1;i=10140';

    public const StartingToStoppingTransition = 'ns=1;i=10142';

    public const ExecuteToStoppingTransition = 'ns=1;i=10144';

    public const CompletingToStoppingTransition = 'ns=1;i=10146';

    public const CompleteToStoppingTransition = 'ns=1;i=10148';

    public const SuspendingToStoppingTransition = 'ns=1;i=10150';

    public const SuspendedToStoppingTransition = 'ns=1;i=10152';

    public const UnsuspendingToStoppingTransition = 'ns=1;i=10154';

    public const HoldingToStoppingTransition = 'ns=1;i=10156';

    public const HeldToStoppingTransition = 'ns=1;i=10158';

    public const UnholdingToStoppingTransition = 'ns=1;i=10160';

    public const StoppedToAbortingTransition = 'ns=1;i=10162';

    public const ResettingToAbortingTransition = 'ns=1;i=10164';

    public const IdleToAbortingTransition = 'ns=1;i=10166';

    public const StartingToAbortingTransition = 'ns=1;i=10168';

    public const ExecuteToAbortingTransition = 'ns=1;i=10170';

    public const CompletingToAbortingTransition = 'ns=1;i=10172';

    public const CompleteToAbortingTransition = 'ns=1;i=10174';

    public const SuspendingToAbortingTransition = 'ns=1;i=10176';

    public const SuspendedToAbortingTransition = 'ns=1;i=10178';

    public const UnsuspendingToAbortingTransition = 'ns=1;i=10180';

    public const HoldingToAbortingTransition = 'ns=1;i=10182';

    public const HeldToAbortingTransition = 'ns=1;i=10184';

    public const UnholdingToAbortingTransition = 'ns=1;i=10186';

    public const StoppingToAbortingTransition = 'ns=1;i=10188';

    public const SelectExecutionCycle = 'ns=1;i=10201';

    public const WaitForCalibrationTrigger = 'ns=1;i=10203';

    public const ExtractCalibrationSample = 'ns=1;i=10205';

    public const PrepareCalibrationSample = 'ns=1;i=10207';

    public const AnalyseCalibrationSample = 'ns=1;i=10209';

    public const WaitForValidationTrigger = 'ns=1;i=10211';

    public const ExtractValidationSample = 'ns=1;i=10213';

    public const PrepareValidationSample = 'ns=1;i=10215';

    public const AnalyseValidationSample = 'ns=1;i=10217';

    public const WaitForSampleTrigger = 'ns=1;i=10219';

    public const ExtractSample = 'ns=1;i=10221';

    public const PrepareSample = 'ns=1;i=10223';

    public const AnalyseSample = 'ns=1;i=10225';

    public const WaitForDiagnosticTrigger = 'ns=1;i=10227';

    public const Diagnostic = 'ns=1;i=10229';

    public const WaitForCleaningTrigger = 'ns=1;i=10231';

    public const Cleaning = 'ns=1;i=10233';

    public const PublishResults = 'ns=1;i=10235';

    public const EjectGrabSample = 'ns=1;i=10237';

    public const CleanupSamplingSystem = 'ns=1;i=10239';

    public const SelectExecutionCycleToWaitForCalibrationTriggerTransition = 'ns=1;i=10241';

    public const WaitForCalibrationTriggerToExtractCalibrationSampleTransition = 'ns=1;i=10243';

    public const ExtractCalibrationSampleTransition = 'ns=1;i=10245';

    public const ExtractCalibrationSampleToPrepareCalibrationSampleTransition = 'ns=1;i=10247';

    public const PrepareCalibrationSampleTransition = 'ns=1;i=10249';

    public const PrepareCalibrationSampleToAnalyseCalibrationSampleTransition = 'ns=1;i=10251';

    public const AnalyseCalibrationSampleTransition = 'ns=1;i=10253';

    public const AnalyseCalibrationSampleToPublishResultsTransition = 'ns=1;i=10255';

    public const SelectExecutionCycleToWaitForValidationTriggerTransition = 'ns=1;i=10257';

    public const WaitForValidationTriggerToExtractValidationSampleTransition = 'ns=1;i=10259';

    public const ExtractValidationSampleTransition = 'ns=1;i=10261';

    public const ExtractValidationSampleToPrepareValidationSampleTransition = 'ns=1;i=10263';

    public const PrepareValidationSampleTransition = 'ns=1;i=10265';

    public const PrepareValidationSampleToAnalyseValidationSampleTransition = 'ns=1;i=10267';

    public const AnalyseValidationSampleTransition = 'ns=1;i=10269';

    public const AnalyseValidationSampleToPublishResultsTransition = 'ns=1;i=10271';

    public const SelectExecutionCycleToWaitForSampleTriggerTransition = 'ns=1;i=10273';

    public const WaitForSampleTriggerToExtractSampleTransition = 'ns=1;i=10275';

    public const ExtractSampleTransition = 'ns=1;i=10277';

    public const ExtractSampleToPrepareSampleTransition = 'ns=1;i=10279';

    public const PrepareSampleTransition = 'ns=1;i=10281';

    public const PrepareSampleToAnalyseSampleTransition = 'ns=1;i=10283';

    public const AnalyseSampleTransition = 'ns=1;i=10285';

    public const AnalyseSampleToPublishResultsTransition = 'ns=1;i=10287';

    public const SelectExecutionCycleToWaitForDiagnosticTriggerTransition = 'ns=1;i=10289';

    public const WaitForDiagnosticTriggerToDiagnosticTransition = 'ns=1;i=10291';

    public const DiagnosticTransition = 'ns=1;i=10293';

    public const DiagnosticToPublishResultsTransition = 'ns=1;i=10295';

    public const SelectExecutionCycleToWaitForCleaningTriggerTransition = 'ns=1;i=10297';

    public const WaitForCleaningTriggerToCleaningTransition = 'ns=1;i=10299';

    public const CleaningTransition = 'ns=1;i=10301';

    public const CleaningToPublishResultsTransition = 'ns=1;i=10303';

    public const PublishResultsToCleanupSamplingSystemTransition = 'ns=1;i=10305';

    public const PublishResultsToEjectGrabSampleTransition = 'ns=1;i=10307';

    public const EjectGrabSampleTransition = 'ns=1;i=10309';

    public const EjectGrabSampleToCleanupSamplingSystemTransition = 'ns=1;i=10311';

    public const CleanupSamplingSystemTransition = 'ns=1;i=10313';

    public const CleanupSamplingSystemToSelectExecutionCycleTransition = 'ns=1;i=10315';

    public const ParameterSet_3 = 'ns=1;i=10317';

    public const _GroupIdentifier__2 = 'ns=1;i=10444';

    public const Configuration_5 = 'ns=1;i=10430';

    public const Status_5 = 'ns=1;i=10432';

    public const AcquisitionSettings_2 = 'ns=1;i=10434';

    public const AcquisitionStatus_2 = 'ns=1;i=10436';

    public const AcquisitionData_2 = 'ns=1;i=10438';

    public const ChemometricModelSettings_2 = 'ns=1;i=10440';

    public const Context_2 = 'ns=1;i=10442';

    public const ParameterSet_4 = 'ns=1;i=10446';

    public const Configuration_6 = 'ns=1;i=10559';

    public const AcquisitionSettings_3 = 'ns=1;i=10563';

    public const AcquisitionStatus_3 = 'ns=1;i=10565';

    public const AcquisitionData_3 = 'ns=1;i=10567';

    public const FactorySettings_2 = 'ns=1;i=10638';

    public const ParameterSet_5 = 'ns=1;i=10768';

    public const AcquisitionData_4 = 'ns=1;i=10889';

    public const ParameterSet_6 = 'ns=1;i=11305';

    public const FactorySettings_3 = 'ns=1;i=11411';

    public const AccessorySlotStateMachine_3 = 'ns=1;i=12788';

    public const _AccessoryIdentifier_ = 'ns=1;i=12800';

    public const Configuration_7 = 'ns=1;i=12821';

    public const Status_6 = 'ns=1;i=12823';

    public const FactorySettings_4 = 'ns=1;i=12825';

    public const Powerup_2 = 'ns=1;i=12840';

    public const Empty = 'ns=1;i=12842';

    public const Inserting = 'ns=1;i=12844';

    public const Installed = 'ns=1;i=12846';

    public const Removing = 'ns=1;i=12848';

    public const Shutdown_2 = 'ns=1;i=12850';

    public const PowerupToEmptyTransition = 'ns=1;i=12852';

    public const EmptyToInsertingTransition = 'ns=1;i=12854';

    public const InsertingTransition = 'ns=1;i=12856';

    public const InsertingToRemovingTransition = 'ns=1;i=12858';

    public const InsertingToInstalledTransition = 'ns=1;i=12860';

    public const InstalledToRemovingTransition = 'ns=1;i=12862';

    public const RemovingTransition = 'ns=1;i=12864';

    public const RemovingToEmptyTransition = 'ns=1;i=12866';

    public const EmptyToShutdownTransition = 'ns=1;i=12868';

    public const InsertingToShutdownTransition = 'ns=1;i=12870';

    public const InstalledToShutdownTransition = 'ns=1;i=12872';

    public const RemovingToShutdownTransition = 'ns=1;i=12874';

    public const Configuration_8 = 'ns=1;i=12898';

    public const Status_7 = 'ns=1;i=12900';

    public const FactorySettings_5 = 'ns=1;i=12902';

    public const NamespaceUri = 'ns=1;i=15002';

    public const NamespaceVersion = 'ns=1;i=15003';

    public const NamespacePublicationDate = 'ns=1;i=15004';

    public const IsNamespaceSubset = 'ns=1;i=15005';

    public const StaticNodeIdTypes = 'ns=1;i=15006';

    public const StaticNumericNodeIdRange = 'ns=1;i=15007';

    public const StaticStringNodeIdPattern = 'ns=1;i=15008';

    public const DefaultRolePermissions = 'ns=1;i=15031';

    public const DefaultUserRolePermissions = 'ns=1;i=15032';

    public const DefaultAccessRestrictions = 'ns=1;i=15033';

    public const DiagnosticStatus = 'ns=1;i=9459';

    public const Size = 'ns=1;i=9463';

    public const Writable = 'ns=1;i=13070';

    public const UserWritable = 'ns=1;i=13071';

    public const OpenCount = 'ns=1;i=9466';

    public const InputArguments = 'ns=1;i=9468';

    public const OutputArguments = 'ns=1;i=9469';

    public const InputArguments_2 = 'ns=1;i=9471';

    public const InputArguments_3 = 'ns=1;i=9473';

    public const OutputArguments_2 = 'ns=1;i=9474';

    public const InputArguments_4 = 'ns=1;i=9476';

    public const InputArguments_5 = 'ns=1;i=9478';

    public const OutputArguments_3 = 'ns=1;i=9479';

    public const InputArguments_6 = 'ns=1;i=9481';

    public const OutputArguments_4 = 'ns=1;i=9444';

    public const InputArguments_7 = 'ns=1;i=9446';

    public const OutputArguments_5 = 'ns=1;i=9447';

    public const OutputArguments_6 = 'ns=1;i=9449';

    public const InputArguments_8 = 'ns=1;i=9451';

    public const OutputArguments_7 = 'ns=1;i=9452';

    public const CurrentState = 'ns=1;i=9489';

    public const Id = 'ns=1;i=9490';

    public const InputArguments_9 = 'ns=1;i=9524';

    public const CurrentState_2 = 'ns=1;i=9551';

    public const Id_2 = 'ns=1;i=9552';

    public const CurrentState_3 = 'ns=1;i=9563';

    public const Id_3 = 'ns=1;i=9564';

    public const CurrentState_4 = 'ns=1;i=9575';

    public const Id_4 = 'ns=1;i=9576';

    public const IsHotSwappable = 'ns=1;i=9612';

    public const IsEnabled = 'ns=1;i=9613';

    public const CurrentState_5 = 'ns=1;i=9615';

    public const Id_5 = 'ns=1;i=9616';

    public const StateNumber = 'ns=1;i=9648';

    public const StateNumber_2 = 'ns=1;i=9650';

    public const StateNumber_3 = 'ns=1;i=9652';

    public const StateNumber_4 = 'ns=1;i=9654';

    public const StateNumber_5 = 'ns=1;i=9656';

    public const TransitionNumber = 'ns=1;i=9658';

    public const TransitionNumber_2 = 'ns=1;i=9660';

    public const TransitionNumber_3 = 'ns=1;i=9662';

    public const TransitionNumber_4 = 'ns=1;i=9664';

    public const TransitionNumber_5 = 'ns=1;i=9666';

    public const TransitionNumber_6 = 'ns=1;i=9668';

    public const TransitionNumber_7 = 'ns=1;i=9670';

    public const TransitionNumber_8 = 'ns=1;i=9672';

    public const TransitionNumber_9 = 'ns=1;i=9674';

    public const TransitionNumber_10 = 'ns=1;i=9676';

    public const ChannelId = 'ns=1;i=9712';

    public const IsEnabled_2 = 'ns=1;i=9715';

    public const DiagnosticStatus_2 = 'ns=1;i=9718';

    public const ActiveStream = 'ns=1;i=9721';

    public const InputArguments_10 = 'ns=1;i=9702';

    public const CurrentState_6 = 'ns=1;i=9729';

    public const Id_6 = 'ns=1;i=9730';

    public const CurrentState_7 = 'ns=1;i=9741';

    public const Id_7 = 'ns=1;i=9742';

    public const CurrentState_8 = 'ns=1;i=9753';

    public const Id_8 = 'ns=1;i=9754';

    public const IsHotSwappable_2 = 'ns=1;i=9918';

    public const IsEnabled_3 = 'ns=1;i=9919';

    public const CurrentState_9 = 'ns=1;i=9921';

    public const Id_9 = 'ns=1;i=9922';

    public const CurrentState_10 = 'ns=1;i=9949';

    public const Id_10 = 'ns=1;i=9950';

    public const CurrentState_11 = 'ns=1;i=9961';

    public const Id_11 = 'ns=1;i=9962';

    public const CurrentState_12 = 'ns=1;i=9973';

    public const Id_12 = 'ns=1;i=9974';

    public const CurrentState_13 = 'ns=1;i=9985';

    public const Id_13 = 'ns=1;i=9986';

    public const StateNumber_6 = 'ns=1;i=9997';

    public const StateNumber_7 = 'ns=1;i=9999';

    public const StateNumber_8 = 'ns=1;i=10001';

    public const StateNumber_9 = 'ns=1;i=10003';

    public const TransitionNumber_11 = 'ns=1;i=10005';

    public const TransitionNumber_12 = 'ns=1;i=10007';

    public const TransitionNumber_13 = 'ns=1;i=10009';

    public const TransitionNumber_14 = 'ns=1;i=10011';

    public const TransitionNumber_15 = 'ns=1;i=10013';

    public const TransitionNumber_16 = 'ns=1;i=10015';

    public const TransitionNumber_17 = 'ns=1;i=10017';

    public const TransitionNumber_18 = 'ns=1;i=10019';

    public const TransitionNumber_19 = 'ns=1;i=10021';

    public const TransitionNumber_20 = 'ns=1;i=10023';

    public const CurrentState_14 = 'ns=1;i=10037';

    public const Id_14 = 'ns=1;i=10038';

    public const StateNumber_10 = 'ns=1;i=10049';

    public const StateNumber_11 = 'ns=1;i=10051';

    public const StateNumber_12 = 'ns=1;i=10053';

    public const StateNumber_13 = 'ns=1;i=10055';

    public const StateNumber_14 = 'ns=1;i=10057';

    public const StateNumber_15 = 'ns=1;i=10059';

    public const StateNumber_16 = 'ns=1;i=10061';

    public const StateNumber_17 = 'ns=1;i=10063';

    public const StateNumber_18 = 'ns=1;i=10065';

    public const StateNumber_19 = 'ns=1;i=10067';

    public const StateNumber_20 = 'ns=1;i=10069';

    public const StateNumber_21 = 'ns=1;i=10071';

    public const StateNumber_22 = 'ns=1;i=10073';

    public const StateNumber_23 = 'ns=1;i=10075';

    public const StateNumber_24 = 'ns=1;i=10077';

    public const StateNumber_25 = 'ns=1;i=10079';

    public const StateNumber_26 = 'ns=1;i=10081';

    public const TransitionNumber_21 = 'ns=1;i=10083';

    public const TransitionNumber_22 = 'ns=1;i=10085';

    public const TransitionNumber_23 = 'ns=1;i=10087';

    public const TransitionNumber_24 = 'ns=1;i=10089';

    public const TransitionNumber_25 = 'ns=1;i=10091';

    public const TransitionNumber_26 = 'ns=1;i=10093';

    public const TransitionNumber_27 = 'ns=1;i=10095';

    public const TransitionNumber_28 = 'ns=1;i=10097';

    public const TransitionNumber_29 = 'ns=1;i=10099';

    public const TransitionNumber_30 = 'ns=1;i=10101';

    public const TransitionNumber_31 = 'ns=1;i=10103';

    public const TransitionNumber_32 = 'ns=1;i=10105';

    public const TransitionNumber_33 = 'ns=1;i=10107';

    public const TransitionNumber_34 = 'ns=1;i=10109';

    public const TransitionNumber_35 = 'ns=1;i=10111';

    public const TransitionNumber_36 = 'ns=1;i=10113';

    public const TransitionNumber_37 = 'ns=1;i=10115';

    public const TransitionNumber_38 = 'ns=1;i=10117';

    public const TransitionNumber_39 = 'ns=1;i=10119';

    public const TransitionNumber_40 = 'ns=1;i=10121';

    public const TransitionNumber_41 = 'ns=1;i=10123';

    public const TransitionNumber_42 = 'ns=1;i=10125';

    public const TransitionNumber_43 = 'ns=1;i=10127';

    public const TransitionNumber_44 = 'ns=1;i=10129';

    public const TransitionNumber_45 = 'ns=1;i=10131';

    public const TransitionNumber_46 = 'ns=1;i=10133';

    public const TransitionNumber_47 = 'ns=1;i=10135';

    public const TransitionNumber_48 = 'ns=1;i=10137';

    public const TransitionNumber_49 = 'ns=1;i=10139';

    public const TransitionNumber_50 = 'ns=1;i=10141';

    public const TransitionNumber_51 = 'ns=1;i=10143';

    public const TransitionNumber_52 = 'ns=1;i=10145';

    public const TransitionNumber_53 = 'ns=1;i=10147';

    public const TransitionNumber_54 = 'ns=1;i=10149';

    public const TransitionNumber_55 = 'ns=1;i=10151';

    public const TransitionNumber_56 = 'ns=1;i=10153';

    public const TransitionNumber_57 = 'ns=1;i=10155';

    public const TransitionNumber_58 = 'ns=1;i=10157';

    public const TransitionNumber_59 = 'ns=1;i=10159';

    public const TransitionNumber_60 = 'ns=1;i=10161';

    public const TransitionNumber_61 = 'ns=1;i=10163';

    public const TransitionNumber_62 = 'ns=1;i=10165';

    public const TransitionNumber_63 = 'ns=1;i=10167';

    public const TransitionNumber_64 = 'ns=1;i=10169';

    public const TransitionNumber_65 = 'ns=1;i=10171';

    public const TransitionNumber_66 = 'ns=1;i=10173';

    public const TransitionNumber_67 = 'ns=1;i=10175';

    public const TransitionNumber_68 = 'ns=1;i=10177';

    public const TransitionNumber_69 = 'ns=1;i=10179';

    public const TransitionNumber_70 = 'ns=1;i=10181';

    public const TransitionNumber_71 = 'ns=1;i=10183';

    public const TransitionNumber_72 = 'ns=1;i=10185';

    public const TransitionNumber_73 = 'ns=1;i=10187';

    public const TransitionNumber_74 = 'ns=1;i=10189';

    public const StateNumber_27 = 'ns=1;i=10202';

    public const StateNumber_28 = 'ns=1;i=10204';

    public const StateNumber_29 = 'ns=1;i=10206';

    public const StateNumber_30 = 'ns=1;i=10208';

    public const StateNumber_31 = 'ns=1;i=10210';

    public const StateNumber_32 = 'ns=1;i=10212';

    public const StateNumber_33 = 'ns=1;i=10214';

    public const StateNumber_34 = 'ns=1;i=10216';

    public const StateNumber_35 = 'ns=1;i=10218';

    public const StateNumber_36 = 'ns=1;i=10220';

    public const StateNumber_37 = 'ns=1;i=10222';

    public const StateNumber_38 = 'ns=1;i=10224';

    public const StateNumber_39 = 'ns=1;i=10226';

    public const StateNumber_40 = 'ns=1;i=10228';

    public const StateNumber_41 = 'ns=1;i=10230';

    public const StateNumber_42 = 'ns=1;i=10232';

    public const StateNumber_43 = 'ns=1;i=10234';

    public const StateNumber_44 = 'ns=1;i=10236';

    public const StateNumber_45 = 'ns=1;i=10238';

    public const StateNumber_46 = 'ns=1;i=10240';

    public const TransitionNumber_75 = 'ns=1;i=10242';

    public const TransitionNumber_76 = 'ns=1;i=10244';

    public const TransitionNumber_77 = 'ns=1;i=10246';

    public const TransitionNumber_78 = 'ns=1;i=10248';

    public const TransitionNumber_79 = 'ns=1;i=10250';

    public const TransitionNumber_80 = 'ns=1;i=10252';

    public const TransitionNumber_81 = 'ns=1;i=10254';

    public const TransitionNumber_82 = 'ns=1;i=10256';

    public const TransitionNumber_83 = 'ns=1;i=10258';

    public const TransitionNumber_84 = 'ns=1;i=10260';

    public const TransitionNumber_85 = 'ns=1;i=10262';

    public const TransitionNumber_86 = 'ns=1;i=10264';

    public const TransitionNumber_87 = 'ns=1;i=10266';

    public const TransitionNumber_88 = 'ns=1;i=10268';

    public const TransitionNumber_89 = 'ns=1;i=10270';

    public const TransitionNumber_90 = 'ns=1;i=10272';

    public const TransitionNumber_91 = 'ns=1;i=10274';

    public const TransitionNumber_92 = 'ns=1;i=10276';

    public const TransitionNumber_93 = 'ns=1;i=10278';

    public const TransitionNumber_94 = 'ns=1;i=10280';

    public const TransitionNumber_95 = 'ns=1;i=10282';

    public const TransitionNumber_96 = 'ns=1;i=10284';

    public const TransitionNumber_97 = 'ns=1;i=10286';

    public const TransitionNumber_98 = 'ns=1;i=10288';

    public const TransitionNumber_99 = 'ns=1;i=10290';

    public const TransitionNumber_100 = 'ns=1;i=10292';

    public const TransitionNumber_101 = 'ns=1;i=10294';

    public const TransitionNumber_102 = 'ns=1;i=10296';

    public const TransitionNumber_103 = 'ns=1;i=10298';

    public const TransitionNumber_104 = 'ns=1;i=10300';

    public const TransitionNumber_105 = 'ns=1;i=10302';

    public const TransitionNumber_106 = 'ns=1;i=10304';

    public const TransitionNumber_107 = 'ns=1;i=10306';

    public const TransitionNumber_108 = 'ns=1;i=10308';

    public const TransitionNumber_109 = 'ns=1;i=10310';

    public const TransitionNumber_110 = 'ns=1;i=10312';

    public const TransitionNumber_111 = 'ns=1;i=10314';

    public const TransitionNumber_112 = 'ns=1;i=10316';

    public const IsEnabled_4 = 'ns=1;i=10339';

    public const IsForced = 'ns=1;i=10342';

    public const DiagnosticStatus_3 = 'ns=1;i=10345';

    public const LastCalibrationTime = 'ns=1;i=10348';

    public const LastValidationTime = 'ns=1;i=10351';

    public const LastSampleTime = 'ns=1;i=10354';

    public const TimeBetweenSamples = 'ns=1;i=10357';

    public const EURange = 'ns=1;i=10361';

    public const IsActive = 'ns=1;i=10363';

    public const ExecutionCycle = 'ns=1;i=10366';

    public const ExecutionCycleSubcode = 'ns=1;i=10369';

    public const EnumStrings = 'ns=1;i=10372';

    public const Progress = 'ns=1;i=10373';

    public const AcquisitionCounter = 'ns=1;i=10376';

    public const EURange_2 = 'ns=1;i=10380';

    public const AcquisitionResultStatus = 'ns=1;i=10382';

    public const RawData = 'ns=1;i=10385';

    public const ScaledData = 'ns=1;i=10388';

    public const Offset = 'ns=1;i=10391';

    public const AcquisitionEndTime = 'ns=1;i=10394';

    public const CampaignId = 'ns=1;i=10397';

    public const BatchId = 'ns=1;i=10400';

    public const SubBatchId = 'ns=1;i=10403';

    public const LotId = 'ns=1;i=10406';

    public const MaterialId = 'ns=1;i=10409';

    public const Process = 'ns=1;i=10412';

    public const Unit = 'ns=1;i=10415';

    public const Operation = 'ns=1;i=10418';

    public const Phase = 'ns=1;i=10421';

    public const UserId = 'ns=1;i=10424';

    public const SampleId = 'ns=1;i=10427';

    public const ActiveBackground = 'ns=1;i=10575';

    public const EURange_3 = 'ns=1;i=10579';

    public const EngineeringUnits = 'ns=1;i=10580';

    public const Title = 'ns=1;i=10581';

    public const AxisScaleType = 'ns=1;i=10582';

    public const XAxisDefinition = 'ns=1;i=10583';

    public const ActiveBackground1 = 'ns=1;i=10584';

    public const EURange_4 = 'ns=1;i=10588';

    public const EngineeringUnits_2 = 'ns=1;i=10589';

    public const Title_2 = 'ns=1;i=10590';

    public const AxisScaleType_2 = 'ns=1;i=10591';

    public const XAxisDefinition_2 = 'ns=1;i=10592';

    public const SpectralRange = 'ns=1;i=10593';

    public const Resolution = 'ns=1;i=10596';

    public const RequestedNumberOfScans = 'ns=1;i=10599';

    public const Gain = 'ns=1;i=10602';

    public const TransmittanceCutoff = 'ns=1;i=10605';

    public const AbsorbanceCutoff = 'ns=1;i=10608';

    public const NumberOfScansDone = 'ns=1;i=10611';

    public const TotalNumberOfScansDone = 'ns=1;i=10614';

    public const BackgroundAcquisitionTime = 'ns=1;i=10617';

    public const PendingBackground = 'ns=1;i=10620';

    public const EURange_5 = 'ns=1;i=10624';

    public const EngineeringUnits_3 = 'ns=1;i=10625';

    public const Title_3 = 'ns=1;i=10626';

    public const AxisScaleType_3 = 'ns=1;i=10627';

    public const XAxisDefinition_3 = 'ns=1;i=10628';

    public const PendingBackground1 = 'ns=1;i=10629';

    public const EURange_6 = 'ns=1;i=10633';

    public const EngineeringUnits_4 = 'ns=1;i=10634';

    public const Title_4 = 'ns=1;i=10635';

    public const AxisScaleType_4 = 'ns=1;i=10636';

    public const XAxisDefinition_4 = 'ns=1;i=10637';

    public const Background = 'ns=1;i=10897';

    public const EURange_7 = 'ns=1;i=10901';

    public const EngineeringUnits_5 = 'ns=1;i=10902';

    public const Title_5 = 'ns=1;i=10903';

    public const AxisScaleType_5 = 'ns=1;i=10904';

    public const XAxisDefinition_5 = 'ns=1;i=10905';

    public const SizeDistribution = 'ns=1;i=10906';

    public const EURange_8 = 'ns=1;i=10910';

    public const EngineeringUnits_6 = 'ns=1;i=10911';

    public const Title_6 = 'ns=1;i=10912';

    public const AxisScaleType_6 = 'ns=1;i=10913';

    public const XAxisDefinition_6 = 'ns=1;i=10914';

    public const BackgroundAcquisitionTime_2 = 'ns=1;i=10915';

    public const SpectralRange_2 = 'ns=1;i=11551';

    public const IsHotSwappable_3 = 'ns=1;i=12786';

    public const IsEnabled_5 = 'ns=1;i=12787';

    public const CurrentState_15 = 'ns=1;i=12789';

    public const Id_15 = 'ns=1;i=12790';

    public const IsHotSwappable_4 = 'ns=1;i=12827';

    public const IsReady = 'ns=1;i=12828';

    public const StateNumber_47 = 'ns=1;i=12841';

    public const StateNumber_48 = 'ns=1;i=12843';

    public const StateNumber_49 = 'ns=1;i=12845';

    public const StateNumber_50 = 'ns=1;i=12847';

    public const StateNumber_51 = 'ns=1;i=12849';

    public const StateNumber_52 = 'ns=1;i=12851';

    public const TransitionNumber_113 = 'ns=1;i=12853';

    public const TransitionNumber_114 = 'ns=1;i=12855';

    public const TransitionNumber_115 = 'ns=1;i=12857';

    public const TransitionNumber_116 = 'ns=1;i=12859';

    public const TransitionNumber_117 = 'ns=1;i=12861';

    public const TransitionNumber_118 = 'ns=1;i=12863';

    public const TransitionNumber_119 = 'ns=1;i=12865';

    public const TransitionNumber_120 = 'ns=1;i=12867';

    public const TransitionNumber_121 = 'ns=1;i=12869';

    public const TransitionNumber_122 = 'ns=1;i=12871';

    public const TransitionNumber_123 = 'ns=1;i=12873';

    public const TransitionNumber_124 = 'ns=1;i=12875';

    public const IsHotSwappable_5 = 'ns=1;i=12904';

    public const IsReady_2 = 'ns=1;i=12905';

    public const EnumValues = 'ns=1;i=13026';

    public const EnumStrings_2 = 'ns=1;i=13027';

    public const _Identifier_ = 'ns=1;i=13030';

    public const Name = 'ns=1;i=13033';

    public const CreationDate = 'ns=1;i=13034';

    public const ModelDescription = 'ns=1;i=13035';

    public const _User_defined_Input__ = 'ns=1;i=13036';

    public const _User_defined_Output__ = 'ns=1;i=13037';

    public const _Source_ = 'ns=1;i=13040';

    public const _User_defined_Output___2 = 'ns=1;i=13045';

    public const AlarmState = 'ns=1;i=13049';

    public const MainDataIndex = 'ns=1;i=13046';

    public const WarningLimits = 'ns=1;i=13054';

    public const AlarmLimits = 'ns=1;i=13055';

    public const AlarmState_2 = 'ns=1;i=13056';

    public const VendorSpecificError = 'ns=1;i=13057';

    public const Statistics = 'ns=1;i=13058';

    public const WarningLimits_2 = 'ns=1;i=13059';

    public const AlarmLimits_2 = 'ns=1;i=13060';

    public const AlarmState_3 = 'ns=1;i=13061';

    public const VendorSpecificError_2 = 'ns=1;i=13062';

    public const EnumValues_2 = 'ns=1;i=13063';

    public const Opc_Ua_Adi = 'ns=1;i=13067';

    public const NamespaceUri_2 = 'ns=1;i=13069';

    public const Deprecated = 'ns=1;i=8001';

    public const Opc_Ua_Adi_2 = 'ns=1;i=13064';

    public const NamespaceUri_3 = 'ns=1;i=13066';

    public const Deprecated_2 = 'ns=1;i=8003';

    public const Open = 'ns=1;i=9467';

    public const Close = 'ns=1;i=9470';

    public const Read = 'ns=1;i=9472';

    public const Write = 'ns=1;i=9475';

    public const GetPosition = 'ns=1;i=9477';

    public const SetPosition = 'ns=1;i=9480';

    public const GetConfiguration = 'ns=1;i=9443';

    public const SetConfiguration = 'ns=1;i=9445';

    public const GetConfigDataDigest = 'ns=1;i=9448';

    public const CompareConfigDataDigest = 'ns=1;i=9450';

    public const ResetAllChannels = 'ns=1;i=9453';

    public const StartAllChannels = 'ns=1;i=9454';

    public const StopAllChannels = 'ns=1;i=9455';

    public const AbortAllChannels = 'ns=1;i=9456';

    public const GotoOperating = 'ns=1;i=9457';

    public const GotoMaintenance = 'ns=1;i=9458';

    public const GotoOperating_2 = 'ns=1;i=9521';

    public const GotoMaintenance_2 = 'ns=1;i=9522';

    public const StartSingleAcquisition = 'ns=1;i=9523';

    public const Reset = 'ns=1;i=9525';

    public const Start = 'ns=1;i=9526';

    public const Stop = 'ns=1;i=9527';

    public const Hold = 'ns=1;i=9528';

    public const Unhold = 'ns=1;i=9529';

    public const Suspend = 'ns=1;i=9530';

    public const Unsuspend = 'ns=1;i=9531';

    public const Abort = 'ns=1;i=9532';

    public const Clear = 'ns=1;i=9533';

    public const GotoOperating_3 = 'ns=1;i=9699';

    public const GotoMaintenance_3 = 'ns=1;i=9700';

    public const StartSingleAcquisition_2 = 'ns=1;i=9701';

    public const Reset_2 = 'ns=1;i=9703';

    public const Start_2 = 'ns=1;i=9704';

    public const Stop_2 = 'ns=1;i=9705';

    public const Hold_2 = 'ns=1;i=9706';

    public const Unhold_2 = 'ns=1;i=9707';

    public const Suspend_2 = 'ns=1;i=9708';

    public const Unsuspend_2 = 'ns=1;i=9709';

    public const Abort_2 = 'ns=1;i=9710';

    public const Clear_2 = 'ns=1;i=9711';

    public const AnalyserDeviceType = 'ns=1;i=1001';

    public const AnalyserDeviceStateMachineType = 'ns=1;i=1002';

    public const AnalyserChannelType = 'ns=1;i=1003';

    public const AnalyserChannelOperatingStateType = 'ns=1;i=1004';

    public const AnalyserChannelLocalStateType = 'ns=1;i=1005';

    public const AnalyserChannelMaintenanceStateType = 'ns=1;i=1006';

    public const AnalyserChannelStateMachineType = 'ns=1;i=1007';

    public const AnalyserChannelOperatingExecuteStateType = 'ns=1;i=8964';

    public const AnalyserChannel_OperatingModeSubStateMachineType = 'ns=1;i=1008';

    public const AnalyserChannel_OperatingModeExecuteSubStateMachineType = 'ns=1;i=1009';

    public const StreamType = 'ns=1;i=1010';

    public const SpectrometerDeviceStreamType = 'ns=1;i=1030';

    public const MassSpectrometerDeviceStreamType = 'ns=1;i=1031';

    public const ParticleSizeMonitorDeviceStreamType = 'ns=1;i=1032';

    public const AcousticSpectrometerDeviceStreamType = 'ns=1;i=1033';

    public const ChromatographDeviceStreamType = 'ns=1;i=1034';

    public const MNRDeviceStreamType = 'ns=1;i=1035';

    public const SpectrometerDeviceType = 'ns=1;i=1011';

    public const ParticleSizeMonitorDeviceType = 'ns=1;i=1012';

    public const ChromatographDeviceType = 'ns=1;i=1013';

    public const MassSpectrometerDeviceType = 'ns=1;i=1014';

    public const AcousticSpectrometerDeviceType = 'ns=1;i=1015';

    public const NMRDeviceType = 'ns=1;i=1016';

    public const AccessorySlotType = 'ns=1;i=1017';

    public const AccessorySlotStateMachineType = 'ns=1;i=1018';

    public const AccessoryType = 'ns=1;i=1019';

    public const DetectorType = 'ns=1;i=9350';

    public const SmartSamplingSystemType = 'ns=1;i=9359';

    public const SourceType = 'ns=1;i=9368';

    public const GcOvenType = 'ns=1;i=1020';

    public const EngineeringValueType = 'ns=1;i=9380';

    public const ChemometricModelType = 'ns=1;i=2007';

    public const ProcessVariableType = 'ns=1;i=2008';

    public const MVAModelType = 'ns=1;i=2009';

    public const MVAOutputParameterType = 'ns=1;i=2010';

    public const HasDataSource = 'ns=1;i=4001';

    public const HasInput = 'ns=1;i=4002';

    public const HasOutput = 'ns=1;i=4003';

    public const ExecutionCycleEnumeration = 'ns=1;i=9378';

    public const AcquisitionResultStatusEnumeration = 'ns=1;i=3003';

    public const AlarmStateEnumeration = 'ns=1;i=3009';
}
