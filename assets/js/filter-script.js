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

function showCard(name) {
  let i;
  let posts;
  posts = document.getElementsByClassName('post');
  let numberOfPosts = posts.length;
  for (i = 0; i < numberOfPosts; i++) {
    let postClasses = posts[i].className.split(" ");
    postClasses[postClasses.length - 1] = postClasses[postClasses.length - 1].substring(0, postClasses[postClasses.length - 1] - 2);
    for (let k = 0; k < postClasses.length; k++) {
      if (postClasses[k] == name) {
        w3AddClass(posts[i], 'show');
      }
    }
  }
}

function noButton() {
  const netfpgaCB = document.getElementById('check-organisation-NetFPGA');
  const osntCB = document.getElementById('check-organisation-OSNT');
  const academicCB = document.getElementById('check-organisation-type-Academic');
  const nonProfitCB = document.getElementById('check-organisation-type-Non-Profit');
  const vendorCB = document.getElementById('check-organisation-type-Vendor');
  const productCB = document.getElementById('check-product-type-Product');
  const projectCB = document.getElementById('check-product-type-Project');
  const softwareCB = document.getElementById('check-product-type-Software');
  const otherCB = document.getElementById('check-product-type-Other');
  const plusCB = document.getElementById('check-target-PLUS');
  const sumeCB = document.getElementById('check-target-SUME');
  const cmlCB = document.getElementById('check-target-CML');
  const netfpga10GCB = document.getElementById('check-target-10G');
  const netfpga1GCB = document.getElementById('check-target-1G');

  if (netfpgaCB.checked == false) {
    if (osntCB.checked == false) {
      if (academicCB.checked == false) {
        if (nonProfitCB.checked == false) {
          if (vendorCB.checked == false) {
            if (productCB.checked == false) {
              if (projectCB.checked == false) {
                if (softwareCB.checked == false) {
                  if (otherCB.checked == false) {
                    if (plusCB.checked == false) {
                      if (sumeCB.checked == false) {
                        if (cmlCB.checked == false) {
                          if (netfpga10GCB.checked == false) {
                            if (netfpga1GCB.checked == false) {
                              return true;
                            }
                            else return false;
                          }
                          else return false;
                        }
                        else return false;
                      }
                      else return false;
                    }
                    else return false;
                  }
                  else return false;
                }
                else return false;
              }
              else return false;
            }
            else return false;
          }
          else return false;
        }
        else return false;
      }
      else return false;
    }
    else return false;
  }
  else return false
}

function buttonClicked() {
  const netfpgaCB = document.getElementById('check-organisation-NetFPGA');
  const osntCB = document.getElementById('check-organisation-OSNT');
  const academicCB = document.getElementById('check-organisation-type-Academic');
  const nonProfitCB = document.getElementById('check-organisation-type-Non-Profit');
  const vendorCB = document.getElementById('check-organisation-type-Vendor');
  const productCB = document.getElementById('check-product-type-Product');
  const projectCB = document.getElementById('check-product-type-Project');
  const softwareCB = document.getElementById('check-product-type-Software');
  const otherCB = document.getElementById('check-product-type-Other');
  const plusCB = document.getElementById('check-target-PLUS');
  const sumeCB = document.getElementById('check-target-SUME');
  const cmlCB = document.getElementById('check-target-CML');
  const netfpga10GCB = document.getElementById('check-target-10G');
  const netfpga1GCB = document.getElementById('check-target-1G');
  let i;
  let posts;
  posts = document.getElementsByClassName('post');
  let numberOfPosts = posts.length;
  for (i = 0; i < numberOfPosts; i++) {
    w3RemoveClass(posts[i], 'show');
  }
  if (noButton()) {
    for (i = 0; i < numberOfPosts; i++) {
      w3AddClass(posts[i], 'show');
    }
  }
  if (netfpgaCB.checked == true) {
    showCard('NetFPGA-collapse');
    organisationCheck();
  }
  if (osntCB.checked == true) {
    showCard('OSNT-collapse');
    organisationCheck();
  }
  if (academicCB.checked == true) {
    showCard('academic-collapse');
    organisationTypeCheck();
  }
  if (nonProfitCB.checked == true) {
    showCard('non-profit-collapse');
    organisationTypeCheck();
  }
  if (vendorCB.checked == true) {
    showCard('vendor-collapse');
    organisationTypeCheck();
  }
  if (productCB.checked == true) {
    showCard('product-collapse');
    productTypeCheck();
  }
  if (projectCB.checked == true) {
    showCard('project-collapse');
    productTypeCheck();
  }
  if (softwareCB.checked == true) {
    showCard('software-collapse');
    productTypeCheck();
  }
  if (otherCB.checked == true) {
    showCard('other-collapse');
    productTypeCheck();
  }
  if (plusCB.checked == true) {
    showCard('NetFPGA-PLUS-collapse');
  }
  if (sumeCB.checked == true) {
    showCard('NetFPGA-SUME-collapse');
  }
  if (cmlCB.checked == true) {
    showCard('NetFPGA-CML-collapse');
  }
  if (netfpga10GCB.checked == true) {
    showCard('NetFPGA-10G-collapse');
  }
  if (netfpga1GCB.checked == true) {
    showCard('NetFPGA-1G-collapse');
  }
/*  if (noButton() == false) {
    platformCheck();
  } */
}

