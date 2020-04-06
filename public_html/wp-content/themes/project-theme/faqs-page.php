<?php
/**
 * Template name: FAQs
 */

include("header.php");
?>

<section class="u-section">
    <div class="u-l-container--center">   
        <div class="u-l-container u-l-horizontal-padding u-l-vertical-padding">

        	<?php
            if( have_rows('faqs') ):

            // loop through the rows of data
            while ( have_rows('faqs') ) : the_row();

            $faqsTitle = get_sub_field('faqs_title');
            $faqsDescription = get_sub_field('faqs_description');

            ?>
                <div class="c-faqs">
                <? if( $faqsDescription ) : ?>
                    <a class="c-faqs__title accordion">
                        <?php
                            echo $faqsTitle;
                            echo '<span class="chevron"></span>'; 
                        ?>
                    </a>
                    <div class="c-faqs__details">
                        <div class="c-faqs__content">
                            <?= $faqsDescription; ?>
                        </div>     
                    </div>
                <? else : ?>
                    <div class="c-faqs__title c-faqs__title--no-descrpt zaccordion">
                        <?php
                            echo $faqsTitle; 
                        ?>
                    </div>
                <? endif; ?>
                </div>

            <?php
                endwhile;
                else :
                // no rows found
                echo 'Sorry! There are currently no FAQs';
                endif;
			?>

        </div>
    </div>
</section>

<?php include("footer.php"); ?>