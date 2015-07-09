<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<div class="grid-contentHolder blog-post">
    <article>
	<?php 
	
	    print $fields['field_detail_page_header_image']->content;
	    
	    print $fields['title']->content;
	    
	    print $fields['field_top_section_header_3']->content;
	    
	// code for summary text for blog articles - beginning
	    
	    // variable for the content of the text field
	    $initial_text = '';
	    
	    if(isset($fields['body']->content) && $fields['body']->content != null){
		// if summary is available, put its content into the variable
		$initial_text = $fields['body']->content;
	    }else{
		// if summary isn't available, use the main content text
		$initial_text = $fields['body_1']->content;
	    }
	    
	    print '<p class="blog-summary">' . $initial_text . '</p>';
	// code for summary text for blog articles - end
	    
	    print '<p class="button">' . $fields['title_1']->content . '</p>';
	    
	?>
    </article>
</div><!-- /.grid-contentHolder.blog-post -->
