<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oneraleigh
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
				<header class="intro" id="intro">
					<h1 class="screen-reader-text">One Raleigh</h1>
					<div class="intro__logo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/one-raleigh-main.svg" alt="One Raleigh Logo" class="intro__image">
					</div>	
					<div class="intro__content">	
						<h2 class="intro__title ">Us... in our greatest role</h2>
						<p class="intro__subtitle">You... drunk on hospitality</p>
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
						<h1 class="about__title">Never been slackers always been hungry.</h1>
					</div>
					
					<div class="about__content">
						<h2 class="about__heading">Every abandoned building is an opportunity</h2>
						<blockquote>“any owner of that lot next door has a right to do with it as he pleases”</blockquote>
						<blockquote>“rezoned for her pleasure"</blockquote>

						<h2 class="about__heading">BUT NO...</h2>
						<p>No to condos, paid parking and generic bars. No to big boxes and corporate logos slapped down in place of old bowling alleys.</p>
						
						<h2 class="about__heading">YES TO:</h2>
						<p>Yes to late nights, choice, hunger, desire, salty women & feminist men.</p>
						<p>Yes to culture, independence, ego checks & NFG, dinner parties, clean food & strong drinks.</p>

						<h2 class="about__heading">Who are we?</h2>
						<p>We are the contemptuously impatient for neighborhood spots that are sweet revenge for all the shitty jobs in generic spaces we’ve been stuck in too long.</p>
						<p><strong>Relax. Get comfortable. It’s gonna get weird, but it’s gonna be okay.</strong></p>
					</div>
					<div id="about-line" class="about__line">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-line.svg" alt="Decoration">
					</div>
				</section>
				<section class="contact" id="contact">
					<div class="contact__form">
						<h1 class="contact__title">New Site Who Dis?</h1>
						<?php echo do_shortcode('[contact-form-7 id="11" title="Contact form 1"]'); ?>
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
				<p>Do you want to see <strong>CATS BOUNCE?</strong></p>
				<div class="easter-egg__glitch">
					<div class="easter-egg__glitch-link">
						<a href="https://cat-bounce.com/" target="_blank">Hells Yeah</a>
						<a href="https://cat-bounce.com/" target="_blank">Hells Yeah</a>
						<a href="https://cat-bounce.com/" target="_blank">Hells Yeah</a>
					</div>
				</div>
			</div>
		</div>
		<div id="cats"></div>
	</div><!-- #primary -->

<?php
get_footer();
