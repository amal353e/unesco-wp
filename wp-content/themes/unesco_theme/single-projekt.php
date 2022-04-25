<?php mesmerize_get_header(); ?>

    <div id='page-content' class="page-content">
      <style>
        #close {
          position: absolute;
          padding: 4px 12px;
          font-size: 32px;
          font-weight: bolder;
          cursor: pointer;
          color: #000000;
          aspect-ratio: 1/1;
          width: 51px;
          background-color: transparent;
          border-radius: 8px;
          z-index: 101;
          margin-right: 16px;
          transform: translateY(-5vw);
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
            <h3>Til lærere:</h3>
            <p class="laerere"></p>
          </article>
          <article class="article_gap">
            <h3>Til elever:</h3>
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
			
			  function display() {;
				  document.querySelector(".projekt_titel").textContent = `${projekt.title.rendered}`;
				  document.querySelector(".lang_beskrivelse").textContent = `${projekt.lang_beskrivelse}`;
			  	document.querySelector(".laerere").textContent = `${projekt.laerere}`;
			  	document.querySelector(".elever").textContent = `${projekt.elever}`;
			  }

		  	document.getElementById("close").addEventListener("click", () => {
			  	history.back();
		  	});

      </script>
    </div>

<?php get_footer(); ?>