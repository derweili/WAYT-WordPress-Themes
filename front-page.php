<?php
get_header(); ?>
<div class="fixed-nav">
	<div class="row">
<ul class="horizontal menu" data-magellan>
  <li class=""><a href="#songs">Songs</a></li>
  <li><a href="#video">Video</a></li>
  <!--<li><a href="#about">WAYT</a></li>
  <li><a href="#live">Live</a></li>-->
</ul>
</div>

<ul class="horizontal menu align-right socialmenu">
	<li><a href="https://www.facebook.com/sepiamusik/?fref=ts" target="_blank"><i class="fi flaticon-facebook-logo"></i></a></li>	
	<li><a href="#" target="_blank"><i class="fi flaticon-instagram-logo"></i></a></li>	
	<li><a href="https://snapchat.com/add/sepiabooking" target="_blank"><i class="fi flaticon-snapchat"></i></a></li>	
	<li><a href="https://www.youtube.com/channel/UCEL8TucoYENnASC4LBHMi1w" target="_blank"><i class="fi flaticon-youtube-logotype"></i></a></li>	
</ul>

</div>

<div id="front-page">
	
	<section class="intro">
		<h1>WAYT</h1>
	</section>

	<section class="player gray-bg " id="songs" data-magellan-target="songs">
		<div class="row">
			<div class="columns show-for-small-only">
				<h2>WAYT EP</h2>
			</div>
			<div class="columns medium-6 text-center">
				<div class="cover" style="height: 0; width: 100%; padding-bottom: 100%; background: white;"></div>
				<a href="downloads/wayt.zip" target="_blank" class="text-center float-center"><strong>kostenlos herunterladen</strong></a>
			</div>
			<div class="columns medium-6 end">
				<h2 class="show-for-medium">WAYT EP</h2>
				<ul class="playerlist show-for-medium">
					<li data-song="0"><i class="play"></i> Kopf Unter Wasser</li>
					<li data-song="1"><i class="play"></i> Wir Sind Wir</li>
					<li data-song="2"><i class="play"></i> Ans Meer</li>
					<li data-song="3"><i class="play"></i> Sie Tanzt</li>
					<li data-song="4"><i class="play"></i> Endlich Sommer</li>
				</ul>
				<div class="row storewrapper align-center">
					<div class="columns small-8 medium-5 ">
						<iframe src="https://embed.spotify.com/follow/1/?uri=spotify:artist:0XTEIOELXjcNNOL4rz58uW&size=detail&theme=light" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
					</div>
					<div class="columns small-8 medium-6">
						<a href="https://itunes.apple.com/de/album/wayt-ep/id1220119738" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-music-badge.svg" alt="Apple Music" width="160">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="video" id="video" data-magellan-target="video">
		<iframe width="854" height="480" src="https://www.youtube.com/embed/-4Z2JRfZd9k" frameborder="0" allowfullscreen></iframe>
	</section>

	<section class="bild-wrapper">
		<div class="row">
			<div class="columns small-12"></div>
			<!--<div class="columns small-12 medium-6"></div>-->
			<a href="https://snapchat.com/add/sepiabooking" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/snapchat.png" alt="WAYT auf Snapchat" class="snapchat"></a>
		</div>
	</section>



	<!--<section class="info gray-bg" id="about" data-magellan-target="about">
		<div class="row">
			<div class="columns text-center headline small-12">
				<h2>WAYT</h2>
		</div>
			<div class="columns small-12 medium-6">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bild-3.png" alt="WAYT">
			</div>
			<div class="columns small-12 medium-6">
				<p></p>
			</div>
		</div>
	</section>-->
<?php

$args = array (
    'post_type' => 'facebook_events',
	'posts_per_page' => -1,
	'order' => 'ASC',
	'orderby'   => 'meta_value',
	'meta_key'  => 'event_starts',
);

$fbe_query = new WP_Query( $args );
	if( $fbe_query->have_posts() ): 

	?>

		<section class="live" id="live" data-magellan-target="live">
			<div class="row align-center">
				<div class="columns text-center headline small-12">
					<h2>WAYT Live</h2>
				</div>
		<?php
			while ( $fbe_query->have_posts() ) : $fbe_query->the_post();
				$fb_date = get_fbe_date('event_starts', ' U');
				$curent_date = time();
					if ($curent_date < $fb_date) {

				 	?>

					<div class="columns shrink">
						<div class="event">
							<span class="date"><?php echo get_fbe_date('event_starts','d.m.Y'); ?></span>
							<span class="title"><?php the_title(); ?></span>
							<a href="<?php echo get_fbe_field('fb_event_uri'); ?>" target="_blank">Mehr infos</a>
						</div>
					</div>

					<?php

					};

			endwhile;
		?>

			</div>
		</section>

	<?php

	endif;
?>

<div id="bottom-pusher"></div>

<div id="jquery_jplayer_2" class="jp-jplayer"></div>
<div id="jp_container_2" class="jp-audio " role="application" aria-label="media player">
	<div class="jp-type-playlist">
		<div class="jp-gui jp-interface">
			<div class="jp-controls">
				<button class="jp-play" role="button" tabindex="0"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/player/play-button.png" alt="Aktuellen Song abspielen" width="56" height="56"></button>
				<button class="jp-pause" role="button" tabindex="0"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/player/pause-button.png" alt="Aktuellen Song pausieren" width="56" height="56"></button>
				<button class="jp-previous" role="button" tabindex="0"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/player/prev-button.png" alt="Vorherigen Song" width="19" heigh="31"></button>
				<button class="jp-next" role="button" tabindex="0"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/player/prev-button.png" alt="nächsten Song" width="19" heigh="31"></button>
			</div>
			<div class="jp-progress">
				<div class="jp-seek-bar">
					<div class="jp-play-bar">
						<div class="jp-time-holder">
							<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="jp-volume-controls">
				<button class="jp-mute" role="button" tabindex="0">mute</button>
				<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
				<div class="jp-volume-bar">
					<div class="jp-volume-bar-value"></div>
				</div>
			</div>-->
			<!--<div class="jp-time-holder">
				<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
				<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
			</div>-->
			<!--<div class="jp-toggles">
				<button class="jp-repeat" role="button" tabindex="0">repeat</button>
				<button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
			</div>-->
		</div>
		<div class="jp-playlist">
			<ul>
				<li>&nbsp;</li>
			</ul>
		</div>
		<div class="jp-no-solution">
			<span>Update Required</span>
			To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
		</div>
	</div>
</div>

</div>


<?php
get_footer();