<div id="footerwrap">
  <div class="container">
    <div class="row">

<!--Loop#1 Company Info-->

	<?php
		$args = array(
		  'page_id' => '69'
		);
		$wp_query = new WP_Query($args);

		if ($wp_query->have_posts() ) :
			while ($wp_query->have_posts() ) :
				$wp_query->the_post();
			endwhile; else : echo '<p>No post found</p>';
		endif;
	?>

        <div class="col-lg-4">
          <h4><?php the_title(); ?></h4>
          <div class="hline-w"></div>
          <p><?php the_content(); ?></p>
        </div>

<!--Loop#2 Social Links-->


      <div class="col-lg-4">
        <h4>Social Links</h4>
        <div class="hline-w"></div>
        <p>
          <a href="#"><i class="fa fa-dribbble"></i></a>
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-tumblr"></i></a>
        </p>
      </div>

<!--Loop#3 Address-->
	<?php
		$args = array(
		  'page_id' => '71'
		);
		$wp_query = new WP_Query($args);

		if ($wp_query->have_posts() ) :
			while ($wp_query->have_posts() ) :
				$wp_query->the_post();
			endwhile; else : echo '<p>No post found</p>';
		endif;
	?>

      <div class="col-lg-4">
        <h4><?php the_title(); ?></h4>
        <div class="hline-w"></div>
        <p>
          <?php the_content(); ?>
        </p>
      </div>

    </div>
  </div>
</div>

<div id="copyrights">
  <div class="container">
    <p>
      &copy; Copyrights <strong>Solid</strong>. All Rights Reserved
    </p>
    <div class="credits">
      Created with Solid template by <a href="https://templatemag.com/">TemplateMag</a>
    </div>
  </div>
</div>
<!-- / copyrights -->

<!-- JavaScript Libraries -->
<script src="<?php blogInfo('template_url'); ?>/lib/jquery/jquery.min.js"></script>
<script src="<?php blogInfo('template_url'); ?>/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php blogInfo('template_url'); ?>/lib/php-mail-form/validate.js"></script>
<script src="<?php blogInfo('template_url'); ?>/lib/prettyphoto/js/prettyphoto.js"></script>
<script src="<?php blogInfo('template_url'); ?>/lib/isotope/isotope.min.js"></script>
<script src="<?php blogInfo('template_url'); ?>/lib/hover/hoverdir.js"></script>
<script src="<?php blogInfo('template_url'); ?>/lib/hover/hoverex.min.js"></script>

<!-- Template Main Javascript File -->
<script src="<?php blogInfo('template_url'); ?>/js/main.js"></script>

</body>
</html>
