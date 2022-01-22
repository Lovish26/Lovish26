// ///////////////////////////////////////////////////////////
// =========Alert modal close================
const alertBtn = document.querySelector(".alert-btn");
const alertBox = document.querySelector(".alert-success");
if (alertBtn) {
  alertBtn.addEventListener("click", function () {
    alertBox.classList.add("hidden");
  });
}

// ///////////////////////////////////////////////////////////
//Using selectors inside the element to make Skills Accordion

const gridItem = document.querySelectorAll(".grid-item");

gridItem.forEach(function (item) {
  // console.log(item);
  const skillBtn = item.querySelector("#dropdown-btn");
  // console.log(skillBtn);
  skillBtn.addEventListener("click", function () {
    gridItem.forEach(function (items) {
      // console.log(items);
      if (items != item) {
        items.classList.remove("show-text");
      }
    });

    item.classList.toggle("show-text");
  });
});

// ///////////////////////////////////////////////////////////
// ===============   NAV-BAR (SMALL SCREEN)  =======================

const navHam = document.querySelector(".nav-ham");
const nav = document.querySelector(".nav-sm-screen");
const navClose = document.querySelector(".nav-close");
const navLinks = document.querySelectorAll(".nav-link");
navHam.addEventListener("click", function () {
  nav.classList.add("show-nav");
  navClose.style.display = "block";
});

navClose.addEventListener("click", function () {
  nav.classList.remove("show-nav");
  navClose.style.display = "none";
});

navLinks.forEach(function (link) {
  link.addEventListener("click", function () {
    nav.classList.remove("show-nav");
    navClose.style.display = "none";
  });
});

// ///////////////////////////////////////////////////////////
// ====================   HIDE ALERT  =======================

const hideAlert = function () {
  if (alertBox) {
    alertBox.remove();
  }
};

setTimeout(hideAlert, 10000);
