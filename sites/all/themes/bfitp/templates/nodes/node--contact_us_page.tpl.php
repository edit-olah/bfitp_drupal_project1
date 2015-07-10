<main>
    <div id="MainContent">

	<!-- CONTACT PAGE beginning -->

	<div class="page" id="Contact">
	    <header>
		<div class="contactContent">
		    <div class="container">
			<?php if(isset($title)){
			    print '<h1>' . $title . '</h1>';
			} ?>
			
			<?php if(isset($body[0]['value'])){
			    print '<div class="contactText"><div class="summary">' 
			    . $body[0]['value'] 
			    . '</div><!-- /.summary --></div><!-- /.contactText -->';
			} ?>
			    
		    </div><!-- /.container -->
		</div><!-- /#contactContent -->
	    </header>
	</div><!-- / .page#Contact -->

	<!-- CONTACT PAGE end -->


	<!-- OUR PORTFOLIO GRID beginning -->

	<div class="page" id="ContactUsGrid">

	    <div class="container">
		<ul class="grid grid-stretched-layout">
		    <li>
			<div class="grid-contentHolder">
			    <article>
				<img alt="" src="images/bfitp_placeholder_img_300x120.png" >
				<h2>Contact Peter</h2>
				<p>Peter Whyte</p>
				<p>Web developer</p>
				<p class="min-height-applied">HTML5, CSS3, PHP, JavaScript, jQuery, Drupal, Angular.js</p>
				<p class="email">Email: <a href="mailto:peter.whyte@barefootinthepark.co.uk" class="min-height-applied">peter.whyte@barefootinthepark.co.uk</a></p>

				<div class="socialIcons">
				    <a href="#" target="_blank"><img alt="LinkedIn icon" src="images/linkedin_icon.png" ></a>
				    <a href="#" target="_blank"><img alt="email icon" src="images/email_icon.png" ></a>
				    <a href="#" target="_blank"><img alt="twitter icon" src="images/twitter_icon.png" ></a>
				    <a href="#" target="_blank"><img alt="instagram icon" src="images/instagram_icon.png" ></a>
				    <a href="#" target="_blank"><img alt="web icon" src="images/web_icon.png" ></a>
				</div><!-- /.socialIcons -->
				<p class="button"><a href="/peter-whyte.html">More about Peter >></a></p>
			    </article>
			</div><!-- /.gridContentHolder -->
		    </li>
		    <li>
			<div class="grid-contentHolder">
			    <article>
				<img alt="" src="images/bfitp_placeholder_img_300x120.png" >
				<h2>Contact Edit</h2>
				<p>Edit Olah</p>
				<p>Web developer</p>
				<p class="min-height-applied">HTML5, CSS3, JavaScript, jQuery, SASS, Gulp</p>
				<p class="email">Email: <a href="mailto:edit.olah@barefootinthepark.co.uk" class="min-height-applied">edit.olah@barefootinthepark.co.uk</a></p>
				<div class="socialIcons">
				    <a href="https://uk.linkedin.com/in/editolah" target="_blank"><img alt="LinkedIn icon" src="images/linkedin_icon.png" ></a>
				    <a href="#" target="_blank"><img alt="email icon" src="images/email_icon.png" ></a>
				    <a href="#" target="_blank"><img alt="twitter icon" src="images/twitter_icon.png" ></a>
				    <a href="#" target="_blank"><img alt="instagram icon" src="images/instagram_icon.png" ></a>
				    <a href="#" target="_blank"><img alt="web icon" src="images/web_icon.png" ></a>
				</div><!-- /.socialIcons -->
				<p class="button"><a href="/edit-olah.html">More about Edit >></a></p>
			    </article>
			</div><!-- /.gridContentHolder -->
			<div class="wrapper-decoImg">
			    <div class="container-decoImg">
				<div class="decoImg"
				     <?php if(isset($field_contact_us_filler_image[0]['uri'])) {
					drupal_add_css('html body .container-decoImg .decoImg{background:url(' . file_create_url($field_contact_us_filler_image[0]['uri']) . ') 0 0 no-repeat; background-size: 106% auto;}', $option['type'] = 'inline');
				    } ?>
				>
				</div>
			    </div>
			</div>
		    </li>
		    <li>
			<section>
			    <header>
				<?php if(isset($field_body_header_2[0][value])){
				    print '<h2 class="sidebar-header">' . $field_body_header_2[0][value] . '</h2>';
				} ?>
			    </header>
			    
			    <?php if (isset($field_additional_info_block_ref['und'][0])) {
				$delta = explode(":", $field_additional_info_block_ref['und'][0]['moddelta']);
				$printBlock = module_invoke($delta[0], 'block_view', $delta[1]);
				print render($printBlock['content']);

			    } ?>
			    
			</section>
		    </li>				
		</ul><!-- /.grid.grid-stretched-layout -->

	    </div><!-- /.container -->

	</div> <!-- /.page#OurPortfolioGrid -->

	<!-- HOME PORTFOLIO PAGE end -->                  



    </div><!-- / #MainContent -->
</main>