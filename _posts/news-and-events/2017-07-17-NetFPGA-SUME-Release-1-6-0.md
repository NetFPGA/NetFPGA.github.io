---
title: NetFPGA SUME Release 1.6.0
date: 2017-07-13
eventdate: 2017-07-13
eoldate: 2019-07-13
category: news
posttype: news-and-events
---

Greetings NetFPGA community,

We are pleased to announce today the next minor release (**1.6.0**) of the NetFPGA-SUME code base.

This release includes:

**Updates:**
- Xilinx Core
  - cam_v1_1_0 : Change CAM type to BRAM to improve timing
- Projects
  - reference_nic : Migrate to Vivado v2016.4
  - reference_switch : Migrate to Vivado v2016.4
  - reference_switch_lite : Migrate to Vivado v2016.4
  - reference_router : Migrate to Vivado v2016.4
  - acceptance_test : Migrate to Vivado v2016.4

<br>
**Bug Fix**
- switch_output_port_lookup_v1_0_1 : Fix tuser signal handling
- output_queues_v1_0_0 : Fix output queues handling of tuser
- cam_v1_1_0 : Fix ternary mode

<br>
**Contrib Projects:**
- encap_decap : encap/decap VLAN tag
- reference_switch_lcam : reference_switch with large CAM

<br>
**Contrib Cores:**
- vlan_adder_v1_0_0 : used in encap_decap contrib-project
- vlan_remover_v1_0_0 : used in encap_decap contrib-project
- nic_output_port_lookup_v4_0_0 : used in encap_decap contrib-project
- lcam_output_port_lookup_v1_0_0 : used in reference_switch_lcam contrib-project

<br>
**Limitations**

All the reference projects work, without any issue, in hosts with 64GB of memory, with Vivado v2016.4.

{% include Update-close.md %}
