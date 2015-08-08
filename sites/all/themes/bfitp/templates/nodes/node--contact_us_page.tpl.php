<?php
    // setting 'owner' cookie value to nothing/clearing cookie value
    $cookieName = 'owner';
    setcookie($cookieName, '');
?>
<main>
    <div id="MainContent">

	<!-- INTRO TEXT SECTION beginning -->

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

	<!-- INTRO TEXT SECTION end -->


	<!-- CONTACT DETAILS CALLOUT BOXES GRID beginning -->

	<div class="page" id="ContactUsGrid">

	    <div class="container">
		<ul class="grid grid-stretched-layout">
		    <li>
			<?php if(isset($field_callout_boxes[0]['target_id'])){ 
			    $contact = $field_callout_boxes[0]['entity'];
			?>
			    <div class="grid-contentHolder">
				<article>
				    <?php if(isset($contact->field_landscape_profile_image)){
					print '<img alt="' . $contact->field_landscape_profile_image['und'][0]['alt'] . 
						'" title="' . $contact->field_landscape_profile_image['und'][0]['title'] . 
						'" src="' . image_style_url('landscape_profile_img', $contact->field_landscape_profile_image['und'][0]['uri']) .'" />';
				    } ?>
				    <?php if(isset($contact->field_contact_highlighted_text['und'][0]['value'])){
					print '<h2>Contact ' . $contact->field_contact_highlighted_text['und'][0]['value'] . '</h2>';
				    }?>
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
				    <?php if(isset($contact->field_contact_me_skills['und'][0]['value'])){
					print '<p class="min-height-applied">' 
						. $contact->field_contact_me_skills['und'][0]['value'] 
					    . '</p>';
				    }?>
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
				    <?php if(isset($contact->field_contact_me_social_links['und'][0]['value'])){
					print '<div class="socialIcons max-height-applied">' . 
					    $contact->field_contact_me_social_links['und'][0]['value']
					. '</div><!-- /.socialIcons -->';
				    }?>

				    <?php if(isset($contact->field_contact_highlighted_text['und'][0]['value'])){
					print '<p class="button">' 
					    . l('See ' . $contact->field_contact_highlighted_text['und'][0]['value'] 
					    . '\'s portfolio >>', 'node/' 
					    . $contact->field_created_by['und'][0]['target_id']) 
					. '</p>';
				    }?>
				    
				</article>
			    </div><!-- /.gridContentHolder -->
			<?php } ?>
		    </li>
		    <li>
			<?php if(isset($field_callout_boxes[1]['target_id'])){ 
			    $contact2 = $field_callout_boxes[1]['entity'];
			?>
			    <div class="grid-contentHolder">
				<article>
				    <?php if(isset($contact2->field_landscape_profile_image)){
					print '<img alt="' . $contact2->field_landscape_profile_image['und'][0]['alt'] . 
						'" title="' . $contact2->field_landscape_profile_image['und'][0]['title'] . 
						'" src="' . image_style_url('landscape_profile_img', $contact2->field_landscape_profile_image['und'][0]['uri']) .'" />';
				    } ?>
				    <?php if(isset($contact2->field_contact_highlighted_text['und'][0]['value'])){
					print '<h2>Contact ' . $contact2->field_contact_highlighted_text['und'][0]['value'] . '</h2>';
				    }?>
				    <?php if(isset($contact2->field_contact_highlighted_text['und'][0]['value']) && 
					isset($contact2->field_contact_highlighted_text_2['und'][0]['value'])){
					    print '<h2>' . $contact2->field_contact_highlighted_text['und'][0]['value'] 
						    . ' ' . $contact2->field_contact_highlighted_text_2['und'][0]['value']
						    . '</h2>';
				    }?>
				    <?php if(isset($contact2->field_contact_highlighted_text_3['und'][0]['value'])){
					print '<h3>' 
						. $contact2->field_contact_highlighted_text_3['und'][0]['value'] 
					    . '</h3>';
				    }?>
				    <?php if(isset($contact2->field_contact_me_skills['und'][0]['value'])){
					print '<p class="min-height-applied">' 
						. $contact2->field_contact_me_skills['und'][0]['value'] 
					    . '</p>';
				    }?>
				    <?php if(isset($contact2->field_contact_me_email_label['und'][0]['value']) 
					&& isset($contact2->field_contact_me_email['und'][0]['url']) 
					&& isset($contact2->field_contact_me_email['und'][0]['title'])){
					    print '<p class="email">' . $contact2->field_contact_me_email_label['und'][0]['value'] 
						    . ' ' 
						    . '<a href="' . $contact2->field_contact_me_email['und'][0]['url'] 
						    . '">' . $contact2->field_contact_me_email['und'][0]['title']
						    . '</a>' 
						. '</p>';
				    }?>
				    <?php if(isset($contact2->field_contact_me_social_links['und'][0]['value'])){
					print '<div class="socialIcons max-height-applied">' . 
					    $contact2->field_contact_me_social_links['und'][0]['value']
					. '</div><!-- /.socialIcons -->';
				    }?>

				    <?php if(isset($contact2->field_contact_highlighted_text['und'][0]['value'])){
					print '<p class="button">' 
					    . l('See ' . $contact2->field_contact_highlighted_text['und'][0]['value'] 
					    . '\'s portfolio >>', 'node/' 
					    . $contact2->field_created_by['und'][0]['target_id']) 
					. '</p>';
				    }?>
				</article>
			    </div><!-- /.gridContentHolder -->
			<?php } ?>
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
			<!-- SIDEBAR beginning -->
			<section>
			    <header>
				<?php if(isset($field_body_header_2[0]['value'])){
				    print '<h2 class="sidebar-header">' . $field_body_header_2[0]['value'] . '</h2>';
				} ?>
			    </header>
			    
			    <?php if (isset($field_additional_info_block_ref['und'][0])) {
				$delta = explode(":", $field_additional_info_block_ref['und'][0]['moddelta']);
				$printBlock = module_invoke($delta[0], 'block_view', $delta[1]);
				print render($printBlock['content']);

			    } ?>
			    
			</section>
			<!-- SIDEBAR end -->
		    </li>				
		</ul><!-- /.grid.grid-stretched-layout -->

	    </div><!-- /.container -->

	</div> <!-- /.page#ContactUsGrid -->

	<!-- CONTACT DETAILS CALLOUT BOXES GRID end -->                  



    </div><!-- / #MainContent -->
</main>
