# Adding to the JavaScript

This document directly relates to [Filter-script.js](/assets/js/filter-script.js)

## Explanation of each function

- w3AddClass: This is the function that adds the class to the html elements.

- w3RemoveClass: This is the function that removes the class from the html elements.

*both w3AddClass and w3RemoveClass were taken from an example on w3schools*

- hasClass: This is a function that checks to see if the array that it's passed contains the element that it's passed.

- evaluateCard: This is a function that evaluates whether or not the card has one of the attributes and returns an array of booleans for each of the attributes that have a correlating button checked.

- evaluateButtons: This is a function that returns an array of booleans for if a button is checked or not.

- evaluation: This is a function that checks to see if the elements of the passed arrays are equal to 1, but if none of the buttons are pressed then it returns *true*.

- lineBreakRemove: This is a function that removes the line break character from the last class on a card. The line break character has been introduced by the fact that the filter classes are part of an include.

- buttonClicked: This is the main function that is called when a button is clicked on. It removes the class 'show' from all the cards and then runs through the buttonEvaluation before running through all the cards and evaluating them. If the comparison between the button Arrays and the card Arrays all come back as true then the cards then have the 'show' class added back to them.

## Adding new buttons

To add new buttons to the ecosystem filter system make sure the relative button has been added to [Ecosystem-buttons.html](/_includes/ecosystem-buttons.html). If you haven't please make sure to read through the [README.md](/README.md).

## Adding new organisations, organisation types, product types and target platforms

Please make sure to add an if statement like the ones already there in the relevant section of the evaluateCard function:

- organisations go under the organisations comment
- organisation types go under the organisation types comment
- product types go under the product types comment
- target platforms go under the target platforms comment

with the class that is assigned in [ecosystem-filter-classes.html](/_includes/ecosystem-filter-classes.html), the class naming will be very similar to the existing classes if any help is needed with that.

Then make sure to update the array so that the numbers aren't overwritten and that there are the same number of classes as buttons.

Then in buttonClicked on lines 171 - 174 make sure to update the numbers of the parts of the buttonScore array and the postScore array that are being passed through to the evaluation function.

**It is Important to make sure that the order of the buttons is the same as the order of the classes**
