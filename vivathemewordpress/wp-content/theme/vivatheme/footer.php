<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VivaTheme
 */

?>

<footer id="colophon" class="site-footer footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="footer__menu">
                <?php if ( has_nav_menu( 'menu-2' ) ) : ?>
                    <nav class="footer-navigation clear" role="navigation"
                         aria-label="<?php esc_attr_e( 'Footer Links Menu', 'vivatheme' ); ?>">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'menu-2',
                            'menu_id'        => 'footer-navigation',
                            'menu_class'     => 'theme-social-menu',
                            'depth'          => 1,
                            'link_before'    => '<span class="menu-text">',
                            'link_after'     => '</span>'
                        ) ); ?>
                    </nav><!-- .footer-navigation -->
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
