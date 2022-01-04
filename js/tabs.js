const tabs = document.getElementsByClassName("tab");

for (let element of tabs) {
  element.addEventListener("click", function () {
    this.classList.toggle("active");
    let panel = this.nextElementSibling;
    let arrow = this.querySelector("i");

    if (panel.style.display === "flex") {
      arrow.classList.remove("animated");
      panel.style.display = "none";
    } else {
      arrow.classList.add("animated");
      panel.style.display = "flex";
    }
  });
}
