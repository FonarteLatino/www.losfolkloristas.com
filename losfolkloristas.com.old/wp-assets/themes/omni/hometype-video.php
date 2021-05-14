		<!-- Begin Home Section -->
        <section id="home-header" class="home-type">
                
                <div class="video-bg">
                <?php if (omni_option('header_video_type') == 'youtube') { ?>
                <iframe src="http://www.youtube.com/embed/<?php echo omni_option('header_video_code'); ?>?controls=0&showinfo=0&modestbranding=1&autoplay=&fs=0&hd=0&loop=0&wmode=opaque&rel=0" frameborder="0" allowfullscreen></iframe>
                <?php } elseif (omni_option('header_video_type') == 'vimeo') { ?>
                <iframe src="http://player.vimeo.com/video/<?php echo omni_option('header_video_code'); ?>?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                <?php } ?>
                </div>
                
        </section>
        <!-- // End Home Section -->