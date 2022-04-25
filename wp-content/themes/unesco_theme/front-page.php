<?php
/*
 * Template Name: Front Page Template
 */
mesmerize_get_header('homepage');
?>

    <div id='page-content' class="page-content">
        <h2>hej</h2>
        <div class="<?php mesmerize_page_content_wrapper_class(); ?>">
            <?php
            while (have_posts()) : the_post();
                the_content();
            endwhile;
            ?>
            
            <div class="wrapper_forside">
                <img src="wp-content/themes/unesco_theme/billeder/1.png" alt="verdensmål 1">
                <img src="wp-content/themes/unesco_theme/billeder/2.png" alt="verdensmål 2">
                <img src="wp-content/themes/unesco_theme/billeder/3.png" alt="verdensmål 3">
                <img src="wp-content/themes/unesco_theme/billeder/4.png" alt="verdensmål 4">
                <img src="wp-content/themes/unesco_theme/billeder/5.png" alt="verdensmål 5">
                <img src="wp-content/themes/unesco_theme/billeder/6.png" alt="verdensmål 6">
                <img src="wp-content/themes/unesco_theme/billeder/7.png" alt="verdensmål 7">
                <img src="wp-content/themes/unesco_theme/billeder/8.png" alt="verdensmål 8">
                <img src="wp-content/themes/unesco_theme/billeder/9.png" alt="verdensmål 9">
                <img src="wp-content/themes/unesco_theme/billeder/10.png" alt="verdensmål 10">
                <img src="wp-content/themes/unesco_theme/billeder/11.png" alt="verdensmål 11">
                <img src="wp-content/themes/unesco_theme/billeder/12.png" alt="verdensmål 12">
                <img src="wp-content/themes/unesco_theme/billeder/13.png" alt="verdensmål 13">
                <img src="wp-content/themes/unesco_theme/billeder/14.png" alt="verdensmål 14">
                <img src="wp-content/themes/unesco_theme/billeder/15.png" alt="verdensmål 15">
                <img src="wp-content/themes/unesco_theme/billeder/16.png" alt="verdensmål 16">
                <img src="wp-content/themes/unesco_theme/billeder/17.png" alt="verdensmål 17">
                <img src="wp-content/themes/unesco_theme/billeder/18.png" alt="verdensmål 18">
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <h1>overskrift 1</h1>
                    </div>
                    <div class="flip-card-back">
                        <h1>Afskaf fattigdom</h1>
                        <p>Architect & Engineer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
