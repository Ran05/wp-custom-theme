
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

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
          <!-- <li><a href="#">March 2014</a></li>
          <li><a href="#">February 2014</a></li>
          <li><a href="#">January 2014</a></li>
          <li><a href="#">December 2013</a></li>
          <li><a href="#">November 2013</a></li>
          <li><a href="#">October 2013</a></li>
          <li><a href="#">September 2013</a></li>
          <li><a href="#">August 2013</a></li>
          <li><a href="#">July 2013</a></li>
          <li><a href="#">June 2013</a></li>
          <li><a href="#">May 2013</a></li>
          <li><a href="#">April 2013</a></li> -->
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<?php get_footer();?>