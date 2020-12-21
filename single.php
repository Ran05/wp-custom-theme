
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
        <h2 class="blog-post-title"><?php the_title(); ?></h2>  <!-- added wp functions-->
        <p class="blog-post-meta"><?php echo date('M/Y'); ?> <a href="<?php get_author_posts_url(get_the_author_meta("ID")); ?>"> 
        <?php get_the_author_meta("nickname"); ?> </a></p>

        <!-- add featured image -->
            <?php if(has_post_thumbnail()): ?>
                <div class="post-thumb">
                   <?php the_post_thumbnail();?>
                </div>
            <?php endif; ?>
       
        <p><?php the_content(); ?> <!-- added wp call content--> 
        <a href="<?php the_permalink(); ?>">Read more</a> <!--added permalink to read more post-->
        </p> 
        <hr>
        <?php comments_template(); ?> <!-- comment template --> 
        <!-- excerpt meaning to shortcut on wp -->
      </div><!-- /.blog-post -->

      <?php endwhile; ?>
      <?php else: ?>
        <p> <?php __("No Post Found."); ?> </p>

      <?php endif; ?>

  

</main><!-- /.container -->

<?php get_footer();?>