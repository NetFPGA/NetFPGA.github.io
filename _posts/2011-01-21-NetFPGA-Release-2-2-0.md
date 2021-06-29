---
title: NetFPGA 2.2.0 Released
date: 2011-01-21
eventdate: 2011-01-21
category: news
---

NetFPGA 2.2.0 is released.

Below is a brief description of improvements. Visit the release page to see the entire change log and bug fixes.

Improvements:
- Gigabit MAC/Tri-mode Ethernet MAC:
  - allow TEMAC to be substituted for Gigabit MAC
  - Switch all reference projects to Gigabit MAC
- Xen:
  - Driver and tools will now work in a Xen virtualization environment. (See the website for documentation.)
- crypto_nic:
  - tests updated to reflect library location updates
- Wireshark:
    - Include plugins for:
      - PWOSPF
      - event_capture
    - Note: These currently do not compile without work from the user
- Driver:
  - add support for /sys/class/net under Linux 2.6+
- fetch_mem_models:
  - included a script for fetching the memory models for simulation
- build system:
  - UCF files provided by modules will be merged.
