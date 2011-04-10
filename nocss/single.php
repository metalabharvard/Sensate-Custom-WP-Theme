<?php get_header(); ?>
<?php $bgimage=get_post_meta($post->ID, 'image', true); ?>
<style>body { background:url(<?php echo $bgimage; ?>); }</style>


				<div class="author">  <?php the_title(); ?> </div>
				
				<div class="contentarea">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="articletext">
							<?php the_content(); ?>	
						</div>
					</div>
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
				</div>
	
<?php endwhile; endif; ?>
<?php get_footer(); ?>