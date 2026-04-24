---
eyebrow: 'Docs · Spec · Scheduler'
lede:    'Job and Production Scheduling — production-order assignment, time-slot allocation, dispatch. Three enums, 11 typed structures. No upstream dependency.'

see_also:
  - { href: '../specifications.md', meta: '5 min' }
  - { href: 'https://github.com/OPCFoundation/UA-Nodeset/tree/latest/Scheduler', meta: 'external', label: 'UA-Nodeset · Scheduler' }

prev: { label: 'Scales',  href: './scales.md' }
next: { label: 'Sercos',  href: './sercos.md' }
---

# Scheduler

OPC UA companion specification for job and production scheduling
— assigning production orders to equipment time-slots,
dispatching jobs, reporting completion. Sits at the MES layer in
ISA-95 hierarchy.

## What's in the package

| Artefact     | Count |
| ------------ | ----- |
| Enums        | 3     |
| DTOs         | 11    |
| Codecs       | 11    |
| Registrars   | 1 (`SchedulerRegistrar`) |

DTO-rich — scheduling records carry a lot of structured payload.

## Loading

<!-- @code-block language="php" label="examples/scheduler/load.php" -->
```php
use PhpOpcua\Client\ClientBuilder;
use PhpOpcua\Nodeset\Scheduler\SchedulerRegistrar;

$client = ClientBuilder::create()
    ->loadGeneratedTypes(new SchedulerRegistrar())
    ->connect('opc.tcp://scheduler.local:4840');
```
<!-- @endcode-block -->

## Direct dependencies

None — Scheduler is a root spec.

## Notable types

The 11 DTOs cover:

- **Job descriptors** — job id, recipe reference, priority,
  deadline, material requirements
- **Schedule entries** — time-slot allocations, equipment
  assignments, dependency relationships
- **Execution records** — actual vs planned start/end, completion
  status, KPIs

## Notable enums

- Job state (queued, running, paused, completed, aborted)
- Schedule conflict resolution policy
- Priority class
