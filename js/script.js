const burger = document.querySelector(".burger");
const menuClick = document.querySelector(".items");

burger.onclick = function () {
  if (burger.getAttribute("href") == "#items") {
    burger.setAttribute("href", "#a");
  } else {
    burger.setAttribute("href", "#items");
  }
};

menuClick.onclick = function () {
  burger.setAttribute("href", "#a");
};
