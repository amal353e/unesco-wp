<?php mesmerize_get_header(); ?>



  <div id='page-content' class="page-content">

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      h1{
        text-align: center;
      }
      
      h2, h3, p {
        text-align: left !important;
      }
      p{
        font-size: 1rem;
      }

      .filtrerh3{
        text-align: center !important;
      }

      [data-type="group"] p {
        text-align: center !important;
      }

      @media (max-width: 768px) {
        h1{
          font-size:2.2rem;
        }
        h2{
        font-size:2rem;
        }
        h3, h6{
        font-size:1.5rem;
        }
        h4,
        h5 {
          font-size: 1.2rem;
        }

        h6 {
          font-size: 1.1rem;
        }
        p {
          color: rgb(26, 25, 25);
        }
      }
      #main_content {
        padding-inline: 8px;
        max-width: 1200px;
        margin-inline: auto;
      }

      #main_content > *::before, #main_content > *::after {
        display: none;
      }

      .projekt_flex {
        display: flex;
        justify-content: space-around;
        max-width: 800px;
        margin-inline: auto;
      }

      .btn-projekt {
        outline: none;
        text-decoration: none;
        color: #6f9ede;
        background-color: transparent;
        border: #6f9ede 2px solid;
        border-radius: 120px;
        padding: 0.55rem 1.5rem;
        cursor: pointer;
        transition: 0.4s;
        font-family: sweet-sans-pro, sans-serif !important;
      }
 
      .btn-projekt:hover {
        outline: none;
        text-decoration: none;
        color: #fff;
        background-color: #93cc99;
        border-color: #93cc99;
        border-radius: 120px;
        font-family: sweet-sans-pro, sans-serif !important;
      }

      .intro {
        max-width: 680px;
        margin-inline: auto;
        /* display: grid;
        grid-template-columns: 1fr 1fr; */
      }
      /* .intro p {
        grid-column: 1/2;
      }
      .projekt_flex {
        grid-column:2/3;
      } */

      #filter_menu, .intro {
        margin-bottom: 48px;
      }

      #filter {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
        gap: 8px;
      }

      @media (max-width:780px) {
        #filter {
          grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        }
      }

      .filter-btn {
        aspect-ratio: 1/1;
        width: 100%;
        border: 0;
        cursor: pointer;
        color: transparent;
        background-size: cover;
        opacity: 0.5;
        image-rendering: crisp-edges;
        image-rendering: -moz-crisp-edges;          /* Firefox */
        image-rendering: -o-crisp-edges;            /* Opera */
        image-rendering: -webkit-optimize-contrast; /* Webkit (non-standard naming)*/
        transition: 0.1s opacity;
      }

      .filter-btn.selected {
        opacity: 1 !important;
      }

      .filter-btn:hover {
        opacity: 0.8;
        transform: scale(1.03);
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
        grid-template-rows: 4fr 5fr;
        aspect-ratio: 2/3;
        box-shadow: #80808040 2px 4px 8px 0px;
        cursor: pointer;
        transition: 0.3s box-shadow, 0.5s transform;
        overflow: hidden;
        color: white !important;
      }

      article.projekt_card h3, article.projekt_card p{
        color: white;
      }
      
      .projekt_card:hover {
        box-shadow: #80808080 2px 4px 16px 4px;
        transform: translateY(-4px)
      }

      .projekt_titel {
        color: black;
        font-weight: 700;
      }

      .kort_beskrivelse {
        position: relative;
      }

      .kort_beskrivelse::after {
        content: "L??s mere";
        text-decoration: underline;
        /*padding-left: 0.25rem;*/
        position: absolute;
        left: 0;
        bottom: -1.5rem;
      }

      .lang_beskrivelse{
        line-height: 1.8;
      }

      #content_projekter {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(375px, 1fr));
        gap: 36px 24px;
      }

      @media (max-width: 840px) {
        #content_projekter {
          grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        }
      }

      .card_img {
        height: 100%;
        background-size: 105%;
        background-position: center;
        transition: 0.5s 
      }

      .projekt_card:hover .card_img {
        background-size: 110%;
        filter: brightness(0.75)
      }

      .card_text {
        padding: 8px;
        display: grid;
        grid-template-rows: auto auto;
      }
      
      .card_text > p {
        color: black;
      }

      .trin {
        font-style: italic;
        margin-top: auto;
        font-size: 0.95em !important;
        opacity: 0.85;
      }
    </style>

    <template>
      <article class="projekt_card">
        <div class="card_img"></div>
        <div class="card_text">
          <div>
            <h3 class="projekt_titel"></h3>
            <p class="kort_beskrivelse"></p>
          </div>
          <p class="trin"></p>
        </div>
     	</article>
    </template>

    <main id="main_content">

      <div class="intro">
      <p>
          P?? siden findes projekter indsendt af danske UNESCO verdensm??lsskoler. Projekterne er
          alle med udgangspunkt i FNs 17 verdensm??l. Dette kan bruges som inspiration og motivation
          samt udg??re grundlaget for eksempelvis skoleprojekter, unders??gelser eller lignende.
        </p>
        <br>
        <div class="projekt_flex">
          <button class="btn-projekt" onclick="window.location.href='https\:\/\/amaliekn.dk/kea/2_semester/tema_9/unesco/unesco-wp/projekter/upload-jeres-projekt/'">Upload projekt</button>
          <button class="btn-projekt" onclick="window.location.href='https\:\/\/amaliekn.dk/kea/2_semester/tema_9/unesco/unesco-wp/projekter/soeg-tilskud/'">S??g tilskud</button>
        </div>

      </div>

      <div id="filter_menu">
      <h3 class="filtrerh3">Filtrer projekter ud fra de 17 verdensm??l</h3>
        <div id="filter">
          <button class="filter-btn selected" data-category="alle">Alle</button>
          <button class="filter-btn" data-category="vm1">1. Afskaf fattigdom</button>
          <button class="filter-btn" data-category="vm2">2. Stop sult</button>
          <button class="filter-btn" data-category="vm3">3. Sundhed og trivsel</button>
          <button class="filter-btn" data-category="vm4">4. Kvalitetsuddannelse</button>
          <button class="filter-btn" data-category="vm5">5. Ligestilling mellem k??nnene</button>
          <button class="filter-btn" data-category="vm6">6. Rent vand og sanitet</button>
          <button class="filter-btn" data-category="vm7">7. B??redygtig energi</button>
          <button class="filter-btn" data-category="vm8">8. Anst??ndige jobs og ??konomisk v??kst</button>
          <button class="filter-btn" data-category="vm9">9. Industri, innovation og infrastruktur</button>
          <button class="filter-btn" data-category="vm10">10. Mindre ulighed</button>
          <button class="filter-btn" data-category="vm11">11. B??redygtige byer og lokalsamfund</button>
          <button class="filter-btn" data-category="vm12">12. Ansvarligt forbrug og produktion</button>
          <button class="filter-btn" data-category="vm13">13. Klimaindsats</button>
          <button class="filter-btn" data-category="vm14">14. Livet i havet</button>
          <button class="filter-btn" data-category="vm15">15. Livet p?? land</button>
          <button class="filter-btn" data-category="vm16">16. Fred, retf??rdighed og st??rke institutioner</button>
          <button class="filter-btn" data-category="vm17">17. Partnerskab for handling</button>
        </div>
      </div>
      <section id="content_projekter">

      </section>
    </main>

    <script>
      const url = "https://amaliekn.dk/kea/2_semester/tema_9/unesco/unesco-wp/wp-json/wp/v2/projekt?per_page=100"; //wp-json

      let projekter; //json databasen
      let filter = "alle"; //variabel som ??ndrer sig alt efter hvilken filterknap du klikker p??

      document.addEventListener("DOMContentLoaded", () => {
        //venter indtil siden er loadet f??r knapperne bliver funktionelle
        const filterButtons = document.querySelectorAll(".filter-btn");
        filterButtons.forEach((button) => {
          button.addEventListener("click", filterVM); //knapperne kalder p?? filterVM() funktionen, n??r man klikker
          // button.style.opacity = 1;
        }); 
        fetchData(); //kalder p?? fetchData() funktionen
      });

      async function fetchData() {
        //kaldes n??r siden er loadet
        let response = await fetch(url);
        projekter = await response.json();
        display(projekter); //kalder p?? display() funktionen med projekter som parameter
        //console.log(projekter);
      }

      function filterVM() {
        //bliver kaldt n??r knapperne klikkes p??
        filter = this.dataset.category; //variablen ??ndres til den knap man klikker p??
        document.querySelector(".selected").classList.remove("selected");
        this.classList.add("selected");

        // if (document.querySelector('[data-category="alle"]').classList.contains("selected") === true) {
        //   document.querySelectorAll(".filter-btn").forEach((button) => button.style.opacity = 1)
        // } else {
        //   document.querySelectorAll(".filter-btn").forEach((button) => button.style.opacity = null)
        // };

        display(); //kalder p?? display() funktionen
      }

      function display() {
        //kaldes n??r databasen er hentet eller n??r en filterknap klikkes
        const mainContent = document.getElementById("content_projekter");
        const template = document.querySelector("template").content;
        mainContent.textContent = ""; //fjerner sektionens indhold

        projekter.forEach((projekt) => {
          if (filter == "alle" || projekt.verdensmaal_1 == "n/a" || filter == projekt.verdensmaal_1 || filter == projekt.verdensmaal_2 || filter == projekt.verdensmaal_3) {
            //hvis objektet har samme v??rdi som filterknappen
            const clone = template.cloneNode(true);
            clone.querySelector(".card_img").style.backgroundImage = `url(${projekt.billede.guid})`;
            clone.querySelector(".projekt_titel").textContent = `${projekt.title.rendered}`;
            clone.querySelector(".kort_beskrivelse").textContent = `${projekt.kortbeskrivelse}`;
            clone.querySelector(".trin").textContent = `Uddannelsestrin: ${projekt.uddannelse}`;
            clone.querySelector("article").addEventListener("click", () => location.href = `${projekt.link}`); //g??r kortene klikbart og kalder p?? showPopUp() funktionen med city som parameter
            mainContent.appendChild(clone);
          }
        });

        let randomColor;
        document.querySelectorAll(".projekt_card").forEach((card) => {
          randomColor = Math.floor(Math.random() * 6);
          switch(randomColor) {
              case 0:
                card.style.backgroundColor = "#6F9EDE";
                break;

              case 1:
                card.style.backgroundColor = "#85AECE";
                break;

              case 2:
                card.style.backgroundColor = "#6FAFAD";
                break;

              case 3:
                card.style.backgroundColor = "#93CC99";
                break;
              
              case 4:
                card.style.backgroundColor = "#F5C346";
                break;
                
              case 5:
                card.style.backgroundColor = "#EC605F";
                break;
          }
        }); //giver hvert kort en tilf??ldig baggrundsfarve ud af 6 farver
      }

    </script>
  </div>
    

<?php get_footer(); ?>
