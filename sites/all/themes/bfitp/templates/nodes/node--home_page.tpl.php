<main>
    <div id="MainContent">

	<!-- HERO Panel beginning -->
	<div id="Hero">

	    <div class="heroContent" id="home"
		<?php if(isset($field_hero_image[0]['uri'])) {
		   drupal_add_css('html body .heroContent{background:url(' . file_create_url($field_hero_image[0]['uri']) . ') 0 0 no-repeat; background-size: 100% auto;}', $option['type'] = 'inline');
		} ?>
	    >
		<div class="container">
		    <div class="heroText">
			<section>
			    <?php if(isset($field_hero_title['und'][0]['value'])){
				print '<h1>' . $field_hero_title['und'][0]['value'] . '</h1>';
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

	<!-- HERO Panel end -->


	<!-- ABOUT US SECTION beginning -->

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

	<!-- ABOUT US SECTION end -->

	<!-- HOME CALLOUT BOXES SECTION beginning -->

	<div class="page" id="HomePortfolio">

	    <div class="container">

		<ul class="grid">
		    
		    <?php if(isset($field_callout_boxes[0]['target_id'])){		
			//Put the values of each entity reference in the field: 'field_callout_boxes'
			// into the variable called '$contacts' 
			foreach ($field_callout_boxes as $contacts){
			    // access all fields of each entity in '$contacts' and put them into '$contact' variable
			    $contact = $contacts['entity'];
			    ?>
			    <li class="click-follow">
				    <div class="grid-contentHolder">
					<div class="leftContainer">
					    <?php if(isset($contact->field_contact_me_profile_image)){
						print '<img alt="' . $contact->field_contact_me_profile_image['und'][0]['alt'] . 
							'" alt="' . $contact->field_contact_me_profile_image['und'][0]['title'] . 
							'" src="' . image_style_url('general_square', $contact->field_contact_me_profile_image['und'][0]['uri']) .'" />';
					    } ?>
					</div>
					<div class="rightContainer">
					    <section>

						<?php if(isset($contact->field_contact_highlighted_text['und'][0]['value']) && 
							isset($contact->field_contact_highlighted_text_2['und'][0]['value'])){
							    print '<h2>' . $contact->field_contact_highlighted_text['und'][0]['value'] 
								    . ' ' . $contact->field_contact_highlighted_text_2['und'][0]['value']
								    . '</h2>';
						}?>
						<?php if(isset($contact->field_contact_highlighted_text_3['und'][0]['value'])){
						    print '<h3>' 
							    . $contact->field_contact_highlighted_text_3['und'][0]['value'] 
							. '</h3>';
						}?>
						<?php if(isset($contact->field_contact_highlighted_text['und'][0]['value']) 
						    && isset($contact->field_contact_highlighted_text_2['und'][0]['value'])){
							
							print '<p class="button">' 
								    . l('Go to ' . $contact->field_contact_highlighted_text['und'][0]['value'] 
									    . '\'s portfolio >>', 'node/' 
									    . $contact->field_created_by['und'][0]['target_id']) 
							    . '</p>';
							
						}?>
					    </section>
					</div>

				    </div><!-- /.grid-contentHolder -->
				</li>
			    <?php } ?>
		    <?php } ?>
		    
		    
		</ul><!-- /.grid -->

	    </div><!-- /.container -->

	</div> <!-- /.page#HomePortfolio -->

	<!-- HOME CALLOUT BOXES SECTION end -->                  



    </div><!-- / #MainContent -->
</main>