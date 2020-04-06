<?php
/**
 * Template name: Videos
 */

include("header.php");
?>

<section class="u-section">
    <div class="u-l-container--center">
        <div class="u-l-container u-l-horizontal-padding u-l-vertical-padding">

           <div class="c-videos__container">
               <?php

                   /**
                   * Get Vimeo thumbnails
                  */
                  function getVideoThumb($id) {
                     $data = "http://img.youtube.com/vi/$id";
                     $json = json_decode($data);
                     return $data . '/' . 'hqdefault.jpg';
                  }
                  //echo getVideoThumb('T788yR74xnI');

               if( have_rows('videos') ):

               // loop through the rows of data
               while ( have_rows('videos') ) : the_row();

                  $url = get_sub_field('video');
                  $videoTitle = get_sub_field('video_title');

                  //$videoID = preg_replace("#[&\?].+$#", "", preg_replace("#http://(?:www\.)?youtu\.?be(?:\.com)?/(embed/|watch\?v=|\?v=|v/|e/|.+/|watch.*v=|)#i", '', $iframe));
                  $videoID = preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
                  $youtube_id = $match[1];
  
                  // get iframe HTML
                  $iframe = $url;


                  // use preg_match to find iframe src
                  preg_match('/src="(.+?)"/', $iframe, $matches);
                  $src = $matches[1];


                  // add extra params to iframe src
                  $params = array(
                     'controls'     => 1,
                     'hd'           => 1,
                     'autohide'     => 0,
                     'showinfo'     => 0,
                     'modestbranding' => 0,
                     'enablejsapi' => 1,
                     'html5' => 1
                  );

                  $new_src = add_query_arg($params, $src);

                  $iframe = str_replace($src, $new_src, $iframe);


                  // add extra attributes to iframe html
                  $attributes = 'frameborder="0"';

                  $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                  echo '<div class="c-videos">';
                     //echo '<div class="c-videos__cover play-button"></div>';
                     echo '<h3 class="c-videos__title">' . $videoTitle . '</h3>';
                     echo '<div class="c-videos__wrap" style="background-image: url(' . getVideoThumb($youtube_id) . '); ">';
                        echo '<div class="c-videos__inner">';
                           echo $iframe;
                        echo '</div>';
                     echo '</div>';
                  echo '</div>';


               endwhile;

               else :

               // no rows found
               echo 'Sorry! No Videos';

               endif;

               ?>
         </div>

        </div>
    </div>
</section>

<?php include("footer.php"); ?>