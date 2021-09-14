<?php

get_header();  ?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/cat2.jpg') ?>;)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">The blog for all things CAT</h1>
        <div class="page-banner__intro">
          <p>Cats RULE</p>
          <span style="font-size: 12px;">Everything else DROOLS</span>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">
      <?php
      While(have_posts()) {
        the_post(); ?>
        <div class="post-item">
          <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="metabox">
            <p>Posted by: <?php the_author_posts_link(); ?> on <?php the_time('n.j.y.') ?> in <?php echo get_the_category_list(', ') ?></p>
          </div>
          <div class="generic-content">
            <?php the_excerpt(); ?>
            <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue Reading &raquo;</a></p>
          </div>
        </div>

     <?php } 
     echo paginate_links();
     ?>
    </div>



<?php get_footer();
?>