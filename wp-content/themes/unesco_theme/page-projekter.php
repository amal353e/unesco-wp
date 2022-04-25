<?php mesmerize_get_header(); ?>


  <div id='page-content' class="page-content">

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      #main_content > *::before, #main_content > *::after {
        display: none;
      }

      #filter_menu {
        max-width: 1200px;
        margin-inline: auto;
        margin-bottom: 32px;
      }

      #filter {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
        gap: 8px;
      }

      .filter-btn {
        aspect-ratio: 1/1;
        width: 100%;
        border: 0;
        cursor: pointer;
        color: transparent;
        background-size: cover;
        opacity: 0.5;
      }

      .filter-btn.selected {
        opacity: 1;
      }

      .filter-btn:hover {
        outline: 1px solid #00000044;
      }

      [data-category="alle"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/18.png);
      }

      [data-category="vm1"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/1.png);
      }

      [data-category="vm2"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/2.png);
      }

      [data-category="vm3"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/3.png);
      }

      [data-category="vm4"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/4.png);
      }

      [data-category="vm5"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/5.png);
      }

      [data-category="vm6"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/6.png);
      }

      [data-category="vm7"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/7.png);
      }

      [data-category="vm8"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/8.png);
      }

      [data-category="vm9"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/9.png);
      }

      [data-category="vm10"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/10.png);
      }

      [data-category="vm11"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/11.png);
      }

      [data-category="vm12"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/12.png);
      }

      [data-category="vm13"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/13.png);
      }

      [data-category="vm14"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/14.png);
      }

      [data-category="vm15"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/15.png);
      }

      [data-category="vm16"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/16.png);
      }

      [data-category="vm17"] {
        background-image: url(../wp-content/themes/unesco_theme/billeder/17.png);
      }

      .projekt_card {
        display: grid;
        grid-template-rows: 1fr 1fr;
        aspect-ratio: 2/3;
        box-shadow: #80808040 2px 4px 8px;
        cursor: pointer;
      }
      
      .projekt_titel {
        color: black;
        font-weight: 700;
      }

      #content_projekter {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(360px, 1fr));
        max-width: 1200px;
        gap: 36px 24px;
        margin-inline: auto;
      }

      .card_img {
        height: 100%;
        background-size: cover;
        object-fit: cover;
      }

      .card_text {
        padding: 8px;
        display: grid;
        grid-template-rows: 5rem auto auto;
      }
      
      .card_text > p {
        color: black;
      }

      .trin {
        font-style: italic;
        margin-top: auto;
        font-size: 0.9em;
        opacity: 0.85;
      }
    </style>

    <template>
      <article class="projekt_card">
       	<img class="card_img" src="" alt="" />
          <div class="card_text">
            <h3 class="projekt_titel"></h3>
            <p class="kort_beskrivelse"></p>
            <p class="trin"></p>
          </div>
     	</article>
    </template>

    <main id="main_content">

      <div id="filter_menu">
        <div id="filter">
          <button class="filter-btn selected" data-category="alle">Alle</button>
          <button class="filter-btn" data-category="vm1">1. Afskaf fattigdom</button>
          <button class="filter-btn" data-category="vm2">2. Stop sult</button>
          <button class="filter-btn" data-category="vm3">3. Sundhed og trivsel</button>
          <button class="filter-btn" data-category="vm4">4. Kvalitetsuddannelse</button>
          <button class="filter-btn" data-category="vm5">5. Ligestilling mellem kønnene</button>
          <button class="filter-btn" data-category="vm6">6. Rent vand og sanitet</button>
          <button class="filter-btn" data-category="vm7">7. Bæredygtig energi</button>
          <button class="filter-btn" data-category="vm8">8. Anstændige jobs og økonomisk vækst</button>
          <button class="filter-btn" data-category="vm9">9. Industri, innovation og infrastruktur</button>
          <button class="filter-btn" data-category="vm10">10. Mindre ulighed</button>
          <button class="filter-btn" data-category="vm11">11. Bæredygtige byer og lokalsamfund</button>
          <button class="filter-btn" data-category="vm12">12. Ansvarligt forbrug og produktion</button>
          <button class="filter-btn" data-category="vm13">13. Klimaindsats</button>
          <button class="filter-btn" data-category="vm14">14. Livet i havet</button>
          <button class="filter-btn" data-category="vm15">15. Livet på land</button>
          <button class="filter-btn" data-category="vm16">16. Fred, retfærdighed og stærke institutioner</button>
          <button class="filter-btn" data-category="vm17">17. Partnerskab for handling</button>
        </div>
      </div>
      <section id="content_projekter">

      </section>
    </main>

    <script>
      const url = "https://amaliekn.dk/kea/2_semester/tema_9/unesco/unesco-wp/wp-json/wp/v2/projekt?per_page=100"; //wp-json

      let projekter; //json databasen
      let filter = "alle"; //variabel som ændrer sig alt efter hvilken filterknap du klikker på

      document.addEventListener("DOMContentLoaded", () => {
        //venter indtil siden er loadet før knapperne bliver funktionelle
        const filterButtons = document.querySelectorAll(".filter-btn");
        filterButtons.forEach((button) => button.addEventListener("click", filterVM)); //knapperne kalder på filterVM() funktionen, når man klikker
        fetchData(); //kalder på fetchData() funktionen
      });

      async function fetchData() {
        //kaldes når siden er loadet
        let response = await fetch(url);
        projekter = await response.json();
        display(projekter); //kalder på display() funktionen med projekter som parameter
        //console.log(projekter);
      }

      function filterVM() {
        //bliver kaldt når knapperne klikkes på
        filter = this.dataset.category; //variablen ændres til den knap man klikker på
        document.querySelector(".selected").classList.remove("selected");
        this.classList.add("selected");

        if (document.querySelector('[data-category="alle"]').classList.contains("selected") === true) {
          document.querySelectorAll(".filter-btn").forEach((button) => button.style.opacity = 1)
        } else {
          document.querySelectorAll(".filter-btn").forEach((button) => button.style.opacity = null)
        };

        display(); //kalder på display() funktionen
      }

      function display() {
        //kaldes når databasen er hentet eller når en filterknap klikkes
        const mainContent = document.getElementById("content_projekter");
        const template = document.querySelector("template").content;
        mainContent.textContent = ""; //fjerner sektionens indhold

        projekter.forEach((projekt) => {
          if (filter == "alle" || projekt.verdensmaal_1 == "n/a" || filter == projekt.verdensmaal_1 || filter == projekt.verdensmaal_2 || filter == projekt.verdensmaal_3) {
            //hvis objektet har samme værdi som filterknappen
            const clone = template.cloneNode(true);
            clone.querySelector("img").src = `${projekt.billede.guid}`;
            clone.querySelector(".projekt_titel").textContent = `${projekt.title.rendered}`;
            clone.querySelector(".kort_beskrivelse").textContent = `${projekt.kortbeskrivelse}`;
            clone.querySelector(".trin").textContent = `Uddannelsestrin: ${projekt.uddannelse}`;
            clone.querySelector("article").addEventListener("click", () => location.href = `${projekt.link}`); //gør kortene klikbart og kalder på showPopUp() funktionen med city som parameter
            mainContent.appendChild(clone);
          }
        });
        document.querySelectorAll(".projekt_card").forEach((card) => 
        card.style.backgroundColor = `hsl(${Math.floor(Math.random()*36)*10},80%,75%)`);
        //giver hvert kort en tilfældig baggrundsfarve ud af 36 farver
      }

    </script>
  </div>
    

<?php get_footer(); ?>
