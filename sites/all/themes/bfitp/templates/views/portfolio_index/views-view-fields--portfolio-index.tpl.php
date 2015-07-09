<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="grid-contentHolder">
    <section>
	<?php 
	    print $fields['field_detail_page_header_image']->content;
	    print $fields['title']->content;
	    print $fields['field_top_section_header_3']->content;
	    print '<p class="button">' . $fields['title_1']->content . '</p>';
	?>
    </section>
</div><!-- /.grid-contentHolder -->