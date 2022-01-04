const modal = document.getElementById("videoModal");
const btn = document.getElementById("videoBtn");
const closeVideo = document.getElementById("closeVideo");

btn.addEventListener("click", function () {
  modal.style.display = "flex";
});

closeVideo.addEventListener("click", function () {
  modal.style.display = "none";
});

window.addEventListener("click", function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});
