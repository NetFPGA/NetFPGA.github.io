// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

function hasClass(post, classNeeded) {
  if (post.includes(classNeeded)) {
    return true;
  } else {
    return false;
  }
}

function evaluateCard(cardIndex) {
  let cardScore = [];
  let cardsClasses;
  let cards = document.getElementsByClassName('post');
  cardsClasses = lineBreakRemove(cards[cardIndex]);
  // Organisations
  if (hasClass(cardsClasses, "NetFPGA-collapse")) {
    cardScore[0] = 1;
  } else {
    cardScore[0] = 0;
  }
  if (hasClass(cardsClasses, "OSNT-collapse")) {
    cardScore[1] = 1;
  } else {
    cardScore[1] = 0;
  }
  // Organisation Types
  if (hasClass(cardsClasses, "academic-collapse")) {
    cardScore[2] = 1;
  } else {
    cardScore[2] = 0;
  }
  if (hasClass(cardsClasses, "non-profit-collapse")) {
    cardScore[3] = 1;
  } else {
    cardScore[3] = 0;
  }
  if (hasClass(cardsClasses, "vendor-collapse")) {
    cardScore[4] = 1;
  } else {
    cardScore[4] = 0;
  }
  //Product Types
  if (hasClass(cardsClasses, "product-collapse")) {
    cardScore[5] = 1;
  } else {
    cardScore[5] = 0;
  }
  if (hasClass(cardsClasses, "project-collapse")) {
    cardScore[6] = 1;
  } else {
    cardScore[6] = 0;
  }
  if (hasClass(cardsClasses, "software-collapse")) {
    cardScore[7] = 1;
  } else {
    cardScore[7] = 0;
  }
  if (hasClass(cardsClasses, "other-collapse")) {
    cardScore[8] = 1;
  } else {
    cardScore[8] = 0;
  }
  //Target Platforms
  if (hasClass(cardsClasses, "NetFPGA-PLUS-collapse")) {
    cardScore[9] = 1;
  } else {
    cardScore[9] = 0;
  }
  if (hasClass(cardsClasses, "NetFPGA-SUME-collapse")) {
    cardScore[10] = 1;
  } else {
    cardScore[10] = 0;
  }
  if (hasClass(cardsClasses, "NetFPGA-CML-collapse")) {
    cardScore[11] = 1;
  } else {
    cardScore[11] = 0;
  }
  if (hasClass(cardsClasses, "NetFPGA-10G-collapse")) {
    cardScore[12] = 1;
  } else {
    cardScore[12] = 0;
  }
  if (hasClass(cardsClasses, "NetFPGA-1G-collapse")) {
    cardScore[13] = 1;
  } else {
    cardScore[13] = 0;
  }
  return cardScore;
}

function evaluateButtons() {
  let check = document.getElementsByClassName('check-container');
  let numberOfButtons = check.length;
  let score = [];
  for (let i = 0; i < numberOfButtons; i++) {
    if (check[i].children[0].checked) {
      score[i] = 1;
    } else {
      score[i] = 0;
    }
  }
  return score;
}

function evaluation(buttons, post) {
  let returnValue = false;
  for (let i = 0; i < buttons.length; i++) {
    if ((buttons[i] == 1) && (post[i] == 1)) {
      returnValue = true;
    }
  }
  if (buttons.reduce((partial_sum, a) => partial_sum + a, 0) == 0) {
    returnValue = true;
  }
  return returnValue;
}

function lineBreakRemove(cardClass) {
  let classList;
  classList = cardClass.className.split(' ');
  if (classList.includes('show')) {

  } else {
    classList[classList.length - 1] = classList[classList.length - 1].slice(0, -1);
  }
  return classList;
}

function buttonClicked() {
  let i;
  let posts;
  let buttonScore;
  let postScore;
  let organisationShow;
  let organisationTypeShow;
  let productTypeShow;
  let targetPlatformShow;
  posts = document.getElementsByClassName('post');
  let numberOfPosts = posts.length;
  for (i = 0; i < numberOfPosts; i++) {
    w3RemoveClass(posts[i], 'show');
  }
  buttonScore = evaluateButtons();
  for (i = 0; i < numberOfPosts; i++) {
    postScore = evaluateCard(i);
    organisationShow = evaluation(buttonScore.slice(0, 2), postScore.slice(0, 2));
    organisationTypeShow = evaluation(buttonScore.slice(2, 5), postScore.slice(2, 5));
    productTypeShow = evaluation(buttonScore.slice(5, 9), postScore.slice(5, 9));
    targetPlatformShow = evaluation(buttonScore.slice(9, 14), postScore.slice(9, 14));
    if (organisationShow && organisationTypeShow && productTypeShow && targetPlatformShow) {
      w3AddClass(posts[i], 'show')
    }
  }
}
