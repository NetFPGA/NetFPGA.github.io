---
layout: content
title: NetFPGA 10G Information
---
# NetFPGA-10G Information
<br/>

## Release Note - March 15th, 2012
<br/>

We are proud to announce the Beta program is now open for the 4x10GE version of NetFPGA: The NetFPGA-10G!
<br/>

The Beta programme is open and once you have registered, as explained on the [Going Beta](10G_going_beta.html) page, you will be able to download the code base as a git repository from the [NetFPGA GitHub](https://github.com/NetFPGA) site.
<br/>

## Hardware
<br/>

The NetFPGA-10G board was designed by the NetFPGA team and is available from [HTG](http://www.hitechglobal.com/Boards/PCIExpress_SFP+.htm). It has 4 x 10GigE SFP+ interfaces, a PCI Express interface to the host (Gen2 x8 channels), and a Xilinx Virtex-5 TX240T FPGA. The board has SRAM and DRAM (27 MBytes QDRII SRAM, 288 MBytes RLDRAM-II) and a high bandwidth expansion connector for daughter-cards. Further technical details on the board, along with purchasing information, can be found at HTG's website [here](http://www.hitechglobal.com/Boards/PCIExpress_SFP+.htm). You can see a photo of the board at [NetFPGA.org](http://netfpga.org/) or below.
<br/>

## **Price**:
<br/>

The Academic price is $1,675.
<br/>

## **Code Base**:
<br/>

This first release comes with a modest (but steadily growing) code base of hardware and software to get you started. The design flow is based on [EDK](http://www.xilinx.com/tools/embedded.htm) and [AXI](http://www.arm.com/products/system-ip/amba/amba-open-specifications.php). Once you have registered on [github](https://github.com/login) and [NetFPGA-live](10G_going_beta.html) successfully, you will have access to all platform documentation at [NetFPGA-10G Github wiki](https://github.com/NetFPGA/NetFPGA-public/wiki) and [Getting-Started-Guide](https://github.com/NetFPGA/NetFPGA-public/wiki/Getting-Started-Guide). The latter explains how to download the code base as either a tarball or a git repository from the NetFPGA GitHub site. Please make sure you are logged into [github](https://github.com/login) to access [NetFPGA-10G Github wiki](https://github.com/NetFPGA/NetFPGA-public/wiki) and [Getting-Started-Guide](https://github.com/NetFPGA/NetFPGA-public/wiki/Getting-Started-Guide) else you will get a 404 error from github. 
<br/>
We hope you enjoy the new platform and we look forward to your feedback, comments, and discussion on the mailing list. It is a pleasure and honor to work with the whole NetFPGA community, and we look forward to working with you in 2012. Together, let's develop great new open-source networking hardware! Let's enable great teaching and research in networking hardware! We will update you as we prepare for major new releases of the code base in the coming months. Stay tuned!
<br/>
Hardware Features

  * Xilinx Virtex-5 XC5VTX240TFFG1759 -2
  * Four SFP+ interface (using 16 RocketIO GTX transceivers and 4 PHY devices)
  * Supports both 10Gbps and 1Gbps modes
  * X8 PCI Express Gen 2 (5Gbps/lane)
  * Twenty Configurable GTX Serial Transceivers (available through two high-speed Samtec connectors)
  * Three x36 QDR II (CY7C1515KV18)
  * Four x32 RLDRAM II (MT49H16M36BM-25)
  * Mictor Connector for debugging
  * Two Platform XL Flash (128mb each)
  * One Xilinx XC2C256 CPLD
  * One DB9 (RS232)
  * User LEDs & Push Buttons
  * 9.5" x 4.25" board size

## Hardware

<img src="http://www.cl.cam.ac.uk/research/srg/netos/netfpga/pics/NetFPGA10G_front_b.jpg" width="90%" />

## FPGA Design
<br/>
The current NetFPGA infrastructure release comes with reference designs that operate the NetFPGA-10G as a NIC in 1G or 10G mode with all 4 ports active. In addition, the release provides the basic building blocks of all future designs, including and PCIe endpoint with DMA, as well as software. A board self-test suite is also included.
<br/>
## More Information
<br/>
For more information, visit NetFPGA website for the latest update - [http://www.netfpga.org](http://www.netfpga.org/), or if you haven't already, sign up to netfpga-announce mailing list [https://mailman.stanford.edu/mailman/listinfo/netfpga-announce](https://mailman.stanford.edu/mailman/listinfo/netfpga-announce)
<br/>
## Core Developers
<br/>
The core developers page has moved; check you email for details.
