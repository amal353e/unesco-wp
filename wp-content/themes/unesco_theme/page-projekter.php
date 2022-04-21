<?php mesmerize_get_header(); ?>


  <div id='page-content' class="page-content">

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      .card {
        display: grid;
        grid-template-rows: 5fr 3fr;
        aspect-ratio: 5/8;
      }

      #content_projecter {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(360px, 1fr));
        max-width: 1200px;
        gap:24px;
        margin-inline: auto;
      }

      .card_img {
        height: 100%;
        background-size: cover;
        max-width: 100%;
        object-fit: cover;
      }
    </style>

    <template>
      <article class="card">
       	<img class="card_img" src="" alt="" />
         <div class="card_text">
          <h3 class="projekt_titel"></h3>
          <p class="beskrivelse"></p>
         </div>
     	</article>
    </template>

    <main id="main_content">

      <div id="filter_menu">
        <div id="filter">
          <button class="filter-btn selected" data-category="alle">Alle</button>
          <button class="filter-btn" data-category="indskoling">Indskoling</button>
          <button class="filter-btn" data-category="mellemtrin">Mellemtrin</button>
          <button class="filter-btn" data-category="udskoling">Udskoling</button>
          <button class="filter-btn" data-category="gymnasiet">Gymnasiet</button>
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
        filterButtons.forEach((button) => button.addEventListener("click", filterUddannelse)); //knapperne kalder på filterUddannelse() funktionen, når man klikker
        fetchData(); //kalder på fetchData() funktionen
      });

      async function fetchData() {
        //kaldes når siden er loadet
        let response = await fetch(url);
        projekter = await response.json();
        display(projekter); //kalder på display() funktionen med projekter som parameter
        console.log(projekter);
      }

      function filterUddannelse() {
        //bliver kaldt når knapperne klikkes på
        filter = this.dataset.category; //variablen ændres til den knap man klikker på
        document.querySelector(".selected").classList.remove("selected");
        this.classList.add("selected");

        display(); //kalder på display() funktionen
      }

      function display() {
        //kaldes når databasen er hentet eller når en filterknap klikkes
        const mainContent = document.getElementById("content_projekter");
        const template = document.querySelector("template").content;
        mainContent.textContent = ""; //fjerner sektionens indhold

        projekter.forEach((projekt) => {
          if (filter == projekt.uddannelse || filter == "alle") {
            //hvis objektet har samme værdi som filterknappen
            const clone = template.cloneNode(true);
            clone.querySelector("img").src = `${projekt.billede.guid}`;
            clone.querySelector(".projekt_titel").textContent = `${projekt.title.rendered}`;
            clone.querySelector(".beskrivelse").textContent = `${projekt.beskrivelse}`;
            mainContent.appendChild(clone);
          }
       });
      }

    </script>
  </div>
    

<?php get_footer(); ?>
