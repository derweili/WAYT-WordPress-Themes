<?php

function free_download_banner() {

	?>

<div class="free-download-banner ">
	<a href="/downloads/wayt.zip">
		EP kostenlos<br>
		herunterladen
	</a>
</div>

	<?php

}

add_action('foundationpress_after_header', 'free_download_banner');