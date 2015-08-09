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
					'" title="' . $field_detail_page_header_image [0]['title'] . 
					'" src="' . image_style_url('detail_page_header_image', $field_detail_page_header_image [0]['uri']) .'" />';
			    } ?>
			</div><!--/.leftContainer -->

			<div class="rightContainer">
			    <?php if(isset($field_top_section_header_2[0]['value'])){
				print '<h2><span class="smallTextHeader">' . $field_top_section_header_2[0]['value'] . '</span></h2>';
			    } ?>
			    
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

	    <div class="page blog-post-article" id="DetailPageMainContent">
		<div class="container">
		    <div class="leftContainer">
			<?php if(isset($body[0]['value'])){
			    print $body[0]['value'];
			} ?>
		    </div><!--/.leftContainer -->

		    <!-- SIDEBAR beginning -->
		    
		    <div class="rightContainer">
			<section>
			    <?php 
				$taxonomyTermsUsed = '';
				foreach($field_taxonomy_terms as $term){
				    // creating a string of taxonomy terms
				    $taxonomyTermsUsed .= $term['tid'] . ',';
				}
				// take off the last comma of the string
				$taxonomyTermsUsed = rtrim($taxonomyTermsUsed, ",");
				// we pass the two variables into our function in the bfitp_general.module file, whatever the function returns we pass into a variable
				$related_articles = get_related($taxonomyTermsUsed, $nid);
				// count articles and if there is at least one output 'related blog posts' section
				if(count($related_articles) > 0) {
				    ?>
				    <header>
					<h2> Related blog posts </h2>
				    </header>
			    
				    <ul class="grid grid-full-width blog-section">

				    <?php 

					foreach($related_articles as $related_article){
				    ?>
					    <li class="click-follow">
						<div class="grid-contentHolder">
						    <article>
							
							<?php 
							    // imgId, title, subt, summary, and nid are 
							    // comming from the database query from the 
							    // custom module file bfitp_general.module
							    $imguri = file_load($related_article->imgId); 
							    print '<img alt="' . $related_article->title . 
							    '" title="' . $related_article->title . 
							    '" src="' . image_style_url('detail_page_header_image', $imguri->uri) .'" />';
							?>
							<h3><?php print $related_article->title; ?></h3>
							<h4><?php print $related_article->subt; ?></h4>
							<p><?php print ellipse($related_article->summary, 70); ?></p>
							<p class="button"><?php print l('More details >>', 'node/' . $related_article->nid); ?> </p>
						    </article>
						</div><!-- /.grid-contentHolder -->
					    </li>
					<?php
					}
				    ?>
				    </ul>
				<?php
				    
				} else {
				    
				    // if there are no related articles by taxonomy, output 'latest blog posts' block view
				    print '<header><h2> Latest blog posts </h2></header>';
				    
			    
				    if (isset($field_additional_info_block_ref['und'][0])) {
					$delta = explode(":", $field_additional_info_block_ref['und'][0]['moddelta']);
					$printBlock = module_invoke($delta[0], 'block_view', $delta[1]);
					print render($printBlock['content']);

				    }
				    
				}
			    ?>
			    
			</section>
		    </div><!--/.rightContainer -->
		    
		    <!-- SIDEBAR end -->

		</div><!-- /.container -->
	    </div><!-- / .page#DetailPageMainContent -->

	    <!-- MAIN CONTENT end -->



	<?php if(isset($field_entity_ref[0]['target_id'])){
	    $contact = $field_entity_ref[0]['entity'];
	?>
	<!-- INDIVIDUAL CONTACT SECTION beginning -->
		    
	    <div class="page" id="ContactIndi">
		<section>
		    <div class="container">

			<div class="leftContainer">
			    <header>
				<div class="leftContainer subcontainer">
				    <h1><?php print $contact->title;?></h1>
				    <?php if(isset($contact->field_body_header_2['und'][0]['value'])){
					print '<h2>' . $contact->field_body_header_2['und'][0]['value'] . '</h2>';
				    }?>
				    <?php if(isset($contact->body['und'][0]['value'])){
					print $contact->body['und'][0]['value'];
				    }?> 
				</div>
				<div class="rightContainer badge">
				    <a class="membershipBadge" href="#">Drupal Association member</a>
				</div>
			    </header>

			    <div class="contactDetails"> 
				<p class="highlighted">
				    <?php if(isset($contact->field_contact_highlighted_text['und'][0]['value']) && 
					isset($contact->field_contact_highlighted_text_2['und'][0]['value'])){
					    print '<span class="bold large-text">' 
						    . $contact->field_contact_highlighted_text['und'][0]['value'] 
						    . ' ' 
						    . $contact->field_contact_highlighted_text_2['und'][0]['value'] 
						. '</span>,';
				    }?>
				    <?php if(isset($contact->field_contact_highlighted_text_3['und'][0]['value'])){
					print '<span class="semiBold semi-large-text">' 
						. $contact->field_contact_highlighted_text_3['und'][0]['value'] 
					    . '</span>';
				    }?>
				</p>

				<?php if(isset($contact->field_contact_me_email_label['und'][0]['value']) 
				    && isset($contact->field_contact_me_email['und'][0]['url']) 
				    && isset($contact->field_contact_me_email['und'][0]['title'])){
					print '<p class="email">' . $contact->field_contact_me_email_label['und'][0]['value'] 
						. ' ' 
						. '<a href="' . $contact->field_contact_me_email['und'][0]['url'] 
						. '">' . $contact->field_contact_me_email['und'][0]['title']
						. '</a>' 
					    . '</p>';
				}?>

				<div class="buttons">
				    <?php if(isset($contact->field_contact_highlighted_text['und'][0]['value']) 
					&& isset($contact->field_contact_highlighted_text_2['und'][0]['value'])){
					    print '<p class="button">' 
						    . '<a href="' . '/' . $contact->field_contact_highlighted_text['und'][0]['value'] . '-' . $contact->field_contact_highlighted_text_2['und'][0]['value'] . '">' 
							. 'See ' . $contact->field_contact_highlighted_text['und'][0]['value'] . '\'s portfolio >>'
						    . '</a>' 
						. '</p>'
						. '<p class="button">'
						    . '<a href="' . '/' . $contact->field_contact_highlighted_text['und'][0]['value'] . '-' . $contact->field_contact_highlighted_text_2['und'][0]['value'] . '-blog">'
							. 'Go to ' . $contact->field_contact_highlighted_text['und'][0]['value'] . '\'s blog >>' 
						    . '</a>' 
						. '</p>';
				    }?>
				</div>
			    </div>
			    
			    
			</div><!--/.leftContainer -->

			<div class="rightContainer">
			    <?php if(isset($contact->field_contact_me_profile_image)){
				print '<img alt="' . $contact->field_contact_me_profile_image['und'][0]['alt'] . 
					'" title="' . $contact->field_contact_me_profile_image['und'][0]['title'] . 
					'" src="' . image_style_url('general_square', $contact->field_contact_me_profile_image['und'][0]['uri']) .'" />';
			    } ?>

			</div> <!--/.rightContainer -->
			<?php     
				if(isset($contact->field_social_icons_fc['und'][0]['value'])){
			    ?>
				<div class="socialIcons">
				    <?php foreach($contact->field_social_icons_fc['und'] as $item){
					$collection = entity_load('field_collection_item', array($item['value']));
					$collection = $collection[$item['value']];
					if(isset($collection->field_font_awesome_class_name['und'][0]['value'])){
					    print '<div class="socialIcon"><a href="' . $collection->field_social_icon_link['und'][0]['url'] 
						    . '" target="_blank"><i class="fa ' . $collection->field_font_awesome_class_name['und'][0]['value'] . '"></i></a></div>';
					}  
				    } // end of foreach ?>
				</div>
			    <?php } ?>
		    </div><!-- /.container -->
		</section>
	    </div> <!-- /.page#ContactIndi -->

	    <!-- INDIVIDUAL CONTACT SECTION end -->
	
	<?php } ?>

	</article>
    </div><!-- / #MainContent -->
</main>