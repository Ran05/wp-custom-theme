
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
        </h2> 



        <p><?php the_content(); ?> <!-- added wp call content--> 
        </p>
        <!-- excerpt meaning to shortcut on wp -->
      </div><!-- /.blog-post -->

      <?php endwhile; ?>
      <?php else: ?>
        <p> <?php __("No Page Found."); ?> </p>

      <?php endif; ?>

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Archives</h4>
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