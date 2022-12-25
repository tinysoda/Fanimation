const playAudio = document.getElementById("play-audio");

const mySong = document.getElementById("mySong");

const gifAudio = document.getAnimations("gifAudio");

const pauseAudio = document.getElementById("stop-audio");

const openMenu = document.getElementById("menu-mobie");

const menuBtn = document.getElementById("menu-mobile");

const bgMenu = document.getElementById("bg-menu-mobile");

const closeBtn = document.getElementById("btn-close-menu");

playAudio.addEventListener("click", () => {
  mySong.play();

  pauseAudio.style.display = "block";
  playAudio.style.display = "none";
});

pauseAudio.addEventListener("click", () => {
  mySong.pause();
  pauseAudio.style.display = "none";
  playAudio.style.display = "block";
});

openMenu.addEventListener("click", () => {
  menuBtn.classList.add("open-menu-mobile");
  bgMenu.style.display = "block";
});

closeBtn.addEventListener("click", () => {
  menuBtn.classList.remove("open-menu-mobile");
  bgMenu.style.display = "none";
});

wow = new WOW({
  boxClass: "wow", // default
  animateClass: "animated", // default
  offset: 0, // default
  mobile: false, // default
  live: true, // default
});
wow.init();

$(window).on("load", () => {
  $(".main").removeClass(".load-page");
  $(".load-page").delay(1000).fadeOut("slow");
});
