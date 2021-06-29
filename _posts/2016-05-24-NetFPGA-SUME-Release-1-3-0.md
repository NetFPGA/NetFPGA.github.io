---
title: NetFPGA SUME Release 1.3.0
date: 2016-05-24
eventdate: 2016-05-24
category: news
---

Greetings NetFPGA community,

We are pleased to announce today the next minor release (1.3.0) of the NetFPGA-SUME code base.

The release includes:

Projects:
- Reference Router

Contributed Projects:
- Blue Switch

Cores:
- router_output_port_lookup_v1_0_0: Implementation of IPv4 -- [wiki page](https://github.com/NetFPGA/NetFPGA-SUME-public/wiki/NetFPGA-SUME-Reference-Router)

Contributed Cores:
- nf_endianess_manager_v1_0_0: Data conversion between Little <-> Big endianess
- nf_sume_blueswitch_v1_0_0: Switch implementing multi-table, compliant with OpenFlow protocol -- [wiki page](https://github.com/NetFPGA/NetFPGA-SUME-public/wiki/NetFPGA-SUME-Blueswitch---Contrib-Project)
- nf_sume_crossbar_v1_0_0: Part of the BlueSwitch Project -- [wiki page](https://github.com/NetFPGA/NetFPGA-SUME-public/wiki/NetFPGA-SUME-Blueswitch---Contrib-Project)

Tools:
- Registers generation infrastructure: Updated version 2, support of indirect register access -- [wiki page](https://github.com/NetFPGA/NetFPGA-SUME-public/wiki/Registers-Infrastrcture')

Patch:
- switch_output_port_v1_0_1:
  - Fix a typo in cam instantiation
  - Update the implementation run, to more aggressive timing closure mode
  - Add new CAM parameters (ADDR_TYPE, MATCH_ADDR_WIDTH)
- xparam2regdefines.py: Fix bug which produced multiple hashes

Xilinx cores:
- cam_v1_1_0/tcam_v1_1_0: Add new CAM parameters in the wrappers to support the ADDR_TYPE and MATCH_ADDR_WIDTH

<br>
{% include Update-close.md %}
