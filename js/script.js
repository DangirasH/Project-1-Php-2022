const navigation = document.querySelector("nav");
const sidebar = document.querySelector("sidebar");

let screenVH = vhToPixels(93);

window.addEventListener("scroll", () => {
  if (window.scrollY > screenVH) {
    navigation.classList.add("transform-scroll-nav");
  } else {
    navigation.classList.remove("transform-scroll-nav");
  }
});

window.addEventListener("resize", () => {
  screenVH = vhToPixels(90);
});

function vhToPixels(vh) {
  return Math.round(window.innerHeight / (100 / vh));
}
