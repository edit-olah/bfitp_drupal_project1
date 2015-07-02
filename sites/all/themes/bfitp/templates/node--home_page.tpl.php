<main>
    <div id="MainContent">

	<!-- HERO Panel/page beginning -->
	<div id="Hero">

	    <div class="heroContent" id="home"
		<?php if(isset($field_hero_image[0]['uri'])) {
		   drupal_add_css('html body .heroContent{background:url(' . file_create_url($field_hero_image[0]['uri']) . ') 0 0 no-repeat; background-size: 100% auto;}', $option['type'] = 'inline');
		} ?>
	    >
		<div class="container">
		    <div class="heroText">
			<section>
			    <?php if(isset($field_hero_title[und][0]['value'])){
				print '<h1>' . $field_hero_title[und][0]['value'] . '</h1>';
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

	<!-- HERO Panel/page end -->


	<!-- ABOUT US PAGE beginning -->

	<div class="page" id="About-us">

	    <div class="container">
		<div id="AboutUsContentHolder">
		    <section>
			<?php if(isset($field_first_section_text[0]['value'])){
				print $field_first_section_text[0]['value'];
			} ?>
		    </section>
		</div><!-- /#AboutUsContentHolder -->
	    </div><!-- /.container -->

	</div> <!-- /.page#About-us -->

	<!-- ABOUT US PAGE end -->

	<!-- HOME PORTFOLIO PAGE beginning -->

	<div class="page" id="HomePortfolio">

	    <div class="container">

		<ul class="grid">
		    
		    <?php
		    if(isset($field_main_content_block_ref['und'][0])){
			foreach($field_main_content_block_ref['und'] as $block){
			    $delta = explode(":", $block['moddelta']);
			    $whole_block = block_load($delta[0],$delta[1]);
			    $block_to_render = _block_get_renderable_array(_block_render_blocks(array($whole_block)));
			    print drupal_render($block_to_render);
			}
		    } ?>

		    <li class="click-follow">
			<div class="grid-contentHolder">
			    <div class="leftContainer">
				<img alt="" src="images/bfitp_placeholder_img_300x300.png" >
			    </div>
			    <div class="rightContainer">
				<section>
				    <h2>Peter Whyte</h2>
				    <h3>Mid-weight web developer</h3>
				    <p class="button"><a href="/peter-whyte.html">Go to Peter's portfolio >></a></p>
				</section>
			    </div>

			</div><!-- /.grid-contentHolder -->
		    </li>
		    <li class="click-follow">
			<div class="grid-contentHolder">
			    <div class="leftContainer">
				<img alt="" src="images/bfitp_placeholder_img_300x300.png" >
			    </div>
			    <div class="rightContainer">
				<section>
				    <h2>Edit Olah</h2>
				    <h3>Junior web developer</h3>
				    <p class="button"><a href="/edit-olah.html">Go to Edit's portfolio >></a></p>
				</section>
			    </div>

			</div><!-- /.grid-contentHolder -->
		    </li>
		</ul><!-- /.grid -->

	    </div><!-- /.container -->

	</div> <!-- /.page#HomePortfolio -->

	<!-- HOME PORTFOLIO PAGE end -->                  



    </div><!-- / #MainContent -->
</main>