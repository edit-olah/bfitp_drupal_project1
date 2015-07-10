<main>
    <div id="MainContent">

	<!-- RESUME HEADER PAGE beginning -->
	<article>
	    <header>
		<div class="page" id="DetailPageHeader">

		    <div class="container">

			<div class="leftContainer">
			    <?php if(isset($field_detail_page_header_image )){
				print '<img alt="' . $field_detail_page_header_image [0]['alt'] . 
					'" alt="' . $field_detail_page_header_image [0]['title'] . 
					'" src="' . image_style_url('detail_page_header_image', $field_detail_page_header_image [0]['uri']) .'" />';
			    } ?>
			</div><!--/.leftContainer -->

			<div class="rightContainer">
			    <?php if(isset($field_top_section_header_2[0][value])){
				print '<h2><span class="smallTextHeader">' . $field_top_section_header_2[0][value] . '</span></h2>';
			    } ?>
			    
			    <?php if(isset($title)){
				print '<h1>' . $title . '</h1>';
			    } ?>
			    <?php if(isset($field_top_section_header_3[0][value])){
				print '<h3 class="tagline">' . $field_top_section_header_3[0][value] . '</h3>';
			    } ?>
			</div> <!--/.rightContainer -->

		    </div><!-- /.container -->

		</div> <!-- /.page#DetailPageHeader -->
	    </header>
	    <!-- RESUME HEADER PAGE end -->		    

	    <!-- ABOUT EDIT PAGE beginning -->

	    <div class="page blog-post-article" id="DetailPageMainContent">
		<div class="container">
		    <div class="leftContainer">
			<?php if(isset($body[0]['value'])){
			    print $body[0]['value'];
			} ?>
		    </div><!--/.leftContainer -->


		    <div class="rightContainer">
			<section>
			    <header>
				<?php if(isset($field_first_section_header_2[0][value])){
				    print '<h2>' . $field_first_section_header_2[0][value] . '</h2>';
				} ?>
			    </header>
			    
			    <?php if (isset($field_additional_info_block_ref['und'][0])) {
				$delta = explode(":", $field_additional_info_block_ref['und'][0]['moddelta']);
				$printBlock = module_invoke($delta[0], 'block_view', $delta[1]);
				print render($printBlock['content']);

			    } ?>
			    
			    
			</section>
		    </div><!--/.rightContainer -->	

		</div><!-- /.container -->
	    </div><!-- / .page#DetailPageMainContent -->

	    <!-- ABOUT EDIT PAGE end -->




	    <!-- CONTACT EDIT PAGE beginning -->
	    <section>
		<div class="page" id="ContactIndi">

		    <div class="container">

			<div class='leftContainer'>
			    <h1>Contact Edit</h1>
			    <h2>
				Get in touch
			    </h2>
			    <p>If you are interested in hiring me, please drop me an email. I would be happy to send you my up-to-date resume.</p>
			    <div class="contactDetails">
				<p class="highlighted"><span class='bold large-text'>Edit Olah</span>, <span class='semiBold semi-large-text'>Web developer</span></p>


				<p class="email">Email: <a href="mailto:edit.olah@barefootinthepark.co.uk" class="min-height-applied">edit.olah@barefootinthepark.co.uk</a></p>

				<div class="buttons">
				    <p class="button"><a href="/edit-olah.html">See Edit's portfolio >></a></p>
				    <p class="button"><a href="/edit-olah-blog.html">Go to Edit's blog >></a></p>
				</div>
			    </div>
			    <div class="socialIcons max-height-applied">
				<a href="https://uk.linkedin.com/in/editolah" target="_blank"><img alt="LinkedIn icon" src="images/linkedin_icon.png" ></a>
				<a href="#" target="_blank"><img alt="email icon" src="images/email_icon.png" ></a>
				<a href="#" target="_blank"><img alt="twitter icon" src="images/twitter_icon.png" ></a>
				<a href="#" target="_blank"><img alt="instagram icon" src="images/instagram_icon.png" ></a>
				<a href="#" target="_blank"><img alt="web icon" src="images/web_icon.png" ></a>
			    </div><!-- /.socialIcons -->
			</div><!--/.leftContainer -->

			<div class='rightContainer'>
			    <img alt="" src="images/bfitp_placeholder_img_300x300.png" >
			</div> <!--/.rightContainer -->

		    </div><!-- /.container -->

		</div> <!-- /.page#ContactIndi -->
	    </section>
	    <!-- CONTACT EDIT PAGE end -->

	</article>
    </div><!-- / #MainContent -->
</main>