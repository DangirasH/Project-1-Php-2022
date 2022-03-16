const navigation = document.querySelector("nav");
const sidebar = document.querySelector(".sidebar");

let screenVH = vhToPixels(93);

window.addEventListener("scroll", () => {
  if (window.scrollY > screenVH) {
    navigation.classList.add("transform-scroll-nav");
    sidebar.classList.add("transform-sidebar");
  } else {
    navigation.classList.remove("transform-scroll-nav");
    sidebar.classList.remove("transform-sidebar");
  }
});

window.addEventListener("resize", () => {
  screenVH = vhToPixels(90);
});

function vhToPixels(vh) {
  return Math.round(window.innerHeight / (100 / vh));
}