function organisationCheck() {
  const netfpgaCB = document.getElementById('check-organisation-NetFPGA');
  const osntCB = document.getElementById('check-organisation-OSNT');
  let posts = document.getElementsByClassName('post');
  var l;
  console.log(netfpgaCB.checked);
  if (netfpgaCB.checked == false) {
    for (let i = 0; i < posts.length; i++) {
      let classNames = posts[i].className.split(" ")
      switch (classNames[3] == 'NetFPGA-collapse') {
        case true:
            l = true;
          break;
        default:
          l = false
      }
      if (l) {
        for (let j = 0; j < classNames.length; j++) {
          if (classNames[j] == 'show') {
            w3RemoveClass(posts[i], 'show');
          }
        }
      }
    }
  }
  if (osntCB.checked == false) {
    for (let i = 0; i < posts.length; i++) {
      let classNames = posts[i].className.split(" ")
      switch (classNames[3] == 'OSNT-collapse') {
        case true:
            l = true;
          break;
        default:
          l = false
      }
      if (l) {
        for (let j = 0; j < classNames.length; j++) {
          if (classNames[j] == 'show') {
            w3RemoveClass(posts[i], 'show');
          }
        }
      }
    }
  }
}

function organisationTypeCheck() {
  const academicCB = document.getElementById('check-organisation-type-Academic');
  const nonProfitCB = document.getElementById('check-organisation-type-Non-Profit');
  const vendorCB = document.getElementById('check-organisation-type-Vendor');
  let posts = document.getElementsByClassName('post');
  if (academicCB.checked == false) {
    for (let i = 0; i < posts.length; i++) {
      let classNames = posts[i].className.split(" ")
      switch (classNames[4] == 'academic-collapse') {
        case true:
            l = true;
          break;
        default:
          l = false
      }
      if (l) {
        for (let j = 0; j < classNames.length; j++) {
          if (classNames[j] == 'show') {
            w3RemoveClass(posts[i], 'show');
          }
        }
      }
    }
  }
  if (nonProfitCB.checked == false) {
    for (let i = 0; i < posts.length; i++) {
      let classNames = posts[i].className.split(" ")
      switch (classNames[4] == 'non-profit-collapse') {
        case true:
            l = true;
          break;
        default:
          l = false
      }
      if (l) {
        for (let j = 0; j < classNames.length; j++) {
          if (classNames[j] == 'show') {
            w3RemoveClass(posts[i], 'show');
          }
        }
      }
    }
  }
  if (vendorCB.checked == false) {
    for (let i = 0; i < posts.length; i++) {
      let classNames = posts[i].className.split(" ")
      switch (classNames[4] == 'vendor-collapse') {
        case true:
            l = true;
          break;
        default:
          l = false
      }
      if (l) {
        for (let j = 0; j < classNames.length; j++) {
          if (classNames[j] == 'show') {
            w3RemoveClass(posts[i], 'show');
          }
        }
      }
    }
  }
}

