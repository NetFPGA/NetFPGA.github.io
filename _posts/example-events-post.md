---
title: example
date: 0001-01-01
category: events
location: University College London
presenter:
eventdate: 0001-01-01
website: http://sites.ieee.org/netsoft/tutorials/
titlelink: http://sites.ieee.org/netsoft/
---

For easy naming convention name the news files should be saved yyyy-mm-dd-title.md

title: Title is the metadata tag that is used to give the name of the post on the website
date: Date is the metadata tag that is used by jekyll to know if it should post the post to the website or not
category: declares whether it shows up on the events page or on the news page
location: Location is the metadata tag that is used to give the place that the event will take place at on the website
presenter: Presenter is the metadata tag that is used to give the person giving the event on the website
eventdate: Eventdate is the metadata tag that is used to give the date of the event on the website, this means that the date for the event and the date the event is posted to the website can be different
website: Website is the metadata tag that is used to give the link of the website to find out more information about the event
titlelink: TitleLink is the link to the organisation that is organising the event

The only metadata tags that are required for an event are title, date and category all other ones present are found using if tags in the events page.
