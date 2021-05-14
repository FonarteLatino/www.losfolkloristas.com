		<!-- Begin Home Section -->
        <section id="home-header" class="home-type">
        	<?php
			$revslider = omni_option('header_revslider');
			if ( function_exists( 'putRevSlider' ) ) {
            putRevSlider($revslider);
			} ?>
        </section>
        <!-- // End Home Section -->