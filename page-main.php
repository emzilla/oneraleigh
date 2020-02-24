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
					<div class="intro__more">
						<a href="#about">
							<div class="intro__more-link">More</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="More" class="intro__more-arrow">
						</a>
					</div>
					<div id="intro-line" class="intro__line">
						<img src="<?php echo get_template_directory_uri(); ?>/img/intro-line.svg" alt="Decoration">
					</div>
				</header>
				<section class="announcement" id="announcement">
					<div class="announcement__content">
						<h2 class="announcement__title">What's New</h2>
						<h3 class="announcement__subtitle">A Special Announcement</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse elementum diam urna, ac venenatis lectus condimentum et. Nullam commodo lorem non scelerisque auctor. Fusce non massa sed nibh hendrerit sagittis. Fusce ante ex, aliquet et pretium quis, ornare a metus. Morbi sollicitudin eros venenatis diam varius condimentum. Nam volutpat ullamcorper ex, ac bibendum tortor rutrum nec.</p>
						<br>
						<p>Donec eu sollicitudin dui, ut ullamcorper mi. Nam pulvinar nunc dui. Nam id lectus pharetra dui dictum laoreet. Nunc lectus turpis, dignissim et metus a, scelerisque gravida metus. Phasellus eu sodales magna. Donec fermentum erat tempus, scelerisque justo sed, hendrerit dui. Vivamus rhoncus dolor eu leo ultrices semper. Integer in magna mauris. Morbi sodales lectus a augue tempor, a placerat mauris eleifend.</p>
						<br>
						<p>Nam at ligula sit amet nisl porttitor consectetur et eget libero. Phasellus nec quam sit amet elit elementum malesuada. Integer vitae aliquet felis. Donec non mattis tortor. Nam auctor convallis dictum. Proin nibh nisl, ultricies et turpis a, tempus cursus dolor. Praesent risus nunc, euismod eget porta ac, bibendum sed ligula.
						</p>
					</div>
					<figure class="announcement__figure">
						<img src="<?php echo get_template_directory_uri(); ?>/img/kim-hammer-caroline-morrison-askew-house.png" alt="Kim Hammer and Caroline Morrison pictured in Askew House building" class="announcement__image">
						<figcaption class="visuallyhidden">Kim Hammer and Caroline Morrison</figcaption>
						<a href="#about" class="intro__more">
							<div class="intro__more-link">Want to get in touch?</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="More" class="intro__more-arrow">
						</a>
					</figure>
				</section>
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
					<div class="contact__projects">
						<h1 class="contact__title">Projects</h1>
							<ul class="contact__project-list">
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/project-askew-house-logo.png" alt=""></li>
								<li>
									<a href="http://jsyachtclub.com" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/img/project-johnson-street-yacht-club-logo.png" alt="JSYC">
									</a>
								</li>
							</ul>
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