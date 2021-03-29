---
title: NetFPGA SUME Release 1.5.0
date: 2016-12-13
category: news
---

Greetings NetFPGA community,

We are pleased to announce today the next minor (1.5.0) of the NetFPGA-SUME code base.

The release includes:

Updates:
- nf_10ge_attachment_v1_0_0 : Fix the state machine conditions in tx and rx queue modules to revolve the interface stall issues. Fix the reset signal connection in tx and rx queue modules.

<br>
Bug Fix:
- reference_switch_lite: Fix the reset signal which caused negative slack in the reference_switch_lite bitfile
- axitools.py : Fix a typo, an undefined variable was crashing the script

<br>
{% include Update-close.md %}
