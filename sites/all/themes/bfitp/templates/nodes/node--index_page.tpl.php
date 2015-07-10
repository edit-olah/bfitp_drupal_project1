<main>
    <div id="MainContent">

	<!-- HERO Panel/page beginning -->
	<header>
	    <div id="Hero">
		<div class="heroContent"
		    <?php if(isset($field_hero_image[0]['uri'])) {
		       drupal_add_css('html body .heroContent{background:url(' . file_create_url($field_hero_image[0]['uri']) . ') 0 0 no-repeat; background-size: 100% auto;}', $option['type'] = 'inline');
		    } ?>
		>
		    <div class="container">
			<div class="heroText">
			    <section>
				<?php if(isset($field_hero_title[0]['value'])){
				    print '<h1>' . $field_hero_title[0]['value'] . '</h1>';
				} ?>
				<?php if(isset($field_tagline[0]['value'])){
				    print '<h2 class="tagline">' . $field_tagline[0]['value'] . '</h2>';
				} ?>
				<?php if(isset($body[0]['value'])){
				    print '<div class="summary">' . $body[0]['value'] . '</div><!-- /.summary -->';
				} ?>
			    </section>
			</div><!-- /.heroText -->
		    </div><!-- /.container -->
		</div><!-- /.heroContent -->
	    </div><!-- / #Hero -->
	</header>
	<!--  HERO Panel/page end -->


	<!-- OUR PORTFOLIO GRID beginning -->

	<div class="page">

	    <section>
		<div class="container">
		    <header>
			<?php if(isset($title)){
			    print '<h1>' . $title . '</h1>';
			} ?>
		    </header>
		    
		    <!-- this is where the views will be pulled in -->
		    <?php if (isset($field_main_content_block_ref['und'][0])) {
			$delta = explode(":", $field_main_content_block_ref['und'][0]['moddelta']);
			$printBlock = module_invoke($delta[0], 'block_view', $delta[1]);
			print render($printBlock['content']);
			
		    } ?>
		    
		    
		</div><!-- /.container -->
	    </section>

	</div> <!-- /.page#OurPortfolioGrid -->

	<!-- OUR PORTFOLIO GRID end -->                  



    </div><!-- / #MainContent -->
</main>