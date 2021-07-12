# How to edit the website

## How to add Pages

## How to edit the Footer

In the _includes folder you can find the footer.html file as well as the sidebar.html file.

Sidebar.html contains the contact information parts of the footer whereas footer.html only contains the footer element and the copyright declaration.

Editing this file will cause changes to happen on all pages.

## How to edit the Header

In the _includes folder you can find the header.html file.

To change the image in the header go to custom.scss in the _sass folder in the css folder in the assets folder and look for "header#hero".

Editing this file will cause changes to happen on all pages.

## How to edit the Navigation Bar

In the _includes folder you can find the navigation.html file.

To change the text on the left side of the nav bar change the 3rd line from saying "NetFPGA" to the desired new text.

To add new elements to the right side add a new list item to the unordered list.

To add new elements to one of the dropdown menus first select the relevant dropdown menu then add it to the relevant selection of the dropdown menu.

The "Home" dropdown menu is for all the NetFPGA systems with the top section being the supported systems and the bottom section being the old systems.

The "About" dropdown menu is for pages that are gives context on NetFPGA with the top section being pages on the NetFPGA website and the bottom section being pages hosted on different websites.

Editing the Navigation bar will affect every page.

## How to edit the page layout

In the _layouts folder you can find default.html and page.html. Editing either one of these will affect the layout of the page.

To edit the layout with precision edit default.html because page.html uses default.html as its layout

Editing either of these will edit the layout of every page.

### Editing the layout of a specific page

To edit the specific of a particular page create a new html file in the _layouts folder and on the page you are editing change the layout to be the new layout you have just made.

## How to edit a particular page

### How to edit the Home Page

To edit the Home page edit the index.html file.

The recent news section can be edited by editing the most-recent-news-posts.html found in the _includes folder

### How to edit the pages for each system

#### How to edit the NetFPGA PLUS page

Edit the NetFGPA-PlUS.html file.

#### How to edit the NetFPGA SUME page

Edit the NetFPGA-SUME.html file.

#### How to edit the NetFPGA CML page

Edit the NetFPGA-CML.html file.

#### How to edit the NetFPGA 10G page

Edit the NetFPGA-10G.html file.

#### How to edit the NetFPGA 1G page

Edit the NetFPGA-1G.html file.

### How to edit the about page

Edit the About.html file.

All logos can be found sorted into to hosts and supporters in the Logos folders in the images folder in the assets folder.

### How to edit the ecosystem page

Edit the ecosystem.html file with standard HTML

### How to edit the Publications to page

Each years publications are in the _includes folder with the naming system of <YYYY>-Publications.html
To add publications to a particular year edit the corresponding file for the year.

To add a new years publications follow the same format as the most recent years one. But where it uses a year use the current year. Then add the class "collapsed" to the div with the button in and remove the "show" class from the div with the list of publications in.

Then add:

*{% include \<YYYY\>-Publications.html %}*

*\<hr\>*

*\<br\>*

to Publications.html

### How to edit the news and events page

To edit the functionality of the checkboxes edit the [news-and-events.html](/news-and-events.html) file.

To change the information about a specific event/piece of news look for the file you're looking for in the _posts folder and all files that show up on the website have file names looking like \<YYYY\>-\<MM\>-\<DD\>-<title>.md

To add a new piece of news check [example-news-post.md](/_posts/example-news-post.md) for all that's required.

to add a new event check [example-events-post.md](/_posts/example-events-post.md) for all that's required.

For events that have their information hosted on the NetFPGA website to edit those files these pages can be found in the _pages folder with the same naming format as the the events.

If you want to add a new metadata field to the posts first add it to the example posts for the relevant categories and it what it is used for. Then add it to the rest of the affected posts. Then in the news and events file add

*{% if post.\<metadata tag\> %}*

*\<appropriate tag\>{{ post.\<metadata tag\> }}\<\/appropriate tag\>*

*{% endif %}*

### How to edit the why NetFPGA page

Edit the why-NetFPGA.html

<hr>
<br>

Most of the css used in the website is Bootstrap but the non-bootstrap css can be found [here](/assets/css/_sass/custom.scss).
