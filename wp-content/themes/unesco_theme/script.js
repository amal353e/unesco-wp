document.addEventListener("DOMContentLoaded", () => {
  //fjern copyright
  document.querySelector(".copyright").remove();

  //opret logo og indsæt i footer
  const parent = document.querySelector(".footer-bg-accent");
  const logo = document.createElement("img");
  logo.setAttribute(
    "src",
    "https://amaliekn.dk/kea/2_semester/tema_9/unesco/unesco-wp/wp-content/uploads/2022/04/cropped-cropped-unesco-logo-hvid-simpelt-2.png"
  );
  logo.setAttribute("class", "footer_logo");
  parent.appendChild(logo);
});
