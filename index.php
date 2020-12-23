
<?php get_header();?>


<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
       My Latest Post
      </h3>
<!-- blog that im working with -->

      <?php if(have_posts()) : ?> <!-- For checking  post-->

        <?php while(have_posts()) : the_post(); ?>
           <div class="blog-post">
            <h2 class="blog-post-title">
          <?php the_title(); ?>
        </h2>  <!-- added wp functions-->
        <p class="blog-post-meta"><?php the_date(); ?> <?php the_time(); ?>
        <!-- added time and date of post-->
        by <a href="<?php get_author_posts_url(get_the_author_meta("ID")); ?>"> 
        <?php get_the_author_meta("nickname"); ?> </a></p> 

             <!-- add featured image -->
             <?php if(has_post_thumbnail()): ?>
                <div class="post-thumb">
                   <?php the_post_thumbnail();?>
                </div>
            <?php endif; ?>


        <p><?php the_excerpt();  //the_content(); ?> <!-- added wp call content--> 
      <a href="<?php the_permalink(); ?>">Read more</a> <!--added permalink to read more post-->
        </p>
        <!-- excerpt meaning to shortcut on wp -->
      </div><!-- /.blog-post -->

      <?php endwhile; ?>
      <?php else: ?>
        <p> <?php __("No Post Found."); ?> </p>

      <?php endif; ?>

      

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div><!-- /.blog-main -->

<!-- added a sidebar here -->

    <aside class="col-md-4 blog-sidebar">
      <?php if(is_active_sidebar('sidebar')):?>

        <?php dynamic_sidebar('sidebar'); ?>

      <?php endif; ?>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<?php get_footer();?>