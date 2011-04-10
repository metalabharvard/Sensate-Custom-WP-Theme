<?php
/*
Template Name: Advanced Search
*/
?>
<?php get_header(); ?>



				<div class="author">  <?php the_title(); ?> </div>
				
				<div class="contentarea">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="articletext">
							<?php the_content(); ?>	
						
						<B>Tags</B><BR>
						<hr>
							<?php wp_tag_cloud('smallest=15&largest=40&number=50&orderby=count'); ?>
						<P>
						<B>Categories</B>
						<hr>
						<?php wp_list_categories('title_li='); ?>

						</div></div>
					<div class="relatedlinks">
						<h4>Related Links</h4><P>
				
						<?php $image=get_post_meta($post->ID, 'related-link', true); ?>
   						<?php if ( $image ) : ?>
   						<?php $mykey_values = get_post_custom_values('related-link');
  					 	foreach ( $mykey_values as $key => $value ) {
   						echo "<A HREF=http://" . $value . ">" .$value . "</a><br />"; 
  						}?>
  							
   						 <?php else : ?>
   							No Links
   						 <?php endif; ?>
					
				</div>

				<iframe class="facebooklike" src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.sensatejournal.com&amp;layout=button_count&amp;show_faces=false&amp;width=150&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowTransparency="true"></iframe>
				
	
<?php endwhile; endif; ?>
<?php get_footer(); ?>