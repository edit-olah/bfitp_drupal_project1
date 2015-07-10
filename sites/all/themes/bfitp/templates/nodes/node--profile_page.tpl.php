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
	<!-- HERO Panel/page end -->




	<!-- ABOUT EDIT PAGE beginning -->

	<div class="page" id="About">

	    <div class="container">

		<a class="backToTopButton" href="Hero">Back to top</a>

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

	</div><!-- / .page#About -->

	<!-- ABOUT EDIT PAGE end -->


	<!-- SKILLS PAGE beginning -->

	<div class="page" id="Skills">

		<div class="container">
		    <a class="backToTopButton" href="Hero">Back to top</a>
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

			<!-- Mix it up section beginning -->
			<section>

			    <?php if (isset($field_second_section_block_ref['und'][0])) {
				$delta = explode(":", $field_second_section_block_ref['und'][0]['moddelta']);
				$printBlock = module_invoke($delta[0], 'block_view', $delta[1]);
				print render($printBlock['content']);

			    } ?>

			    <div id="SkillsContainer" class="edits-skills mixItUp-container">
				
				<h2 class="extraPadding">List of skills</h2>
				
				<div class="mix markup" data-my-order="1"><p>HTML</p></div>
				<div class="mix extension-language" data-my-order="2"><p>CSS</p></div>
				<div class="mix extension-language" data-my-order="3"><p>SASS</p></div>
				<div class="mix dynamic-programming-language" data-my-order="4"><p>JavaScript</p></div>				    
				<div class="mix code-library" data-my-order="5"><p>jQuery</p></div>
				<div class="mix cms drupal" data-my-order="6"><p>Drupal</p></div>
				<div class="mix dynamic-programming-language" data-my-order="7"><p>PHP</p></div>				    
				<div class="mix frontend-automation" data-my-order="8"><p>Gulp</p></div>
				<div class="mix version-control" data-my-order="9"><p>Git</p></div>
				<div class="mix version-control" data-my-order="10"><p>SVN</p></div>
				<div class="mix virtualization" data-my-order="11"><p>Oracle VM Virtual Box</p></div>
				<div class="mix terminal-emulator" data-my-order="12"><p>PuTTY</p></div>
				<div class="mix cut-up" data-my-order="13"><p>Adobe Photoshop</p></div>
				<div class="mix cut-up" data-my-order="14"><p>Adobe Illustrator</p></div>
				<div class="mix cms" data-my-order="15"><p>Other CMSs</p></div>
				<div class="mix additional" data-my-order="16"><p>Third-party APIs</p></div>
				<div class="mix additional" data-my-order="17"><p>Web fonts</p></div>
				<div class="mix additional" data-my-order="18"><p>FTP</p></div>
				<div class="mix additional" data-my-order="19"><p>MySQL Workbench</p></div>
				<div class="gap"></div>
				<div class="gap"></div>
			    </div><!--/#Container -->

			    <div class="control-bar">
				<div class="group">
				    <label>Show:</label>
				    <button class="filter" data-filter="all">All</button>
				    <button class="filter" data-filter="none">None</button>
				</div><!--/.group -->
				<div class="group filter-buttons">
				    <label>Filter:</label>
				    <button class="filter" data-filter=".markup">Markup</button>
				    <button class="filter" data-filter=".extension-language">Extension Language</button>
				    <button class="filter" data-filter=".dynamic-programming-language">Dynamically-typed Programming Language</button>
				    <button class="filter" data-filter=".code-library">Library</button>
				    <button class="filter" data-filter=".drupal">Drupal</button>
				    <button class="filter" data-filter=".cms">Content Management</button>
				    <button class="filter" data-filter=".frontend-automation">Frontend Automation</button>
				    <button class="filter" data-filter=".version-control">Version Control</button>
				    <button class="filter" data-filter=".virtualization">Virtualisation</button>
				    <button class="filter" data-filter=".terminal-emulator">Terminal Emulator</button>
				    <button class="filter" data-filter=".cut-up">Cut-up</button>
				    <button class="filter" data-filter=".additional">Additional</button>
				</div><!--/.group.filter-buttons -->
				<div class="arrowDown"></div>

			    </div><!--/.control-bar -->				
			</section>
		    <!-- Mix it up section end -->
		    </article>
		</div><!-- /.container -->

	</div> <!-- /.page#Skills -->

	<!-- SKILLS PAGE end -->

	<!-- PORTFOLIO PAGE beginning -->

	<div class="page" id="Portfolio">
	    <div class="container">
		<a class="backToTopButton" href="Hero">Back to top</a>
		<article>
		    
		    <?php if(isset($field_third_section_header_1[0]['value'])){
			    print '<h1>' . $field_third_section_header_1[0]['value'] . '</h1>';
			} ?>
			<section>
			    <?php if(isset($field_third_section_header_2[0]['value'])){
				print '<h2 class="tagline">' . $field_third_section_header_2[0]['value'] . '</h2>';
			    } ?>
			    <?php if(isset($field_third_section_text[0]['value'])){
				print $field_third_section_text[0]['value'];
			    } ?>
			</section>
		
		<!-- Mix it up section beginning -->
		
		    field_third_section_block_ref
		
		    <?php if (isset($field_third_section_block_ref['und'][0])) {
			$delta = explode(":", $field_third_section_block_ref['und'][0]['moddelta']);
			$printBlock = module_invoke($delta[0], 'block_view', $delta[1]);
			print render($printBlock['content']);

		    } ?>
		
		    <section>
			<div class="control-bar">
			    <div class="group">
				<label>Show:</label>
				<button class="filter-portfo" data-filter="all">All</button>
				<button class="filter-portfo" data-filter="none">None</button>
			    </div><!--/.group -->
			    <div class="group filter-buttons">
				<label>Filter:</label>
				<button class="filter-portfo" data-filter=".html">HTML5</button>
				<button class="filter-portfo" data-filter=".css">CSS</button>
				<button class="filter-portfo" data-filter=".sass">SASS</button>
				<button class="filter-portfo" data-filter=".css-animation">CSS Animation</button>
				<button class="filter-portfo" data-filter=".drupal-project">Drupal Project</button>
				<button class="filter-portfo" data-filter=".website-project">Website Project</button>
				<button class="filter-portfo" data-filter=".js-jquery">JavaScript / jQuery</button>
			    </div><!--/.group.filter-buttons -->
			    <div class="arrowDown"></div>

			</div><!--/.control-bar -->

			<div id="PortfolioContainer" class="mixItUp-container">
			    <div class="portfoMix click-follow html css sass" data-my-order="1">
				<section>
				    <img alt="" src="images/bfitp_placeholder_img_template_280x140.png" >
				    <h3>Portfolio Project 1</h3>
				    <h4>HTML, CSS, SASS, Compass</h4>
				    <p class="button"><a href="/portfolio-project.html">More details >> </a></p>
				</section>
			    </div><!--/.portfoMix -->
			    <div class="portfoMix click-follow css-animation" data-my-order="2">
				<section>
				    <img alt="" src="images/bfitp_placeholder_img_template_280x140.png" >
				    <h3>Portfolio Project 2</h3>
				    <h4>CSS3 animation</h4>
				    <p class="button"><a href="/portfolio-project.html">More details >> </a></p>
				</section>
			    </div><!--/.portfoMix -->
			    <div class="portfoMix click-follow drupal-project" data-my-order="3">
				<section>
				    <img alt="" src="images/bfitp_placeholder_img_template_280x140.png" >
				    <h3>Portfolio Project 3</h3>
				    <h4>Drupal7</h4>
				    <p class="button"><a href="/portfolio-project.html">More details >> </a></p>
				</section>
			    </div><!--/.portfoMix -->
			    <div class="portfoMix click-follow website-project" data-my-order="4">
				<section>
				    <img alt="" src="images/bfitp_placeholder_img_template_280x140.png" >
				    <h3>Portfolio Project 4</h3>
				    <h4>Micro-site</h4>
				    <p class="button"><a href="/portfolio-project.html">More details >> </a></p>
				</section>
			    </div><!--/.portfoMix -->
			    <div class="portfoMix click-follow js-jquery" data-my-order="5">
				<section>
				    <img alt="" src="images/bfitp_placeholder_img_template_280x140.png" >
				    <h3>Portfolio Project 5</h3>
				    <h4>JavaScript, jQuery</h4>
				    <p class="button"><a href="/portfolio-project.html">More details >> </a></p>
				</section>
			    </div><!--/.portfoMix -->
			    <div class="portfoMix click-follow drupal-project" data-my-order="6">
				<section>
				    <img alt="" src="images/bfitp_placeholder_img_template_280x140.png" >
				    <h3>Portfolio Project 6</h3>
				    <h4>Drupal test</h4>
				    <p class="button"><a href="/portfolio-project.html">More details >> </a></p>
				</section>
			    </div><!--/.portfoMix -->
			    <div class="portfoMix click-follow css" data-my-order="7">
				<section>
				    <img alt="" src="images/bfitp_placeholder_img_template_280x140.png" >
				    <h3>Portfolio Project 7</h3>
				    <h4>parallax test</h4>
				    <p class="button"><a href="/portfolio-project.html">More details >> </a></p>
				</section>
			    </div><!--/.portfoMix -->
			    <div class="portfoMix click-follow html" data-my-order="8">
				<section>
				    <img alt="" src="images/bfitp_placeholder_img_template_280x140.png" >
				    <h3>Portfolio Project 8</h3>
				    <h4>SVG test</h4>
				    <p class="button"><a href="/portfolio-project.html">More details >> </a></p>
				</section>
			    </div><!--/.portfoMix -->
			    <div class="portfoMix click-follow css" data-my-order="9">
				<section>
				    <img alt="" src="images/bfitp_placeholder_img_template_280x140.png" >
				    <h3>Portfolio Project 9</h3>
				    <h4>CSS</h4>
				    <p class="button"><a href="/portfolio-project.html">More details >> </a></p>
				</section>
			    </div><!--/.portfoMix -->
			    <div class="portfoMix click-follow css-animation" data-my-order="10">
				<section>
				    <img alt="" src="images/bfitp_placeholder_img_template_280x140.png" >
				    <h3>Portfolio Project 10</h3>
				    <h4>CSS Animation</h4>
				    <p class="button"><a href="/portfolio-project.html">More details >> </a></p>
				</section>
			    </div><!--/.portfoMix -->
			    <div class="portfoMix click-follow drupal-project" data-my-order="11">
				<section>
				    <img alt="" src="images/bfitp_placeholder_img_template_280x140.png" >
				    <h3>Portfolio Project 11</h3>
				    <h4>Drupal8 test</h4>
				    <p class="button"><a href="/portfolio-project.html">More details >> </a></p>
				</section>
			    </div><!--/.portfoMix -->
			    <div class="portfoMix click-follow website-project" data-my-order="12">
				<section>
				    <img alt="" src="images/bfitp_placeholder_img_template_280x140.png" >
				    <h3>Portfolio Project 12</h3>
				    <h4>Micro-site</h4>
				    <p class="button"><a href="/portfolio-project.html">More details >> </a></p>
				</section>
			    </div><!--/.portfoMix -->
			    <div class="portfoMix click-follow drupal-project" data-my-order="13">
				<section>
				    <img alt="" src="images/bfitp_placeholder_img_template_280x140.png" >
				    <h3>Portfolio Project 13</h3>
				    <h4>Drupal custom module</h4>
				    <p class="button"><a href="/portfolio-project.html">More details >> </a></p>
				</section>
			    </div><!--/.portfoMix -->
			    <div class="gap"></div>
			    <div class="gap"></div>
			</div><!--/#PortfolioContainer -->
		    </section>
		<!-- Mix it up section end -->

		</article>    

	    </div><!-- /.container -->

	</div> <!-- /.page#Portfolio -->

	<!-- PORTFOLIO PAGE end -->

	<!-- CONTACT EDIT PAGE beginning -->

	<div class="page" id="ContactIndi">
	    <section>
		<div class="container">

		    <div class="leftContainer">
			<header>
			    <h1>Contact Edit</h1>
			    <h2>
				Get in touch
			    </h2>
			    <p>
				If you are interested in hiring me, please drop me an email. I would be happy to send you my up-to-date resume. 
			    </p>
			</header>
			<div class="contactDetails">
			    <p class="highlighted"><span class='bold large-text'>Edit Olah</span>, <span class='semiBold semi-large-text'>Web&nbsp;developer</span></p>


			    <p class="email">Email: <a href="mailto:edit.olah@barefootinthepark.co.uk" class="min-height-applied">edit.olah@barefootinthepark.co.uk</a></p>

			    <div class="buttons">
				<p class="button"><a href="/edit-olah-resume.html">See Edit's resume >></a></p>
				<p class="button"><a href="/edit-olah-blog.html">Go to Edit's blog >></a></p>
			    </div>
			</div><!-- /.contactDetails -->
			<div class="socialIcons max-height-applied">
			    <a href="https://uk.linkedin.com/in/editolah" target="_blank"><img alt="LinkedIn icon" src="images/linkedin_icon.png" ></a>
			    <a href="#" target="_blank"><img alt="email icon" src="images/email_icon.png" ></a>
			    <a href="#" target="_blank"><img alt="twitter icon" src="images/twitter_icon.png" ></a>
			    <a href="#" target="_blank"><img alt="instagram icon" src="images/instagram_icon.png" ></a>
			    <a href="#" target="_blank"><img alt="web icon" src="images/web_icon.png" ></a>
			</div><!-- /.socialIcons -->
		    </div><!--/.leftContainer -->

		    <div class="rightContainer">
			<a class="backToTopButton" href="Hero">Back to top</a>
			<img alt="" src="images/bfitp_placeholder_img_300x300.png" >
		    </div> <!--/.rightContainer -->

		</div><!-- /.container -->
	    </section>
	</div> <!-- /.page#ContactIndi -->


	<!-- CONTACT EDIT PAGE end -->

    </div><!-- / #MainContent -->
</main>



