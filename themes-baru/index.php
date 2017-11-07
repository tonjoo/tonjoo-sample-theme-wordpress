<?php
  get_header();
?>

<div class='container'>
  <div class="blog-header">
    <h1 class="blog-title">The Bootstrap Blog</h1>
    <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
  </div>

  <div class='row'>
    <div class='col-md-9'>
      <?php if( have_posts() ): ?>
      <?php while ( have_posts() ) : the_post() ?>
        <div class="blog-post">
          <h2 class="blog-post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
          <p class="blog-post-meta"><?php the_date() ?><a href="<?php the_permalink() ?>"><?php the_author() ?></a></p>
          <?php
            the_excerpt();
          ?>
        </div>

      <?php
            endwhile;
            echo paginate_links();
            ?>
      <?php else: ?>
        <p> No Post Found </p>
      <?php endif ?>

    </div>
    <div class='col-md-3'>
        <?php dynamic_sidebar('sidebar-utama'); ?>
    </div>
  </div>


</div>

<?php
  get_footer();
?>
