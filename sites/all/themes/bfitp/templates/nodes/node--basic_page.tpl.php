<main>
    <div id="MainContent">

	<!-- HEADER beginning -->
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
			    <?php if(isset($title)){
				print '<h1>' . $title . '</h1>';
			    } ?>
			    <?php if(isset($field_top_section_header_3[0]['value'])){
				print '<h3 class="tagline">' . $field_top_section_header_3[0]['value'] . '</h3>';
			    } ?>
			</div> <!--/.rightContainer -->

		    </div><!-- /.container -->

		</div> <!-- /.page#DetailPageHeader -->
	    </header>
	    <!-- HEADER end -->		    

	    <!-- MAIN CONTENT beginning -->

	    <div class="page" id="DetailPageMainContent">
		<section>
		    <div class="container">
			<?php if(isset($body[0]['value'])){
			    print $body[0]['value'];
			} ?>			
		    </div>
		</section>
	    </div><!-- / .page#DetailPageMainContent -->

	    <!-- MAIN CONTENT end -->

	</article>
    </div><!-- / #MainContent -->
</main>