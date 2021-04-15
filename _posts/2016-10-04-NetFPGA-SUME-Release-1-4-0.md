---
title: NetFPGA SUME Release 1.4.0
date: 2016-10-04
category: news
---

Greetings NetFPGA community,

We are pleased to announce today that the next minor update (1.4.0) of the NetFPGA-SUME code base.

The release includes:

Contributed Projects:
- [Reference NIC-NFMAC10G](https://github.com/forconesi/nfmac10g#nfmac10g-open-source-10gbe-mac-for-fpgas): Implementation of the reference_nic based on the open-source 10GbE MAC
- [delay_mb](https://github.com/NetFPGA/NetFPGA-SUME-public/wiki/Latency-Gadget:-delay_mb-Contrib-Project): A latency control gadget that provides latency variation and rate control
- [reference_eu](https://github.com/NetFPGA/NetFPGA-SUME-public/wiki/Reference_emu-Contrib-Project): Includes 3 designs written in C# and translated to Verilog, making use of the [Kiwi Compiler](http://www.cl.cam.ac.uk/research/srg/han/hprls/orangepath/kiwic.html)

<br>

Contributed Cores:
- [nfmac_10ge_interface_shared_v1_0_0](https://github.com/forconesi/nfmac10g#nfmac10g-open-source-10gbe-mac-for-fpgas): Open-source version of the Xilinx ten_gig_eth_mac
- [nfmac_10ge_interface_v1_0_0](https://github.com/forconesi/nfmac10g#nfmac10g-open-source-10gbe-mac-for-fpgas): Open-source version of the Xilinx ten_gig_eth_mac
- [delay_v1_0_0](https://github.com/NetFPGA/NetFPGA-SUME-public/wiki/Delay-Contrib-Core): FIFO-based module that control latency based on timestamps
- [rate_limiter_v1_0_0](https://github.com/NetFPGA/NetFPGA-SUME-public/wiki/Rate-Limiter-Contrib-Core): FIFO-based module for pacing of data out of the FIFO
- [emu_output_port_lookup_v1_0_0](https://github.com/NetFPGA/NetFPGA-SUME-public/wiki/Reference_emu-Contrib-Project): Output Port Lookup module that supports the reference_emu project

<br>
{% include Update-close.md %}
