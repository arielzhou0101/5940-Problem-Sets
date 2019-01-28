<?php get_header(); ?>
  <!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->
  <div id="headerwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <h3><?php blogInfo('name'); ?></h3>
          <h1>This is a one-page theme integrated for PS#1.</h1>
          <h5><?php blogInfo('description'); ?></h5>
        </div>
        <div class="col-lg-8 col-lg-offset-2 himg">
          <img src="<?php echo get_template_directory_uri(); ?>/img/browser.png" class="img-responsive">
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /headerwrap -->

  <!-- *****************************************************************************************************************
	 MERITS
	 ***************************************************************************************************************** -->
  <div id="service">
    <div class="container">
      <div class="row centered">

		  <?php
			  $args = array(
					"post_type" => "merit"
			 );
			  $wp_query = new WP_Query($args);
		  ?>

		 <?php if ( $wp_query->have_posts() ) :
		  		while ($wp_query->have_posts() ):
		  			$wp_query->the_post();
		  ?>
			<div class="col-md-4">
				<i class="fa fa-heart-o"></i>

				<h4><?php the_title(); ?></h4>
				<p><?php the_content(); ?></p>
				<p><br/><a href="#" class="btn btn-theme">More Info</a></p>
			</div>
		  <?php endwhile; else : ?>
		<?php endif; ?>
		</div>
    </div>
  </div>

  <!-- *****************************************************************************************************************
	 PORTFOLIO SECTION
	 ***************************************************************************************************************** -->
<div id="portfoliowrap">
    <h3>LATEST WORKS</h3>

    <div class="portfolio-centered">
      <div class="recentitems portfolio">

		  <?php
			  $args = array(
					"post_type" => "project"
			  );

			  $wp_query = new WP_Query($args);
		  ?>

		 <?php if ( $wp_query->have_posts() ) :
		  		while ($wp_query->have_posts() ):
		  			$wp_query->the_post(); ?>
		  			<div class="portfolio-item graphic-design">
					<div class="he-wrap tpl6">
        			<?php the_post_thumbnail(); ?>


            <div class="he-view">
              <div class="bg a0" data-animate="fadeIn">
                <h3 class="a1" data-animate="fadeInDown"><?php the_title(); ?></h3>
                <a data-rel="prettyPhoto" href="<?php echo get_template_directory_uri(); ?>/img/portfolio/portfolio_09.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                <a href="single-project.html" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
              </div>
              <!-- he bg -->
            </div>
            <!-- he view -->
          </div>
          <!-- he wrap -->
        </div>
        <!-- end col-12 -->

		<?php endwhile;else : ?>
		<?php endif; ?>
<!--end of loop-->

      </div>
      <!-- portfolio -->
    </div>
    <!-- portfolio container -->
  </div>
  <!--/Portfoliowrap -->

  <!-- *****************************************************************************************************************
	 TESTIMONIALS
	 ***************************************************************************************************************** -->
	<?php
	  $args = array(
	  		'page_id' => '63'
	  );
	  $wp_query = new WP_Query($args);

			if ($wp_query->have_posts()) :
				while ($wp_query->have_posts()) :
					$wp_query->the_post();
				endwhile; else : echo '<p>No post found</p>';
			endif;
		$featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
	    ?>

 <div id="twrap" style="background-image: url(<?php echo $featured_img_url; ?>)">

	 <div class="container centered">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          	  <i class="fa fa-heart-o"></i>

			  <p><?php the_content(); ?></p>
			  <h4><?php the_title(); ?></h4><br/>

        </div>
      </div>
    </div>

 </div>

  <!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
   <?php get_footer(); ?>
