<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){


	var player = new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_2",
		cssSelectorAncestor: "#jp_container_2"
	}, [
		{
			title:"Kopf unter Wasser",
			mp3:"<?php echo get_stylesheet_directory_uri(); ?>/assets/songs/kopf-unter-wasser.mp3",
			oga:"<?php echo get_stylesheet_directory_uri(); ?>/assets/songs/kopf-unter-wasser.ogg"
		},
		{
			title:"Wir sind wir",
			mp3:"<?php echo get_stylesheet_directory_uri(); ?>/assets/songs/wir-sind-wir.mp3",
			oga:"<?php echo get_stylesheet_directory_uri(); ?>/assets/songs/wir-sind-wir.mp3",
		},
		{
			title:"Ans Meer",
			mp3:"<?php echo get_stylesheet_directory_uri(); ?>/assets/songs/ans-meer.mp3",
			oga:"<?php echo get_stylesheet_directory_uri(); ?>/assets/songs/ans-meer.mp3",
		},
		{
			title:"Sie Tanzt",
			mp3:"<?php echo get_stylesheet_directory_uri(); ?>/assets/songs/sie-tanzt.mp3",
			oga:"<?php echo get_stylesheet_directory_uri(); ?>/assets/songs/sie-tanzt.mp3",
		},
		{
			title:"Endlich Sommer",
			mp3:"<?php echo get_stylesheet_directory_uri(); ?>/assets/songs/endlich-sommer.mp3",
			oga:"<?php echo get_stylesheet_directory_uri(); ?>/assets/songs/endlich-sommer.mp3",
		}
	], {
		//swfPath: "../../dist/jplayer",
		supplied: "oga, mp3",
		wmode: "window",
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true
	});

	$('.playerlist li').click(function() {
		var songIndex = $(this).attr("data-song");
		console.log( songIndex );
		player.play(songIndex);
	});

	function playSong(e) {
	  player.play(e);
	}

});
//]]>
</script>

<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
