<?php
if (!defined('ABSPATH')) {
    exit;
}
?>


<div id="postbox-container-1" class="postbox-container">
    <div class="meta-box-sortables">

        <div class="postbox">
            <h3><?php esc_html_e('Plugin Info', 'wp-counter-up'); ?></h3>
            <div class="inside">
                <p>
                    <?php esc_html_e('Plugin Name :', 'wp-counter-up'); ?>
                    <?php echo esc_html($plugin_data['Title']); ?>
                    <?php echo esc_html($plugin_data['Version']); ?>
                </p>

                <p>
                    <?php esc_html_e('Author :', 'wp-counter-up'); ?>
                    <?php echo esc_html($plugin_data['Author']); ?>
                </p>

                <p>
                    <?php esc_html_e('Website :', 'wp-counter-up'); ?>
                    <a href="<?php echo esc_url('https://logichunt.com'); ?>" target="_blank" rel="noopener noreferrer">
                        <?php echo esc_html('logichunt.com'); ?>
                    </a>
                </p>

                <p>
                    <?php esc_html_e('Email :', 'wp-counter-up'); ?>
                    <a href="<?php echo esc_url('mailto:logichunt.info@gmail.com'); ?>">
                        <?php echo esc_html('info@logichunt.com'); ?>
                    </a>
                </p>

                <p>
                    <?php esc_html_e('Twitter :', 'wp-counter-up'); ?>
                    @<a href="<?php echo esc_url('https://twitter.com/logichunt'); ?>" target="_blank" rel="noopener noreferrer">
                        <?php echo esc_html('logichunt'); ?>
                    </a>
                </p>

                <p>
                    <?php esc_html_e('Facebook :', 'wp-counter-up'); ?>
                    <a href="<?php echo esc_url('https://facebook.com/logichunt'); ?>" target="_blank" rel="noopener noreferrer">
                        <?php echo esc_html('LogicHunt'); ?>
                    </a>
                </p>

                <p>
                    <?php esc_html_e('Google Plus :', 'wp-counter-up'); ?>
                    <a href="<?php echo esc_url('https://plus.google.com/u/0/+LogicHunt'); ?>" target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e('Google Plus', 'wp-counter-up'); ?>
                    </a>
                </p>
            </div>
        </div>

        <div class="postbox">
            <h3><?php esc_html_e('Help & Supports', 'wp-counter-up'); ?></h3>
            <div class="inside">
                <p>
                    <?php esc_html_e('Support :', 'wp-counter-up'); ?>
                    <a class="button" href="<?php echo esc_url('https://logichunt.com/support/'); ?>" target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e('Quick Support', 'wp-counter-up'); ?>
                    </a>
                </p>

                <p>
                    <?php esc_html_e('Contact :', 'wp-counter-up'); ?>
                    <a class="button" href="<?php echo esc_url('https://logichunt.com/contact-us'); ?>" target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e('Contact Now', 'wp-counter-up'); ?>
                    </a>
                </p>

                <p>
                    <?php esc_html_e('Website :', 'wp-counter-up'); ?>
                    <a class="button" href="<?php echo esc_url('https://logichunt.com'); ?>" target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e('Website', 'wp-counter-up'); ?>
                    </a>
                </p>

                <p>
                    <?php esc_html_e('Donate Link:', 'wp-counter-up'); ?>
                    <a class="button button-primary" href="<?php echo esc_url('https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=vaspal%2ekt%40gmail%2ecom&lc=US&item_name=LogicHunt&item_number=wp&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_LG%2egif%3aNonHosted'); ?>" target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e('Donate Now', 'wp-counter-up'); ?>
                    </a>
                </p>

                <p><?php esc_html_e('Your contribution always helps us to be more serious and supportive.', 'wp-counter-up'); ?></p>
            </div>
        </div>

        <div class="postbox">
            <div class="inside">
                <h3><?php esc_html_e('LogicHunt Networks', 'wp-counter-up'); ?></h3>

                <p>
                    <a target="_blank" href="<?php echo esc_url('https://logichunt.com'); ?>">LogicHunt</a>:
                    <?php esc_html_e('Joomla and WordPress Plugin, Extensions, Theme.', 'wp-counter-up'); ?>
                </p>

                <p>
                    <a target="_blank" href="<?php echo esc_url('https://themearth.com'); ?>">ThemEarth</a>:
                    <?php esc_html_e('Themes & Templates.', 'wp-counter-up'); ?>
                </p>
            </div>
        </div>

    </div><!-- .meta-box-sortables -->
</div><!-- #postbox-container-1 .postbox-container -->