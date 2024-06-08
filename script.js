const aboutUsBtn = document.getElementById("about-us-btn");
const aboutUsSection = document.getElementById("about-us");

aboutUsBtn.addEventListener("click", function () {
  aboutUsSection.classList.toggle("hidden");
});
