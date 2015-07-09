<main>
    <div id="MainContent">
	<article>
	<!-- RESUME HEADER PAGE beginning -->

	<div class="page" id="DetailPageHeader">
	    <header>
		<div class="container">
		    <?php if(isset($title)){
			print '<h1>' . $title . '</h1>';
		    } ?>
		    
		    <div class="leftContainer">
			<?php if(isset($field_top_section_image)){
			    print '<img alt="' . $field_top_section_image[0]['alt'] . 
				    '" alt="' . $field_top_section_image[0]['title'] . 
				    '" src="' . image_style_url('detail_page_header_image', $field_top_section_image[0]['uri']) .'" />';
			} ?>
		    </div><!--/.leftContainer -->

		    <div class="rightContainer">
			<?php if(isset($field_top_section_header_1[0][value])){
			    print '<h2>' . $field_top_section_header_1[0][value] . '</h2>';
			} ?>
			<?php if(isset($field_top_section_header_2[0][value])){
			    print '<h2>' . $field_top_section_header_2[0][value] . '</h2>';
			} ?>
			<?php if(isset($field_top_section_header_3[0][value])){
			    print '<h3 class="tagline">' . $field_top_section_header_3[0][value] . '</h3>';
			} ?>
		    </div> <!--/.rightContainer -->

		</div><!-- /.container -->
	    </header>
	</div> <!-- /.page#DetailPageHeader -->

	<!-- RESUME HEADER PAGE end -->		    

	<!-- ABOUT EDIT PAGE beginning -->

	<div class="page" id="DetailPageMainContent">
	    <?php if(isset($body[0]['value'])){
		print $body[0]['value'];
	    } ?>			

	</div><!-- / .page#DetailPageMainContent -->

	<!-- ABOUT EDIT PAGE end -->

       </article> 


	<!-- CONTACT EDIT PAGE beginning -->

	<div class="page" id="ContactIndi">
	    <section>
		<div class="container">

		    <div class='leftContainer'>
			<header>
			    <h1>Contact Edit</h1>
			    <h2>
				Get in touch
			    </h2>
			    <p>If you are interested in hiring me, please drop me an email. I would be happy to send you my up-to-date resume.</p>
			</header>

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
	    </section>
	</div> <!-- /.page#ContactIndi -->

	<!-- CONTACT EDIT PAGE end -->

    </div><!-- / #MainContent -->
</main>