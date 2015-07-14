<main>
    <div id="MainContent">
	<article>
	<!-- HEADER beginning -->

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
			<?php if(isset($field_top_section_header_1[0]['value'])){
			    print '<h2>' . $field_top_section_header_1[0]['value'] . '</h2>';
			} ?>
			<?php if(isset($field_top_section_header_2[0]['value'])){
			    print '<h2>' . $field_top_section_header_2[0]['value'] . '</h2>';
			} ?>
			<?php if(isset($field_top_section_header_3[0]['value'])){
			    print '<h3 class="tagline">' . $field_top_section_header_3[0]['value'] . '</h3>';
			} ?>
		    </div> <!--/.rightContainer -->

		</div><!-- /.container -->
	    </header>
	</div> <!-- /.page#DetailPageHeader -->

	<!-- HEADER end -->		    

	<!-- MAIN CONTENT beginning -->

	<div class="page" id="DetailPageMainContent">
	    <?php if(isset($body[0]['value'])){
		print $body[0]['value'];
	    } ?>			

	</div><!-- / .page#DetailPageMainContent -->

	<!-- MAIN CONTENT end -->

       </article> 


	<?php if(isset($field_entity_ref[0]['target_id'])){ 
	    $contact = node_load($field_entity_ref[0]['target_id']);
	?>
	<!-- INDIVIDUAL CONTACT SECTION beginning -->
		    
	    <div class="page" id="ContactIndi">
		<section>
		    <div class="container">

			<div class="leftContainer">
			    <header>
				<h1><?php print $contact->title;?></h1>
				<?php if(isset($contact->field_body_header_2['und'][0]['value'])){
				    print '<h2>' . $contact->field_body_header_2['und'][0]['value'] . '</h2>';
				}?>
				<?php if(isset($contact->body['und'][0]['value'])){
				    print $contact->body['und'][0]['value'];
				}?>

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
			    <?php if(isset($contact->field_contact_me_social_links['und'][0]['value'])){
				print '<div class="socialIcons max-height-applied">' . 
				    $contact->field_contact_me_social_links['und'][0]['value']
				. '</div><!-- /.socialIcons -->';
			    }?>
			</div><!--/.leftContainer -->

			<div class="rightContainer">
			    <?php if(isset($contact->field_contact_me_profile_image)){
				print '<img alt="' . $contact->field_contact_me_profile_image['und'][0]['alt'] . 
					'" alt="' . $contact->field_contact_me_profile_image['und'][0]['title'] . 
					'" src="' . image_style_url('general_square', $contact->field_contact_me_profile_image['und'][0]['uri']) .'" />';
			    } ?>

			</div> <!--/.rightContainer -->

		    </div><!-- /.container -->
		</section>
	    </div> <!-- /.page#ContactIndi -->

	    <!-- INDIVIDUAL CONTACT SECTION end -->
	
	<?php } ?>

    </div><!-- / #MainContent -->
</main>