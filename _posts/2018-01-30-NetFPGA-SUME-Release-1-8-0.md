---
title: NetFPGA SUME Release 1.8.0
date: 2018-01-30
eventdate: 2018-01-30
eoldate: 2020-01-30
category: news
---

Greetings NetFPGA community,

We are pleased to announce today the next patch release (**1.8.0**) of the NetFPGA-SUME code base.

This release includes:

**Fix for manual test via uart not working:**
- Using UART to run manual test did not work previously for reference_switch and reference_switch_lite. This has been fixed

<br>
**Fix for acceptance test crash in headless mode:**
- NfSumeTest.py is run during acceptance test. This script assumed the presence of a display which caused a crash. The fix now allows the script to be run without a display.

<br>
**New contribution - script to generate the regs_gen.py file:**
- The new file csv_gen.py can be used instead of running the excel macro inside module_generation.xlsm.

<br>
{% include Update-close.md %}
