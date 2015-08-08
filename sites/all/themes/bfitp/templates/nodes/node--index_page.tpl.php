<?php
    /* we want to check for two pages that have to be handled differently from other index_pages, 
     * the node ids for these are 18: edit-olah-blog and 19: peter-whyte-blog
     * we put these into an array and the '$profile_ids variable'
     */
    $profile_ids = array('18','19');
    /* if the current page's node id ($nid) is NOT in the array specified above */
    if(!in_array($nid, $profile_ids)){
	//set cookie called 'owner' to nothing
	setcookie('owner', '');
    }
?>
<main>
    <div id="MainContent">

	<!-- HERO Panel beginning -->
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
	<!--  HERO Panel end -->


	<!-- MAIN CONTENT GRID beginning -->

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

	<!-- MAIN CONTENT GRID end -->                  

	
	<?php if(isset($field_entity_ref[0]['target_id'])){ 
	    $contact = $field_entity_ref[0]['entity'];
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
							    . '<a href="' . '/' . $contact->field_contact_highlighted_text['und'][0]['value'] . '-' . $contact->field_contact_highlighted_text_2['und'][0]['value']. '">' 
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
						'" title="' . $contact->field_contact_me_profile_image['und'][0]['title'] . 
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