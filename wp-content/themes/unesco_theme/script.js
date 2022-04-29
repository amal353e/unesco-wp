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
  logo.addEventListener(
    "click",
    () =>
      (location.href =
        "https://amaliekn.dk/kea/2_semester/tema_9/unesco/unesco-wp/")
  );

  //linjeskift adresse footer
  const adresseTekst = document.querySelector(".fa-map-marker + p");
  adresseTekst.innerHTML =
    "Ungdomsbyen<br/ >c/o Global Platform<br/ >Faelledvej 12C, 3. sal<br/ >2200 Copenhagen N<br/ >Denmark";

  //linjeskift kontakt footer
  const kontaktTekst = document.querySelector(".fa-envelope-o + p");
  kontaktTekst.innerHTML =
    "National Koordinator<br />Poul Erik Christoffersen<br />pec@ungdomsbyen.dk";

  //linjeskift telefon footer
  const telefonTekst = document.querySelector(".fa-phone + p");
  telefonTekst.innerHTML = "Tlf: +45 44 91 46 46<br />Direkte: +45 21 74 42 75";
});
