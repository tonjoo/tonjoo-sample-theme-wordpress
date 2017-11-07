<?php
  get_header();
?>

<div class='container'>
  <div class='row'>
    <div class='col-md-12'>
      <?php if( have_posts() ): ?>
      <?php while ( have_posts() ) : the_post() ?>
        <div class="blog-post">
          <h2 class="blog-post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
          <p class="blog-post-meta"><?php the_date() ?><a href="<?php the_permalink() ?>"><?php the_author() ?></a></p>
          <?php
            the_content();
          ?>
        </div>

      <?php
            endwhile;
            ?>
      <?php else: ?>
        <p> No Post Found </p>
      <?php endif ?>

    </div>
  </div>


</div>

<?php
  get_footer();
?>