function productTypeCheck() {
  const productCB = document.getElementById('check-product-type-Product');
  const projectCB = document.getElementById('check-product-type-Project');
  const softwareCB = document.getElementById('check-product-type-Software');
  const otherCB = document.getElementById('check-product-type-Other');
  let posts = document.getElementsByClassName('post');
  if (productCB.checked == false) {
    for (let i = 0; i < posts.length; i++) {
      let classNames = posts[i].className.split(" ")
      switch (classNames[5] == 'product-collapse') {
        case true:
            l = true;
          break;
        default:
          l = false
      }
      if (l) {
        for (let j = 0; j < classNames.length; j++) {
          if (classNames[j] == 'show') {
            w3RemoveClass(posts[i], 'show');
          }
        }
      }
    }
  }
  if (projectCB.checked == false) {
    for (let i = 0; i < posts.length; i++) {
      let classNames = posts[i].className.split(" ")
      switch (classNames[5] == 'project-collapse') {
        case true:
            l = true;
          break;
        default:
          l = false
      }
      if (l) {
        for (let j = 0; j < classNames.length; j++) {
          if (classNames[j] == 'show') {
            w3RemoveClass(posts[i], 'show');
          }
        }
      }
    }
  }
  if (softwareCB.checked == false) {
    for (let i = 0; i < posts.length; i++) {
      let classNames = posts[i].className.split(" ")
      switch (classNames[5] == 'software-collapse') {
        case true:
            l = true;
          break;
        default:
          l = false
      }
      if (l) {
        for (let j = 0; j < classNames.length; j++) {
          if (classNames[j] == 'show') {
            w3RemoveClass(posts[i], 'show');
          }
        }
      }
    }
  }
  if (otherCB.checked == false) {
    for (let i = 0; i < posts.length; i++) {
      let classNames = posts[i].className.split(" ")
      switch (classNames[5] == 'other-collapse') {
        case true:
            l = true;
          break;
        default:
          l = false
      }
      if (l) {
        for (let j = 0; j < classNames.length; j++) {
          if (classNames[j] == 'show') {
            w3RemoveClass(posts[i], 'show');
          }
        }
      }
    }
  }
}

function platformCheck() {
  const plusCB = document.getElementById('check-target-PLUS');
  const sumeCB = document.getElementById('check-target-SUME');
  const cmlCB = document.getElementById('check-target-CML');
  const netfpga10GCB = document.getElementById('check-target-10G');
  const netfpga1GCB = document.getElementById('check-target-1G');
  let posts = document.getElementsByClassName('post');
  if (plusCB.checked == false) {
    for (let i = 0; i < posts.length; i++) {
      let classNames = posts[i].className.split(" ")
      for (let j = 0; j < classNames.length; j++) {
        if (classNames[j] == 'show') {
          w3RemoveClass(posts[i], 'show');
        }
      }
    }
  }
  if (sumeCB.checked == false) {
    for (let i = 0; i < posts.length; i++) {
      let classNames = posts[i].className.split(" ")
      for (let j = 0; j < classNames.length; j++) {
        if (classNames[j] == 'show') {
          w3RemoveClass(posts[i], 'show');
        }
      }
    }
  }
  if (cmlCB.checked == false) {
    for (let i = 0; i < posts.length; i++) {
      let classNames = posts[i].className.split(" ")
      for (let j = 0; j < classNames.length; j++) {
        if (classNames[j] == 'show') {
          w3RemoveClass(posts[i], 'show');
        }
      }
    }
  }
  if (netfpga10GCB.checked == false) {
    for (let i = 0; i < posts.length; i++) {
      let classNames = posts[i].className.split(" ")
      for (let j = 0; j < classNames.length; j++) {
        if (classNames[j] == 'show') {
          w3RemoveClass(posts[i], 'show');
        }
      }
    }
  }
  if (netfpga1GCB.checked == false) {
    for (let i = 0; i < posts.length; i++) {
      let classNames = posts[i].className.split(" ")
      for (let j = 0; j < classNames.length; j++) {
        if (classNames[j] == 'show') {
          w3RemoveClass(posts[i], 'show');
        }
      }
    }
  }
}
