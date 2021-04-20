---
title: NetFPGA Newsletter June 2015
date: 2015-06-15
category: news
---

NetFPGA Newsletter June 2015

-=-=-

Hi and welcome to the latest slightly irregular NetFPGA Newsletter

1. Contributions
2. SUME news
3. SUME release
4. Tutorials and Workshops
5. NetFPGA plans

-=-=-

### 1. Contributions

We keenly encourage the NetFPGA community to contribute their projects for others - projects any boards (SUME, CML, 10G, 1G) are solicited.

-=-=- Have a project to contribute? email me -=-=-

### 2. SUME news

We have had some questions about changes to the NetFPGA SUME pricing and how best to order boards.

First of all, some brief background. NetFPGA SUME has a fantastic problem - it is an extremely popular board! This has led to its purchase (at the specially-discounted XUP price of 1,675 USD) by some people who are members of the XUP community but not contributors to the NetFPGA community. Xilinx, Digilent and the NetFPGA team have made the following changes to ensure that a sufficient supply of these specially-discounted boards is available to the members of the NetFPGA community.

The new price NetFPGA SUME for non-academic users is now 9,750 USD. The price for academic users who are not contributing to the NetFPGA community is 4,995 USD. The special price of 1,675 USD for contributors to the NetFPGA community is preserved. To ensure that there are sufficient boards at the specially-discounted for NetFPGA community members, we have the following guidance:

'...

The specially discounted NetFPGA SUME boards are reserved for projects that contribute significantly to the open-source goals of the NetFPGA project.

To apply for the discounted rate, please submit a brief abstract of your Digilent using the link: https://netfpga.wufoo.com/forms/netfpga-special-pricing-request/

State clearly how your work contributes to the NetFPGA community. The requests will be evaluated by experts from both Xilinx and the NetFPGA team. Successful applicants will be advised by Digilent how to order their boards at the discounted prices.

...'

The intent of this arrangement is to prioritize access to the specially-discounted NetFPGA SUME boards for the active, contributing members of the NetFPGA community. All other academic groups will still be able to purchase the NetFPGA SUME boards at the higher, (but still heavily subsidized), price of 4,995 USD.

We hope that these arrangements will ensure a steady supply of NetFPGA SUME boards to the networking community.

For those that have had confusing messages from their local Digilent distributors, we encourage you to let Digilent at sales@digilentinc.com know the details as some distributors are operating with old information

-=-=-

### 3. SUME release

We are planning for SUME release 1.0 at the end of the week (26th of June).

This release will include

- An acceptance test for you to run to ensure your board is in good health.

The acceptance test was designed to test new boards in a standard operating mode, and it enables testing the major interfaces without special test fixtures.

- Following the acceptance test release, we will start to regularly release SUME reference projects, starting with the reference NIC.

This project is the first of our reference projects and as well as the corse to construct a reference NIC bitfile, it will include linux device drivers, and various support scripts. The reference NIC in this version uses the popular RIFFA DMA engine which is capable of PCI-e gen2 http://rffa.ucsd.edu

All the NetFPGA SUME projects are using Xilinx's Vivado tool-chain and a tcl-based design flow.

- Simulation test environment

- Hardware test environment

For those wanting other reference projects - we have not forgotten you, we are simply running to catchup on this new board and once we have version 1.0 we will look to the future releases that will include

- Reference IPv4 Router
- Reference Ethernet Switch

and perhaps most exciting

- Reference Multi-table OpenFlow switch - compatible with 1.4

We are also working hard to have an open-source DMA engine that will perform as well as the hardware can offer - a labour of love - we will provide updates as we have them.

Look for announcements on the SUME mailing list.

-=-=- Want to be a contributor not just a consumer? email me -=-=-

### 4. Tutorials and Workshops

Here are upcoming tutorials and workshops currently in out calendar.

Courses are delivered in English unless otherwise noted.

Date: August 2-6, 2015 <br>
Location: Technion, Haifa, Israel <br>
Type: One-week hands-on course <br>
Hardware: NetFPGA-SUME <br>
URL: http://www.cl.cam.ac.uk/research/srg/netos/netfpga/workshop/technion-august-2015/

Date: August 17, Morning session. <br>
SIGCOMM 2015, London, Imperial College <br>
Type: Half-day tutorial on Open Source Hardware including NetFPGA and OSNT <br>
Hardware: NetFPGA-SUME <br>
URL: http://conferences.sigcomm.org/sigcomm/2015/tutorial-ohwn.php

Date: August 31, Time TBA <br>
FPL 2015, London, Imperial College <br>
Type: Half-day NetFPGA tutorial <br>
Hardware: NetFPGA_SUME <br>
URL: TBA

If you wish to consider offering a course do get in contact.

-=-=- Want to advertise your NetFPGA course? Want to contribute teaching material? Want to run a NetFPGA course? email me -=-=-

### 5. NetFPGA Plans

I would like to give you some insight into our plans for NetFPGA going forward.

Our current status is this:

NetFPGA-SUME is our top-speed board and it will have the first bundle of software released for it in the coming week. Can you help us port and test interesting projects in the coming months?

NetFPGA-CML has replaced the NetFPGA-1G and is provided with the support of CML. This board supports users who want to build systems based on the reference projects with a limit to 1G Ethernet UTP cabling and 4 x 1Gb/s data rates. Additional facilities, including a CryptAuthentication chip and real-time clock are also part of the CML board.

NetFPGA-10G has been out venerable Virtex-5 workhorse and while projects will still be developed for this board at the end of 2015 we will look to move this board to join NetFGPGA-1G as being supported by the community. To make this happen we want community members to step forward who are willing to work alongside our development team, accepting patches as required and ensuring the 10G board questions get answered. Nothing arduous but this is a community board with community support. With volunteer help we expect to formally we expect to formally move the mailing list into the forums as we find these provide the best method for the community to support itself.

NetFPGA-1G is no longer available for purchase but continues to be supported by the community. If you want to volunteer to answer questions on NetFPGA-1G and to shepherd the forums - email me.

-=-=- Want to volunteer as a community-leader? email me -=-=-

Best wishes, <br>
Andrew. <br>
(temporary) editor of the NetFPGA newletter

-=-=- Want to edit the NetFPGA newsletter? email me. -=-=-
