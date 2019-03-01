<?php
/**
 * Template Name: One Raleigh Site Main
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">
				<header class="intro" id="intro">
					<h1 class="screen-reader-text">One Raleigh</h1>
					<div class="intro__logo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/one-raleigh-main.svg" alt="One Raleigh Logo" class="intro__image">
					</div>	
					<div class="intro__content">	
						<?php if( get_field('intro_title') ): ?>
							<h2 class="intro__title "><?php the_field('intro_title'); ?></h2>
						<?php endif; ?>
                        
                        <?php if( get_field('intro_subtitle') ): ?>
                            <p class="intro__subtitle"><?php the_field('intro_subtitle'); ?></p>
						<?php endif; ?>
					</div>
					<a href="#about" class="intro__more">
						<div class="intro__more-link">More</div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="More" class="intro__more-arrow">
					</a>
					<div id="intro-line" class="intro__line">
						<img src="<?php echo get_template_directory_uri(); ?>/img/intro-line.svg" alt="Decoration">
					</div>
				</header>
				<section class="about" id="about">
					<div class="about__breakout">
                        <?php if( get_field('about_title') ): ?>
                            <h1 class="about__title"><?php the_field('about_title'); ?></h1>
						<?php endif; ?>
					</div>
					
					<div class="about__content">
                        <?php if( get_field('about_text') ): ?>
                            <h1 class="about__title"><?php the_field('about_text'); ?></h1>
                        <?php endif; ?>
					</div>
					<div id="about-line" class="about__line">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-line.svg" alt="Decoration">
					</div>
				</section>
				<section class="contact" id="contact">
					<div class="contact__form">
                        <?php if( get_field('contact_title') ): ?>
                            <h1 class="contact__title"><?php the_field('contact_title'); ?></h1>
                        <?php endif; ?>
						<?php echo do_shortcode('[contact-form-7 id="15" title="Contact form 1"]'); ?>
						<div id="contact-line" class="contact__line">
							<img src="<?php echo get_template_directory_uri(); ?>/img/contact-line.svg" alt="Decoration">
						</div>
					</div>			
				</section>
				<footer class="footer" id="end">
					<p class="footer__content">The End.</p>
					<p>jk...</p>
					<div id="footer-line" class="footer__line">
						<img src="<?php echo get_template_directory_uri(); ?>/img/end-line.svg" alt="Decoration">
					</div>
				</footer>
		</main><!-- #main -->
		<div class="easter-egg">
			<div class="easter-egg__link">
                    <?php if( get_field('easter_egg_title') ): ?>
                        <p><?php the_field('easter_egg_title'); ?></p>
                    <?php endif; ?>
                <?php if( get_field('easter_egg_link_url') ): ?>
				<div class="easter-egg__glitch">
					<div class="easter-egg__glitch-link">
						<a href="<?php the_field('easter_egg_link_url'); ?>" target="_blank"><?php the_field('easter_egg_link_text'); ?></a>
						<a href="<?php the_field('easter_egg_link_url'); ?>" target="_blank"><?php the_field('easter_egg_link_text'); ?></a>
						<a href="<?php the_field('easter_egg_link_url'); ?>" target="_blank"><?php the_field('easter_egg_link_text'); ?></a>
					</div>
				</div>
                <?php endif; ?>
			</div>
		</div>
		<div id="cats"></div>
    </div><!-- #primary -->
    
<?php
get_footer();