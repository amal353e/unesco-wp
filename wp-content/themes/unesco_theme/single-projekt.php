<?php mesmerize_get_header(); ?>

    <div id='page-content' class="page-content">
      <style>

        h1, h2, h3, p {
          text-align: left !important;
        }

        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }

        img {
          width: 100%;
          object-fit: cover;
        }

        #back {
          padding: 4px 12px;
          font-size: 32px;
          font-weight: bolder;
          cursor: pointer;
          color: #000000;
          aspect-ratio: 1/1;
          width: 51px;
          background-color: transparent;
          z-index: 101;
        }

        #main_content {
          padding-inline: 8px;
          max-width: 1200px;
          margin-inline: auto;
        }

        #single_post {
          display: grid;
          grid-template-columns: 1fr 1fr;
          gap: 40px;
        }

        @media (max-width: 640px) {
          #single_post {
            display: block;
          }
        }

        .article_gap {
          margin-top: 3rem;
        }

        [data-type="group"] p {
          text-align: center !important;
        }

      </style>

      <main id="main_content">
        <div id="back">&#x2715;</div>
        <h2 class="projekt_titel"></h2>
        <section id="single_post">
          <div class="col_left">
            <p class="lang_beskrivelse"></p>
          </div>
          <div class="col_right">
            <img class="projekt_img" src="" alt="">
          </div>
          <article class="article_gap">
              <h3 class="til_laerere">Til lærere:</h3>
              <p class="laerere"></p>
            </article>
            <article class="article_gap">
              <h3 class="til_elever">Til elever:</h3>
              <p class="elever"></p>
            </article>
      	</section>
      </main>

      <script>
        let projekt;
			  document.addEventListener("DOMContentLoaded", fetchData);
			
			  async function fetchData() {
				  let jsonData = await fetch(`https://amaliekn.dk/kea/2_semester/tema_9/unesco/unesco-wp/wp-json/wp/v2/projekt/<?php echo get_the_ID() ?>`);
				  projekt = await jsonData.json();
			  	display();
			  }
			
			  function display() {
				  document.querySelector(".projekt_titel").textContent = `${projekt.title.rendered}`;
				  document.querySelector(".lang_beskrivelse").innerHTML = `${projekt.lang_beskrivelse}`;
          document.querySelector(".projekt_img").src = `${projekt.billede.guid}`;
          if (projekt.laerere !== "") {
            document.querySelector(".laerere").innerHTML = `${projekt.laerere}`;
          } else document.querySelector(".til_laerere").textContent = ""; 
			  	if (projekt.elever !== "") {
            document.querySelector(".elever").innerHTML = `${projekt.elever}`;
          } else document.querySelector(".til_elever").textContent = ""; 
			  }

		  	document.getElementById("back").addEventListener("click", () => {
			  	location.href = "https://amaliekn.dk/kea/2_semester/tema_9/unesco/unesco-wp/projekter/";
		  	});

      </script>
    </div>

<?php get_footer(); ?>