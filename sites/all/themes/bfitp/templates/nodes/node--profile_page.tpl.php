<?php
    // name cookie
    $cookieName = 'owner';
    // set node id as cookie value
    $cookieValue = $node->nid;
    // set cookie
    setcookie($cookieName, $cookieValue);
?>
<main>
    <div id="MainContent"  class="fixedNavPage">

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
				<?php if(isset($title)){
				    print '<h1>' . $title . '</h1>';
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
	<!-- HERO Panel end -->




	<!-- ABOUT ME SECTION beginning -->

	<div class="page" id="About">

	    <div class="container">

		<a class="backToTopButton" href="Hero"><?php print t('Back to top'); ?></a>

		<article>
		    <?php if(isset($field_first_section_header_1[0]['value'])){
			print '<h1>' . $field_first_section_header_1[0]['value'] . '</h1>';
		    } ?>
		    <?php if(isset($field_first_section_header_2[0]['value'])){
			print '<h2 class="tagline">' . $field_first_section_header_2[0]['value'] . '</h2>';
		    } ?>
		    <?php if(isset($field_first_section_text[0]['value'])){
			print $field_first_section_text[0]['value'];
		    } ?>
		</article>
	    </div><!-- /.container -->

	</div><!-- /.page#About -->

	<!-- ABOUT ME SECTION end -->


	<!-- SKILLS SECTION beginning -->

	<div class="page" id="Skills">

		<div class="container">
		    <a class="backToTopButton" href="Hero"><?php print t('Back to top'); ?></a>
		    <article>
			
			<?php if(isset($field_second_section_header_1[0]['value'])){
			    print '<h1>' . $field_second_section_header_1[0]['value'] . '</h1>';
			} ?>
			<section>
			    <?php if(isset($field_second_section_header_2[0]['value'])){
				print '<h2 class="tagline">' . $field_second_section_header_2[0]['value'] . '</h2>';
			    } ?>
			    <?php if(isset($field_second_section_text[0]['value'])){
				print $field_second_section_text[0]['value'];
			    } ?>
			</section>


			<?php 
			    if(isset($field_skills_mixitup_fc[0]['value'])){
			?>
				
			    <!-- Mix it up section beginning -->
			    <section>

				<div id="SkillsContainer" class="edits-skills mixItUp-container">

				    <h2 class="extraPadding">List of skills</h2>

				    <?php
					
					foreach($field_skills_mixitup_fc as $number=>$item){
					    $skill = entity_load('field_collection_item', array($item['value']));
					    $skill = $skill[$item['value']];
					    $skillClass = '';
					    
					    foreach($skill->field_skill_category['und'] as $skillCategory){
						$skillClass .= $skillCategory['value'] . ' ';
					    }
					    
					    print '<div class="mix ' . $skillClass . '" data-my-order="'. $number .'"><p>' . $skill->field_skill_text['und'][0]['value'] . '</p></div>';
					}
				    ?>
			    
				<div class="gap"></div>
				<div class="gap"></div>
				
			    </div><!--/#SkillsContainer.edits-skills.mixItUp-container -->
			   
			    
			    <div class="control-bar">
				<div class="group">
				    <label>Show:</label>
				    <button class="filter" data-filter="all">All</button>
				    <button class="filter" data-filter="none">None</button>
				</div><!--/.group -->
				<div class="group filter-buttons">
				    <label>Filter:</label>
				    
				    <?php 
					$fields = field_info_field('field_skill_category');
					foreach($fields["settings"]['allowed_values'] as $key=>$value){
					    print '<button class="filter" data-filter=".' . $key . '">'. $value .'</button>';
					}
				    ?>		    

				</div><!--/.group.filter-buttons -->
				
			    </div><!--/.control-bar -->				
			</section>
		    <!-- Mix it up section end -->
		    <?php } ?>
		    </article>
		</div><!-- /.container -->

	</div><!-- /.page#Skills -->

	<!-- SKILLS SECTION end -->

	<!-- PORTFOLIO SECTION beginning -->

	<div class="page" id="Portfolio">
	    <div class="container">
		<a class="backToTopButton" href="Hero"><?php print t('Back to top'); ?></a>
		<article>
		    
		    <?php if(isset($field_third_section_header_1[0]['value'])){
			    print '<h1>' . $field_third_section_header_1[0]['value'] . '</h1>';
			} ?>
			<section>
			    <?php if(isset($field_third_section_header_2[0]['value'])){
				print '<h2>' . $field_third_section_header_2[0]['value'] . '</h2>';
			    } ?>
			    <?php if(isset($field_third_section_text[0]['value'])){
				print $field_third_section_text[0]['value'];
			    } ?>
			</section>
		
		<!-- Mix it up section beginning -->
		
			<section>

			    <?php 
				// pass in the node id for the particular profile page that is specific to a user
				print portfolio_mixitup($nid);
			    ?>


			</section>
		<!-- Mix it up section end -->

		</article>    

	    </div><!-- /.container -->

	</div> <!-- /.page#Portfolio -->

	<!-- PORTFOLIO SECTION end -->


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
				</div><!-- /.leftContainer.subcontainer -->
				<div class="rightContainer badge">
				    <div class="membershipBadge">Drupal Association member</div>
				</div><!-- /.rightContainer.badge -->
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
							. 'Go to ' . $contact->field_contact_highlighted_text['und'][0]['value'] . '\'s portfolio >>'
						    . '</a>' 
						. '</p>'
						. '<p class="button">'
						    . '<a href="' . '/' . $contact->field_contact_highlighted_text['und'][0]['value'] . '-' . $contact->field_contact_highlighted_text_2['und'][0]['value'] . '-blog">'
							. 'Go to ' . $contact->field_contact_highlighted_text['und'][0]['value'] . '\'s blog >>' 
						    . '</a>' 
						. '</p>';
				    }?>
				</div><!-- /.buttons -->
			    </div><!-- /.contactDetails -->
			    
			    
			</div><!-- /.leftContainer -->

			<div class="rightContainer">
			    <a class="backToTopButton" href="Hero"><?php print t('Back to top'); ?></a>
			    <?php if(isset($contact->field_contact_me_profile_image)){
				print '<img alt="' . $contact->field_contact_me_profile_image['und'][0]['alt'] . 
					'" title="' . $contact->field_contact_me_profile_image['und'][0]['title'] . 
					'" src="' . image_style_url('general_square', $contact->field_contact_me_profile_image['und'][0]['uri']) .'" />';
			    } ?>

			</div><!-- /.rightContainer -->
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
				</div><!-- /.socialIcons -->
			    <?php } ?>
		    </div><!-- /.container -->
		</section>
	    </div> <!-- /.page#ContactIndi -->

	    <!-- INDIVIDUAL CONTACT SECTION end -->
	
	<?php } ?>

    </div><!-- /#MainContent.fixedNavPage -->
</main>