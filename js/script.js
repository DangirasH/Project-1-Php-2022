const burger = document.querySelector(".burger");

burger.onclick = function () {
  if (burger.getAttribute("href") == "#items") {
    burger.setAttribute("href", "#a");
  } else {
    burger.setAttribute("href", "#items");
  }
};
