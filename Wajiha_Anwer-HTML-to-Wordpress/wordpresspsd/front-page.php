<?php

/*
Template Name: Front Page Template
*/

get_header();
?>
<div class="container">
  <div class="row">
    <div class="col-8">

<?php
if ( have_posts() ) :
while ( have_posts() ) : the_post();
  the_content();
endwhile;
else :
_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>
</div>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
