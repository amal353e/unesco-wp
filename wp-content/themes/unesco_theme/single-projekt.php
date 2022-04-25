<?php mesmerize_get_header(); ?>

    <div id='page-content' class="page-content">
      <style>
        #close {
          padding: 4px 12px;
          font-size: 32px;
          font-weight: bolder;
          cursor: pointer;
          color: #000000;
          aspect-ratio: 1/1;
          width: 51px;
          background-color: transparent;
          z-index: 101;
          margin-left: 16px;
        }

        #single_post {
          padding-inline: 8px;
          max-width: 1200px;
          margin-inline: auto;
        }

        .article_gap {
          margin-top: 3rem;
        }

      </style>

      <main id="main_content">
        <div id="close">&#x2715;</div>
        <section id="single_post">
          <h2 class="projekt_titel"></h2>
          <p class="lang_beskrivelse"></p>
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
          if (projekt.laerere !== "") {
            document.querySelector(".laerere").innerHTML = `${projekt.laerere}`;
          } else document.querySelector(".til_laerere").textContent = ""; 
			  	if (projekt.elever !== "") {
            document.querySelector(".elever").innerHTML = `${projekt.elever}`;
          } else document.querySelector(".til_elever").textContent = ""; 
			  }

		  	document.getElementById("close").addEventListener("click", () => {
			  	history.back();
		  	});

      </script>
    </div>

<?php get_footer(); ?>