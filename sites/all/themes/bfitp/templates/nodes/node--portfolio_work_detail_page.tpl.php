<main>
    <div id="MainContent">
	<article>

	    <!-- HEADER beginning -->
	    
	    <div class="page portfolio-project-header" id="DetailPageHeader">
		<header>
		    <div class="container">

			<div class="leftContainer">
			   
			   <?php if(isset($field_detail_page_header_image)){
				print '<img alt="' . $field_detail_page_header_image[0]['alt'] . 
					'" title="' . $field_detail_page_header_image[0]['title'] . 
					'" src="' . image_style_url('portfolio_header_460x230', $field_detail_page_header_image[0]['uri']) .'" />';
			    } ?>
			</div><!-- /.leftContainer -->

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
			   
			</div> <!-- /.rightContainer -->

		    </div><!-- /.container -->
		</header>
	    </div> <!-- /.page.portfolio-project-header#DetailPageHeader -->

	    <!-- HEADER end -->		    

	    <!-- MAIN CONTENT beginning -->

	    <div class="page blog-post-article" id="DetailPageMainContent">
		<div class="container">
		    <div class="leftContainer">

			<?php if(isset($body[0]['value'])){
			    print $body[0]['value'];
			} ?>			

		    </div><!-- /.leftContainer -->

		    <!-- SIDEBAR beginning -->
		    
		    <div class="rightContainer">
			<aside>
			    <header>
				<?php if(isset($field_first_section_header_2[0]['value'])){
				    print '<h2>' . $field_first_section_header_2[0]['value'] . '</h2>';
				} ?>
				
			    </header>
			    <div id="SidebarContent">

				<?php 
				    if(isset($field_sidebar_section[0]['value'])){
					foreach($field_sidebar_section as $item){
					    $collection = entity_load('field_collection_item', array($item['value']));
					    $collection = $collection[$item['value']];
					   
					?>
					    <div class="sidebar-section">
						<section>
						    <?php if(isset($collection->field_sidebar_section_header['und'][0]['value'])){
							print '<h3>' . $collection->field_sidebar_section_header['und'][0]['value'] . '</h3>';
						    } ?>
						    <?php if(isset($collection->field_sidebar_section_text['und'][0]['value'])){
							print '<p>' . $collection->field_sidebar_section_text['und'][0]['value'] . '</p>';
						    } ?>
						    <?php if(isset($collection->field_sidebar_section_link['und'][0]['title'])){
							print '<a href="' . $collection->field_sidebar_section_link['und'][0]['url'] . '" target="_blank">' . $collection->field_sidebar_section_link['und'][0]['title'] . '</a>';
						    } ?>
						</section>
					    </div><!-- /.sidebar-section -->
					    
					    
					 <?php   
					    
					}
				    }
				    
				?>
				
			    </div><!-- /#SidebarContent -->
			</aside>
		    </div><!-- /.rightContainer -->

		    <!-- SIDEBAR end -->
		    
		</div><!-- /.container -->
	    </div><!-- /.page.blog-post-article#DetailPageMainContent -->

	    <!-- MAIN CONTENT end -->

       </article> 


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
			    <?php if(isset($contact->field_contact_me_profile_image)){
				print '<img alt="' . $contact->field_contact_me_profile_image['und'][0]['alt'] . 
					'" title="' . $contact->field_contact_me_profile_image['und'][0]['title'] . 
					'" src="' . image_style_url('general_square', $contact->field_contact_me_profile_image['und'][0]['uri']) .'" />';
			    } ?>

			</div> <!-- /.rightContainer -->
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
				</div><!-- /.socialIcons-->
			    <?php } ?>
		    </div><!-- /.container -->
		</section>
	    </div> <!-- /.page#ContactIndi -->

	    <!-- INDIVIDUAL CONTACT SECTION end -->
	
	<?php } ?>

    </div><!-- /#MainContent -->
</main>

