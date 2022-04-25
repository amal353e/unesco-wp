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
            hvad med her
            <div class="wrapper_forside">
                <img src="1.png" alt="verdensmål 1">
                <img src="2.png" alt="verdensmål 2">
                <img src="3.png" alt="verdensmål 3">
                <img src="4.png" alt="verdensmål 4">
                <img src="5.png" alt="verdensmål 5">
                <img src="6.png" alt="verdensmål 6">
                <img src="7.png" alt="verdensmål 7">
                <img src="8.png" alt="verdensmål 8">
                <img src="9.png" alt="verdensmål 9">
                <img src="10.png" alt="verdensmål 10">
                <img src="11.png" alt="verdensmål 11">
                <img src="12.png" alt="verdensmål 12">
                <img src="13.png" alt="verdensmål 13">
                <img src="14.png" alt="verdensmål 14">
                <img src="15.png" alt="verdensmål 15">
                <img src="16.png" alt="verdensmål 16">
                <img src="17.png" alt="verdensmål 17">
                <img src="18.png" alt="verdensmål 18">
            </div>
        </div>
    </div>

<?php get_footer(); ?>
