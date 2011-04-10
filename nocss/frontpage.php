<?php
/*
Template Name: Front Page
*/
?>

<?php $i=1; while($i<=0) { $i++; } ?> <!-- Custom ID's -->
<?php $js=1; while($js<=0) { $js++; } ?> <!-- Custom JS ID's -->

<?php get_header(); ?>

<div class="projects">

<?php $readposts = get_posts('orderby=menu_order&category=67&numberposts=12'); ?>


<!-- LoopStart -->


<?php foreach($readposts as $post) : setup_postdata($post); ?>
<?php  $bgimage=get_post_meta($post->ID, 'image', true);  ?>

<a href="<?php the_permalink() ?>"><div class="project" id="project-<?php echo $i++; ?>"><?php the_title(); ?></div></a> <!-- Each Project -->
<div class="hidden" style="display:none;"><img src="<?php echo $bgimage; ?>"></div>
<?php $thisdiv = $js++; ?>
<style>#project-<?php echo $thisdiv ?> { background:url(<?php echo $bgimage; ?>);color:rgba(0,0,0,0);}
#project-<?php echo $thisdiv ?>:hover {background:#Ccc; color: #444;}

</style>
<?php endforeach; ?>
<!-- LoopEnd -->

</div>

<div class="news"> 
	<script src="<?php bloginfo('stylesheet_directory'); ?>/jquery.zrssfeed.min.js" type="text/javascript"></script> 
	<h4>News</h4>
</div>
								
								
<script> 
				$(document).ready(function() {
					$('#project-1').delay(400).fadeIn();
					$('#project-2').delay(600).fadeIn();
					$('#project-3').delay(800).fadeIn();
					$('#project-4').delay(1000).fadeIn();
					$('#project-5').delay(1200).fadeIn();
					$('#project-6').delay(1400).fadeIn();
					$('#project-7').delay(1600).fadeIn();
					$('#project-8').delay(1800).fadeIn();
					$('#project-9').delay(2000).fadeIn();
					$('#project-10').delay(2200).fadeIn();
					$('#project-11').delay(2400).fadeIn();
					$('#project-12').delay(2600).fadeIn();
					$('.footer').delay(2800).fadeIn();
					$('.news').delay(100).fadeIn();
				});
				
					$(document).ready(function () {
  						$('.news').rssfeed('http://sensate.tumblr.com/rss', {
   							 limit: 9,
   							 date: false,
   							 content: false,
  						});
					});
</script>



	
<?php get_footer(); ?>