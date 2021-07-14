---
title: NetFPGA SUME Release 1.10.0
date: 2020-10-02
eventdate: 2020-10-02
eoldate: 2022-10-02
category: news
posttype: news-and-events
---


Greetings NetFPGA community,
We are pleased to announce today the next release (**1.10.0**) of the NetFPGA-SUME code base.
This release includes:

**Reference projects:**


-  all reference projects and reference cores have been migrated to Vivado 2020.1, Ubuntu 2020.4 LTS and Python 3,
-  new standard core: nic_output_queues - this core is based on the output queue ip core and enables a backpressure to the output port lookup,
-  fix in 10g attachment unit core in TX queue: this enables more efficient version of TX queue and allows to handle deficit idle count (fix from P4-NetFPGA project),
-  reference_nic project has a backpressure enabled in the output queues.

<br>
**Contrib Projects:**

-  corundum: ports of verilog-pcie, verilog-ehternet, and corundum projects to NetFPGA SUME board.

<br>
**Driver:**

-  new SUME riffa driver for FreeBSD.

<br>
{% include Update-close.md %}
