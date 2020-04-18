
<?php
/**
 * Template name: Archive
 */

include("header.php");
?>

<section class="u-section">
    <div class="u-l-container--shallow">   
        <div class="u-l-container u-l-container--row u-l-horizontal-padding u-l-vertical-padding">   

        <?php
            $loop = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => -1,
                'orderby' => 'post_date',
                'order' => 'DEC'
            ]);
            while ( $loop->have_posts() ) : $loop->the_post();
                echo '<div class="wp-core">';
                    echo '<h2 class="wp-core__title c-site-headings c-site-headings--h2">' . get_the_title() . '</h2>';
                    echo '<div>' . the_content() . '</div>';
                echo '</div>';
            endwhile;
        ?>

        </div>
    </div>
</section>			


<?php include("footer.php"); ?>