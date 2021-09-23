<?php 

/*  Template Name:  Home */

get_header();

while (have_posts()) {
  the_post(); ?>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <?php the_content(); ?>
  <iframe src="https://matrix.recolorado.com/Matrix/public/IDX.aspx?idx=0ff92fcc" width="100%" height="100%" frameborder="0" marginwidth="0" marginheight="0"></iframe>
<?php }

get_footer();
?>
</body>